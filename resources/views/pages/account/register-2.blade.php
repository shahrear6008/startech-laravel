<?php
    include_once('../header.php');
    if(!isset($_SESSION['otp']) & empty($_SESSION['otp'])){
      echo" <script>window.location = 'register'</script>";
    }
     $err=''; 
    if(isset($_POST) & !empty($_POST)){
      
     
      $otp =$_POST['otp'];
      $password =$_POST['password'];  
      $cpassword =$_POST['confirm']; 
      $uid =   $_SESSION['customerid'];

      $sql = "SELECT * FROM user_info WHERE id=$uid";
      $result = mysqli_query($conn,$sql);    
      $row = mysqli_fetch_assoc($result); 
   
   

      if($otp === $_SESSION["otp"]){
  
            if($password === $cpassword){
              $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              $sql = "UPDATE `user_info` SET `password`='$password',`otp`='0',`user_status`='verified' WHERE id=$uid";
              $result = mysqli_query($conn,$sql);
                unset($_session['otp']);                    
              echo" <script>window.location = 'login'</script>";  
              }else{   
              $err= '   <div class="alert alert-danger">  
                          <i class="material-icons">error</i> 
                            Your Password and comfirm password don"t match!
                        </div>';
              }
        }else{   
          $err= '  <div class="alert alert-danger">  
                      <i class="material-icons">error</i> 
                        Your OTP don"t match!
                    </div>';
          }
  }
    
  
   ?>
  <section class="after-header p-tb-10">
      <div class="container">
          <ul class="breadcrumb">
          <li>
            <a href="/">
            <i class="material-icons">home</i>
            </a>
          </li>
          <li><a href="account">
            Register
          </a></li>
      </ul>
    </div>
  </section>
  
  <div class="container  ac-layout before-login">
      <div class="panel m-auto">
          <div class="p-head">
              <h2 class="text-center">OTP Verification</h2>
              <p>We've send a verification code to your phone - <?php echo  $_SESSION['num']; ?></p>
              <?php echo $err;  ?>     
          </div>
          <div class="p-body">
                          <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="step" value="2">
                  <div class="form-group required">
                      <label for="input-otp">OTP</label>
                      <input type="password" name="otp" value="" placeholder="OTP" id="input-otp" class="form-control">
                                      </div>
                  <div class="form-group required">
                      <label for="input-password">Password</label>
                      <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                      </div>
                  <div class="form-group required">
                      <label for="input-confirm">Password Confirm</label>
                      <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                                      </div>
                  <button type="submit" class="btn btn-primary">Continue</button>
                  <a href="register" class="btn st-outline">Back</a>
              </form>
          </div>
      </div>
  </div>
    
    
  
  
  <?php  include_once('../footer.php')?>
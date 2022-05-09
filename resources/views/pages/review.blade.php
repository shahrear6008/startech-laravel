<?php include_once('header.php'); ?>
<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="https://www.srboostpoint.xyz/"><i class="material-icons" title="Home">home</i></a></li>
            <li><a href="https://www.srboostpoint.xyz/acer-aspire-3-a315-58-core-i3-11th-gen-laptop">Product</a></li>
            <li><a href="https://www.srboostpoint.xyz/account/review">Review</a></li>
        </ul>
    </div>
</section>
<section class="bg-bt-gray">
  <div class="container ac-layout">
    <div class="panel m-auto ws-box p-15">
      <div class="ac-title">
        <a href="#">
          <span class="material-icons">arrow_back</span>
        </a>
        <h1>Write Review</h1>
      </div>
      <form action="/account/review" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
          <label>Product</label>
          <div class="b-box">Acer Aspire 3 A315-58 Core i3 11th Gen 15.6" FHD Laptop</div>
        </div>
        <div class="form-group required">
          <label>Rating</label>
          <div id="input-ratting"> Bad &nbsp; <input type="radio" name="rating" value="1"> &nbsp; <input type="radio" name="rating" value="2"> &nbsp; <input type="radio" name="rating" value="3"> &nbsp; <input type="radio" name="rating" value="4"> &nbsp; <input type="radio" name="rating" value="5" checked=""> Good </div>
        </div>
        <div class="form-group required">
          <label for="input-text">Your Review</label>
          <textarea name="text" id="input-text" placeholder="Your Review" class="form-input"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn st-outline" href="https://www.srboostpoint.xyz/">Back</a>
      </form>
    </div>
  </div>
</section>


<?php include_once('footer.php');?>

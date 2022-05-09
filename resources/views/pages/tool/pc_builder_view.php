<?php
include_once('..//header.php');
$uid=$_SESSION['customerid']; 

?>


<section class="after-header p-tb-10">
    <div class="container">
        <ul class="breadcrumb">
          <li>
            <a href="/">
              <i class="material-icons">home</i>
            </a>
          </li>
          <li>
            <a href="tool"> Pc Builder </a>
          </li>
        </ul>
  </div>
</section>

<section class="build-your-pc pc-info bg-bt-gray">
  <div class="container">
    <div class="pcb-container">
      <div class="pcb-head">
        <div class="startech-logo">
          <img
            class="logo"
            src="https://www.startech.com.bd/image/catalog/logo.png"
            alt="Logo"
          />
        </div>
        <div class="actions">
          <div class="all-actions">
            <a
              class="action"
              href="https://www.startech.com.bd/tool/tool/add_to_cart?pc_id=59261"
            >
              <i class="material-icons">shopping_basket</i>
              <span class="action-text">Add to Cart</span>
            </a>
            <a
              class="action"
              href="https://www.startech.com.bd/tool/tool/copy?pc_id=59261"
            >
              <i class="material-icons">content_copy</i>
              <span class="action-text">Copy</span>
            </a>
            <form
              action="https://www.startech.com.bd/tool/tool/base64_to_image"
              target="_blank"
              method="post"
              id="form-base64-image"
            >
              <input
                type="hidden"
                name="image"
                id="input-base64-image"
                value=""
              />
              <button type="submit" class="action">
                <i class="material-icons">camera</i>
                <span class="action-text">Screenshot</span>
              </button>
            </form>
            <a class="pcb-button btn st-outline" href="pc_builder"
              >Build Your Own PC</a
            >
          </div>
        </div>
      </div>

      <div class="pcb-inner-content">
        <div class="pcb-top-content">
          <div class="left">
            <h5 class="m-hide">
              PC Builder - Build Your Own Computer - Star Tech
            </h5>
            <div class="checkbox-inline">
              <input type="checkbox" name="hide" id="input-hide" />
              <label for="input-hide">Hide Unconfigured Components</label>
            </div>
          </div>


             
          <?php $total_watt = 0;
                $total_price = 0;             
     
          $sql = "SELECT * FROM tool where uid=$uid"; 
          
          $result = mysqli_query($conn,$sql);    
            
         while($row = mysqli_fetch_assoc($result)){
            if ((mysqli_num_rows($result))>=1){ 
              $total_price = $total_price + (int)$row['product_price'];
              $total_watt = $total_watt + (int)$row['product_watt'];           
            
          }   }
           ?>
          <div class="right">
            <div class="total-amount estimated-watt hide">
              <span class="amount"><?php echo $total_watt ?>W</span><br />
              <span class="items">Estimated Wattage</span>
            </div>
            <div class="total-amount t-price">
              <span class="amount"><?php echo $total_price ?>৳</span><br />
              <span class="items">
               <?php
               if (( $count = mysqli_num_rows($result))>=1){   
                 
                  echo "<span class=\"items\"> $count items </span>";
              }else{
               
                  echo '<span class=\"items\">0 items </span>';
              }
           ?>  </span>
            </div>
          </div>
        </div>
        <div class="pcb-content">
          <div class="content-label">Core Components</div>
         <?php 
         $sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=1 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
          
          $result = mysqli_query($conn,$sql);
          if ((mysqli_num_rows($result))>=1){
          $row = mysqli_fetch_assoc($result);
                
                  $price= $row['product_price'];
                  $img= $row['product_image'];
                  $name= $row['product_name'];
                  $productid =$row['id'];   
            
                              
                  ?> 
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href="https://www.startech.com.bd/intel-pentium-gold-g5420-processor"
                >
                <img
                  src="<?php echo $img ?>"
                  alt="CPU"
                  title="CPU"
                  width="80"
                  height="80"
                  />
              </a>
            </div>
            <div class="details">
              <div class="component-name"><span>CPU</span></div>
              <div class="product-name">
              <?php echo $name ?>
              </div>
              <div class="product-watt">
                <img src="./img/icon/watt.svg" alt="Wattage Icon" />
                <span>6W</span> <span> - </span> <span>54W</span>
              </div>
            </div>
            <div class="item-price">
              <div class="price"><?php echo $price ?>৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
<?php
        }
?>
   <?php 
          $sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=2 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
          
          $result = mysqli_query($conn,$sql);
          if ((mysqli_num_rows($result))>=1){
          $row = mysqli_fetch_assoc($result);
                
                  $price= $row['product_price'];
                  $img= $row['product_image'];
                  $name= $row['product_name'];
                  $productid =$row['id'];   
            
                              
                  ?> 
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href="https://www.startech.com.bd/deepcool-gamma-archer-cpu-air-cooler"
                ><img
                  src="<?php echo $img ?>"
                  alt="CPU Cooler"
                  title="CPU Cooler"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>CPU Cooler</span></div>
              <div class="product-name">
              <?php echo $name ?>
              </div>
              <div class="product-watt">
                <img src="./img/icon/watt.svg" alt="Wattage Icon" />
                <span>5W</span> <span> - </span> <span>10W</span>
              </div>
            </div>
            <div class="item-price">
              <div class="price"><?php echo $price ?>৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
          <?php
        }
?>
          <?php 
         $sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=3 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
          
          $result = mysqli_query($conn,$sql);
          if ((mysqli_num_rows($result))>=1){
          $row = mysqli_fetch_assoc($result);
                
                  $price= $row['product_price'];
                  $img= $row['product_image'];
                  $name= $row['product_name'];
                  $productid =$row['id'];   
            
                              
                  ?> 
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href="https://www.startech.com.bd/gigabyte-h310m-h-8th-gen-motherboard"
                ><img
                  src="<?php echo $img ?>"
                  alt="Mother Board"
                  title="Mother Board"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>Mother Board</span></div>
              <div class="product-name">
              <?php echo $name ?>
              </div>
              <div class="product-watt">
                <img src="./img/icon/watt.svg" alt="Wattage Icon" />
                <span>15W</span> <span> - </span> <span>60W</span>
              </div>
            </div>
            <div class="item-price">
              <div class="price"><?php echo $price ?>৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
          <?php
        }
?>   
          <?php 
        $sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=4 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
          
          $result = mysqli_query($conn,$sql);
          if ((mysqli_num_rows($result))>=1){
          $row = mysqli_fetch_assoc($result);
                
                  $price= $row['product_price'];
                  $img= $row['product_image'];
                  $name= $row['product_name'];
                  $productid =$row['id'];   
            
                              
                  ?> 
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href="https://www.startech.com.bd/twinmos-4gb-ddr3-1600mhz"
                ><img
                  src="<?php echo $img ?>"
                  alt="RAM - 1"
                  title="RAM - 1"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>RAM - 1</span></div>
              <div class="product-name"><?php echo $name ?></div>
              <div class="product-watt">
                <img src="./img/icon/watt.svg" alt="Wattage Icon" />
                <span>3W</span> <span> - </span> <span>5W</span>
              </div>
            </div>
            <div class="item-price">
              <div class="price"><?php echo $price ?>৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
          
          <?php
        }
?>   <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=5 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
          
          $result = mysqli_query($conn,$sql);
          if ((mysqli_num_rows($result))>=1){
          $row = mysqli_fetch_assoc($result);
                
                  $price= $row['product_price'];
                  $img= $row['product_image'];
                  $name= $row['product_name'];
                  $productid =$row['id'];   
            
                              
                  ?> 
               <div class="c-item selected">
                  <div class="img">
                    <a target="_blank" href="https://www.startech.com.bd/patriot-ddr-4-4gb">
                      <img   src="<?php echo $img ?>" alt="RAM - 2" title="RAM - 2" width="80" height="80">
                    </a>
                  </div>
                  <div class="details">
                    <div class="component-name">
                      <span>RAM - 2</span>
                    </div>
                    <div class="product-name">      <?php echo $name ?></div>
                    <div class="product-watt">
                      <img src="catalog/view/theme/starship/images/watt.svg" alt="Wattage Icon">
                      <span>3W</span>
                      <span> - </span>
                      <span>5W</span>
                    </div>
                  </div>
                  <div class="item-price">
                    <div class="price"> <?php echo $price ?>৳ </div>
                  </div>
                  <div class="actions">
                    <span class="stock-status">In Stock</span>
                  </div>
                </div>
          <?php
        }
?>
          <?php 
        $sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=6 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
          
          $result = mysqli_query($conn,$sql);
          if ((mysqli_num_rows($result))>=1){
          $row = mysqli_fetch_assoc($result);
                
                  $price= $row['product_price'];
                  $img= $row['product_image'];
                  $name= $row['product_name'];
                  $productid =$row['id'];   
            
                              
                  ?> 
          <div class="c-item selected">
            <div class="img">
              <a
                target="_blank"
                href="https://www.startech.com.bd/patriot-burst-120gb-ssd"
                ><img
                  src="<?php echo $img ?>"
                  alt="Storage - 1"
                  title="Storage - 1"
                  width="80"
                  height="80"
              /></a>
            </div>
            <div class="details">
              <div class="component-name"><span>Storage - 1</span></div>
              <div class="product-name">
              <?php echo $name ?>
              </div>
              <div class="product-watt">
                <img src="./img/icon/watt.svg" alt="Wattage Icon" />
                <span>2W</span> <span> - </span> <span>10W</span>
              </div>
            </div>
            <div class="item-price">
              <div class="price"><?php echo $price ?>৳</div>
            </div>
            <div class="actions">
              <span class="stock-status">In Stock</span>
            </div>
          </div>
          <?php
        }
?>  
 <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=7 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/lexar-ns100-128gb-ssd">
              <img src="https://www.startech.com.bd/image/cache/catalog/ssd/lexar/ns100-256gb/ns100-256gb-80x80.jpg" alt="Storage  - 2" title="Storage  - 2" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Storage - 2</span>
            </div>
            <div class="product-name">Lexar NS100 128GB 2.5 inch Gray SATA III SSD</div>
            <div class="product-watt">
              <img src="catalog/view/theme/starship/images/watt.svg" alt="Wattage Icon">
              <span>2W</span>
              <span> - </span>
              <span>10W</span>
            </div>
          </div>
          <div class="item-price">
            <div class="price">2,000৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        
        </div>

                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=8 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/msi-gt-710-2gd3h-lp-graphics-card">
              <img src="https://www.startech.com.bd/image/cache/catalog/graphics-card/msi/gt-710-2gd3h-lp/gt-710-2gd3h-lp-80x80.jpg" alt="Graphics Card" title="Graphics Card" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Graphics Card</span>
            </div>
            <div class="product-name">MSI GT 710 2GD3H LP 2GB DDR3 Gaming Graphic Card</div>
            <div class="product-watt">
              <img src="catalog/view/theme/starship/images/watt.svg" alt="Wattage Icon">
              <span>12W</span>
              <span> - </span>
              <span>49W</span>
            </div>
          </div>
          <div class="item-price">
            <div class="price">6,200৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>

        
        <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=9 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/thermaltake-wd422re-litepower-350w-power-supply">
              <img src="https://www.startech.com.bd/image/cache/catalog/power-supply/thermaltake/wd422re/wd422re-80x80.jpg" alt="Power Supply" title="Power Supply" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Power Supply</span>
            </div>
            <div class="product-name">Thermaltake W0422RE Litepower 350W Non Modular Power Supply</div>
          </div>
          <div class="item-price">
            <div class="price">2,800৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>

        
        <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=10 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/maxgreen-2810bg-casing">
              <img src="https://www.startech.com.bd/image/cache/catalog/component/casing/maxgreen/2810bg/2810bg-1-80x80.jpg" alt="Casing" title="Casing" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Casing</span>
            </div>
            <div class="product-name">MaxGreen 2810BG ATX Casing</div>
          </div>
          <div class="item-price">
            <div class="price">2,300৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 



<div class="content-label">Peripherals &amp; Others</div>
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=11 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
       
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/deepcool-xfan-120-case-cooling-fan">
              <img src="https://www.startech.com.bd/image/cache/catalog/casing-cooler/deepcool/xfan-80/xfan-80-01-80x80.jpg" alt="Casing Cooler" title="Casing Cooler" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Casing Cooler</span>
            </div>
            <div class="product-name">Deepcool XFAN 120 Case Cooling Fan</div>
            <div class="product-watt">
              <img src="catalog/view/theme/starship/images/watt.svg" alt="Wattage Icon">
              <span>1W</span>
              <span> - </span>
              <span>5W</span>
            </div>
          </div>
          <div class="item-price">
            <div class="price">350৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=12 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/aoc-e970swhen-led-monitor">
              <img src="https://www.startech.com.bd/image/cache/catalog/monitor/aoc/e970swhen/e970Swhen-main-80x80.jpg" alt="Monitor" title="Monitor" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Monitor</span>
            </div>
            <div class="product-name">AOC E970SWHEN 18.5" HDMI LED Monitor</div>
          </div>
          <div class="item-price">
            <div class="price">9,200৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=13 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/golden-field-gf-k101-wired-usb-keyboard">
              <img src="https://www.startech.com.bd/image/cache/catalog/keyboard/golden-field/gf-k-101/golden-field-gf-k101-wired-usb-keyboard-01-80x80.jpg" alt="Keyboard" title="Keyboard" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Keyboard</span>
            </div>
            <div class="product-name">Golden Field GF-K101 Wired USB Keyboard with Bangla</div>
          </div>
          <div class="item-price">
            <div class="price">450৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=14 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/micropack-m103-optical-usb-mouse">
              <img src="https://www.startech.com.bd/image/cache/catalog/mouse/micropack/m103/m103-1-80x80.jpg" alt="Mouse" title="Mouse" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Mouse</span>
            </div>
            <div class="product-name">Micropack M103 Optical USB Mouse</div>
          </div>
          <div class="item-price">
            <div class="price">250৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=15 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/fantech-ac3001-headphone-stand">
              <img src="https://www.startech.com.bd/image/cache/catalog/accessories/headset/fantech/headphone-stand/ac3001/ac3001-80x80.jpg" alt="Headphone" title="Headphone" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Headphone</span>
            </div>
            <div class="product-name">Fantech AC3001 Tower Headphone Stand</div>
          </div>
          <div class="item-price">
            <div class="price">600৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=16 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/eset-one-user-antivirus">
              <img src="https://www.startech.com.bd/image/cache/catalog/software/antivirus/eset/internet-security/eset-internet-security-1-user1-year-80x80.jpg" alt="Anti Virus" title="Anti Virus" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>Anti Virus</span>
            </div>
            <div class="product-name">ESET Internet Security One User </div>
          </div>
          <div class="item-price">
            <div class="price">1,050৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>
                  <?php
                   }
                   ?> 
                    <?php 
$sql ="SELECT p.product_image, p.product_name, p.product_price, p.id AS pid, svd.id AS id, svd.`timestamp` FROM  savedpc_items s JOIN saved_pc svd JOIN producttb p WHERE s.cid=17 AND s.pid=p.id AND s.uid='$uid' ORDER BY id DESC";
  
  $result = mysqli_query($conn,$sql);
  if ((mysqli_num_rows($result))>=1){
  $row = mysqli_fetch_assoc($result);
        
          $price= $row['product_price'];
          $img= $row['product_image'];
          $name= $row['product_name'];
          $productid =$row['id'];   
    
                      
          ?>
        <div class="c-item selected">
          <div class="img">
            <a target="_blank" href="https://www.startech.com.bd/digital-x-1200va-offline-ups">
              <img src="https://www.startech.com.bd/image/cache/catalog/ups/digital-x/1200va/1200va-80x80.jpg" alt="UPS" title="UPS" width="80" height="80">
            </a>
          </div>
          <div class="details">
            <div class="component-name">
              <span>UPS</span>
            </div>
            <div class="product-name">Digital X 1200VA Offline UPS</div>
          </div>
          <div class="item-price">
            <div class="price">5,000৳</div>
          </div>
          <div class="actions">
            <span class="stock-status">In Stock</span>
          </div>
        </div>

        <?php
                   }
                   ?>






        </div>
      </div>
    </div>
  </div>
</section>








<script type="text/javascript">
    var image = document.getElementById("input-base64-image");
    function takeShot() {
        var region = document.querySelector(".pcb-container"), scrollTop = document.documentElement.scrollTop, config = {
            async: true,
        };
        if(scrollTop) {
            config.scrollY = -scrollTop
        }

        html2canvas(region, config).then(function(canvas) {
            var pngUrl = canvas.toDataURL();
            window.ca = canvas
            image.value = canvas.toDataURL("image/jpeg");
        }).catch(function (reason) {
            console.log(reason)
        });
    }
    app.onReady(window, ["html2canvas"], function () {
       takeShot();
       $("#input-hide").on("change", function () {
           if(this.checked) {
               $(".c-item.blank").addClass("hide")
           } else {
               $(".c-item.blank").removeClass("hide")
           }
           image.value = "";
           setTimeout(takeShot, 500)
       })
    }, 30, 100);

    var form = document.getElementById("form-base64-image");
    form.onsubmit = function (ev) {
        var input = document.getElementById("input-base64-image");
        if(!input.value) {
            alert("Screenshot isn't prepared yet. Please clink again")
        }
        if(!input.value) {
            ev.preventDefault()
        }
    }
</script>
<?php
 include_once('../footer.php');
?>
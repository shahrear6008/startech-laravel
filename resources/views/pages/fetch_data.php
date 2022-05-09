<?php require_once ('php/config.php');
      require_once ('php/cart.php');


 if(isset($_POST["action"])){
	// if(isset($_GET['id']) && !empty($_GET['id'])){
	// 	$id = $_GET['id'];
		$query = "SELECT * FROM producttb WHERE component_id=''";
			

	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND product_brand IN('".$brand_filter."')
		";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND product_ram IN('".$ram_filter."')
		";
	}
	if(isset($_POST["processor"]))
	{
		$processor_filter = implode("','", $_POST["processor"]);
		$query .= "
		 AND product_processor IN('".$processor_filter."')
		";
	}
	if(isset($_POST["price"]))
	{
		$price_filter = implode("','", $_POST["price"]);
		$query .= "
		 AND product_price IN('".$price_filter."')
		";
	}
	
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);
			
		if($count > 0){
		while($row = mysqli_fetch_assoc($result)){
				cartable(                              
				$row['product_name'],                    
				$row['product_model'],
				$row['product_price'], 
				$row['product_image'],
				$row['id']
		  );
			
		}
	}else{
	echo '<div class="container">
			 <div class="main-content p-items-wrap">
				  <div class="empty-content">
					  <span class="icon material-icons">assignment</span>
					  <div class="empty-text ">
					  <h5>Sorry! No Product Founds</h5>
					  <p>Please try searching for something else</p>
					  </div>
				  </div>
			  </div>
		  </div>
	  
		';
}
	
}




?>
<style>
    .p-items-wrap {
		display: flex;
		flex-wrap: wrap;
		margin: 0 -5px;
		padding: 0;
		justify-content: flex-start;
	}.empty-content {
		padding: 50px 0;
		text-align: center;
		width: 100%;
	}.empty-content .icon {
		padding: 20px;
		background: rgba(55, 73, 187, 0.1);
		color: #3749BB;
		border-radius: 50px;
		font-size: 48px;
		width: 88px;
		height: 88px;
	}

    .empty-content .empty-text {
		color: #666666;
		padding-top: 20px;
		font-size: 14px;
	}@media (max-width: 1279px){
	p {
		font-size: 14px;
	}
    }

	p {
		margin-bottom: 10px;
		font-size: 15px;
		color: #01132D;
		line-height: 26px;
	}
</style>
@extends('layouts.default')
@section('title','product')
@section('content')

    <!-- Page Content -->
        	
 <section class="af_header">
    <div class="container">
    <div class="p_items_choose">
       <div class="choose_left_range">
            <div class="price_filter">
                <h4>Price Range</h4>
                <br />

             

                <div class="double_range">
              
                <input type="hidden" id="slider-11" value="5000" />
                <input type="hidden" id="slider-22" value="650000"/>

                    <div class="price_range">
                       
                    </div>
                      <br> <br>  
                      
                      <div class="values">
                        <span id="price_show"> 5000 </span>

                        <span id="price_show2"> 65000 </span>
                    </div>
                   <!-- <input type="number" name="" value="1000" id="price_show">
                   <input type="number" name="" value="65000" id="price_show2"> -->
             
             				
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>Brand Name</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                <div style="overflow-y: auto; overflow-x: hidden;">
					<?php
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                            $id = $_GET['id'];
                    $query = "SELECT DISTINCT(product_brand) FROM products WHERE component_id=$id ORDER BY id ASC ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_brand']; ?>"  > <?php echo $row['product_brand']; ?></label>
                    </div>
                    <?php
                    }
                    }

                    ?>
                    </div>
                </div>
            </div>

                <div class="avail">
                <div class="label btnli">
                    <span>Type</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <?php
                        if(isset($_GET['id']) && !empty($_GET['id'])){
                                $id = $_GET['id'];
                        $query = "SELECT DISTINCT(product_ram) FROM products WHERE component_id=$id ORDER BY product_ram DESC
                        ";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                        ?>
                        <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_ram']; ?>" > <?php echo $row['product_ram']; ?> GB</label>
                        </div>
                        <?php    
                        }
                        }

                        ?>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span> Product Processor</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
              <?php
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "SELECT DISTINCT(product_processor) FROM products WHERE component_id=$id ORDER BY product_processor DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector processor" value="<?php echo $row['product_processor']; ?>"  > <?php echo $row['product_processor']; ?> </label>
                    </div>
                    <?php
                    }                                                               
                    }                                                               
                    ?>	
                </div>
            </div>
       </div>
   

        <div class="pc-builder-choose-content">  
            <div class="filter ">
                <div class="f_left">
                    <a href="tool"> <i class="material-icons">arrow_back</i></a>
                    <input type="search" name="" id="" placeholder="search" />
                    <i class="f_search material-icons">search</i>
                    <i class="material-icons p_range_popup">filter_list</i>
                    <span>Filter</span>
                </div>
                <div class="f_right">
                    <label for="">text_sort</label>
                    <select name="price" class="">
                    <option value="">Default</option>
                    <?php
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "SELECT DISTINCT(product_price) FROM products WHERE component_id=$id ORDER BY product_price ASC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>                
                        <option value="">price_(Low-High) </option>
                        <option value="">price_(High-low) </option>
                   
                    <?php
                    }                                                               
                    }                                                               
                    ?>
                    </select>
                </div>
            </div>          	
            <div class="p_cart product_list filter_data">
            
            </div>
        </div>
  
      </div>  
    </div>         
  </section>


<script>
$(document).ready(function(){
    filter_data();
    function filter_data(){
         $('.filter_data').html('<div id="product_item"></div>');
        var action = 'fetch_data';
        var minimum_price = $('#slider-11').val();
        var maximum_price = $('#slider-22').val();
        var minimum_priceval = $('#slider_value').val();     
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        var processor = get_filter('processor');
        var price = get_filter('price');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram,  storage:storage, processor:processor ,price:price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }







    function get_filter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('.price_range').slider({
        range:true,
        min:5000,
        max:65000,
        values:[5000, 65000],
        step:500,
        stop:function(event, minimum_priceval){
            $('#price_show').html(minimum_priceval.values[0] );
            $('#price_show2').html(minimum_priceval.values[1]);
            $('#slider-11').val(minimum_priceval.values[0]);
            $('#slider-22').val(minimum_priceval.values[1]);
            filter_data();
        }
    });
});

</script>

@endsection
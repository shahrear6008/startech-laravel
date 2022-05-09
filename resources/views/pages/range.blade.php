

        <div class="choose_left_range">
            <div class="price_filter">
                <h4>
                    Price Range
                </h4>
                <br />
                <div class="double_range">
                    <div class="values">
                        <span id="range1"> 0 </span>

                        <span id="range2"> 100 </span>
                    </div>

                    <div class="slider-track">
                        <input type="range" min="100" max="82000" value="5000" id="slider-1" oninput="slideOne()" />
                        <input type="range" min="100" max="82000" value="70000" id="slider-2" oninput="slideTwo()" />
                    </div>
                </div>

                <!-- <div class="r_value">
                    <input type="number" class="v_left " name="" id="range1"  value="0" >
                    <input type="number" class="v_right" name="" id="range2"   value="0"  >
                </div>                -->
            </div>

            <div class="avail">
                <div class="label btnli">
                    <span>availability</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">

                
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>Type</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span> Number of Core</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>clock speed</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
            <div class="avail">
                <div class="label btnli">
                    <span>caches</span>
                    <i class="material-icons a_rotate">expand_more</i>
                </div>
                <div class="items">
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>in stock</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Pre Order</span>
                    </label>
                    <label for="">
                        <input type="checkbox" name="" id="" />
                        <span>Up Coming</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="pc_builder-choose-content">
            <div class="filter">
                <div class="f_left">
                    <a href="tool"> <i class="material-icons">arrow_back</i></a>
                    <input type="search" name="" id="" placeholder="search" />
                    <i class="f_search material-icons">search</i>
                    <i class="material-icons p_range_popup">filter_list</i>
                    <span>Filter</span>
                </div>
                <div class="f_right">
                    <label for="">text_sort</label>
                    <select class="">
                        <option value="">Default</option>
                        <option value="">price_(Low-High) </option>
                        <option value="">price_(High-low</option>
                    </select>
                </div>
            </div>
   
       
<script>

$(document).ready(function(){
    filter_data();
    function filter_data(){
         $('.filter_data').html('<div id="product_item" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#slider-1').val();
        var maximum_price = $('#slider-2').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
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

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui){
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#slider-1').val(ui.values[0]);
            $('#slider-2').val(ui.values[1]);
            filter_data();
        }
    });
});
</script>
      
           
   

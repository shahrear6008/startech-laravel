// preloader

//  function myfunc() {
//     var preloader = document.querySelector(".cart_preloader");
//     preloader.style.display = "none";
//   };
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} 
function funSearch(){
  var search_str=jQuery('#search_str').val();
  if(search_str!='' && search_str.length>3){
    window.location.href='/search/'+search_str;
  }
}





// navbar

$(document).ready(function () {
  $(".toggle_icon").click(function () {
    $(".nav").toggleClass("show");
  });
});

// $(document).ready(function () {
//   $(".drop_down").click(function () {
//     $(".btnli > span").toggleClass("hide");
//   });
// });

 

// buybtn popup

$(document).ready(function () {
  $(".buy_popup").click(function () {
    $(".popup").toggleClass("buy_popup_open");
  });
});

// compare and buy popup
$(document).ready(function () {
  $(".comp_popup").click(function () {
    $("#popup_com").toggleClass("buy_popup_open");
  });
});
$(document).ready(function () {
  $(".crt_popup").click(function () {
    $("#popup_cart").toggleClass("buy_popup_open");
  });
});

// navbar close

$(document).ready(function () {
  $(".toggle_icon").click(function () {
    $(".toggle_icon").toggleClass("close");
  });
});


// search popup

$(document).ready(function () {
  $(".search_icon").click(function () {
    $(".header_item_search").toggleClass("shown");
  });
});
// comapre popup
$(document).ready(function () {
  $(".btncompare").click(function () {
    $(".pop_up_compare").toggleClass("popup_compare");
  });
});

// cart popup

$(document).ready(function () {
  $(".top_cart").click(function () {
    $(".pop_up_cart").toggleClass("popup_cart");
  });
});

// cart_bounce

$(document).ready(function () {
  $(".btnbounce").click(function () {
    $(".btncart").toggleClass("bounce");
  });
});

// price range

$(document).ready(function () {
  $(".p_range_popup").click(function () {
    $(".choose_left_range").toggleClass("prangeshow");
  });
});


$(document).ready(function () {
  $(".label").click(function () {
    $(".a_rotate").toggleClass("active");
  });
});


// product after-header change

function product_front() {

 document.getElementById('pro_c').src=('./img/product_single_view_back.jpg');
 
}

// pagination active disable

$(document).ready(function()
{
  changeColor = $("active").css("color","red");
  if($(".pagination").hasClass('active')) {
  $(this).eq(changeColor);
  }
});

$(document).ready(function () {
  $("pagination li").click(function () {
    $("this").toggleClass("disabled");
  });
});

// price box active



$(document).ready(function () {
  $(".pbox").click(function () {
    $(".price_wrap").toggleClass("active");
  });
});

// alart close

$(document).ready(function () {
  $(".close").click(function () {
    $(".alert").toggleClass("close");
  });
});
// alart close



$(document).ready(function(){
  $("#closed").click(function () {
     $("#tittle").text("Your Shopping cart is empty");
  });
});

//onclick text change

$(document).ready(function(){
  $("#button-voucher").click(function () {
     $(this).text("loading...");
  });
});

//onclick text change

$(document).ready(function(){
  $(".buttonB").click(function () {
     $(this).text("loading...");
  });
});


// pagination

$('#pagination-demo').twbsPagination({
   totalPages: 16,
   visiblePages: 6,
   next: 'Next',
   prev: 'Prev',
   onPageClick: function (event, page) {
       //fetch content and render here
       $('#page-content').text('Page ' + page) + ' content here';
   }
});


$(document).ready(function(){
  $(".showcart").click(function(){
    $("#cart_show").toggleClass("active");
  });
});

// pc blank hide
$(document).ready(function(){
  $(".checkbox-inline").click(function(){
    $(".blank").toggleClass("pchide");
  });
});
$(document).ready(function(){
  $('input[type="checkbox"]').click(function(){
      if($(this).prop("checked") == true){
          console.log("Checkbox is checked.");
      }
      else if($(this).prop("checked") == false){
          console.log("Checkbox is unchecked.");
      }
  });
});
$(document).ready(function(){ 
  $("#input-hide").click(function(){
    console.log("Checkbox is checked.");
    if(this.checked) {
        $(".c-item.blank").addClass("hide")
    } else {
        $(".c-item.blank").removeClass("hide")
    }
});
});


Php APIs Web Applications/Sites + mysql.
Please discuss work before order Thanks
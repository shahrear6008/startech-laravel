<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PcbuilderController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', [ProductController::class,'display']);
Route::get('single/{id}',[ProductController::class,'detail']);


// nav bar route

Route::get('thunder', function(){
    return view('pages.thunder');
});
Route::get('offer', function(){
    return view('pages.offer');
});
Route::get('laptop', function(){
    $products = DB::table('products')
        ->where('category_id', '=', 1)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('desktop', function(){
    $products = DB::table('products')
        ->where('category_id', '=', 2)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('component', function(){
    $products = DB::table('products')
        ->where('category_id', '=', 3)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('monitor', function(){
    $products = DB::table('products')
        ->where('category_id', '=', 4)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('ups', function(){
    $products = DB::table('products')
        ->where('category_id', '=', 5)       
        ->get();
        return view ('pages.product2',compact('products'));
});




//user register & login
Route::get('register', function(){
    return view('pages.account.register');
});
Route::get('login', function(){
    return view('pages.account.login');
});
Route::get('forgotten', function(){
    return view('pages.account.forgotten');
});

//user register & login
Route::post('registerUser',[UserController::class, 'register']);
Route::post('loginUser',[UserController::class, 'login']);
Route::get('logout', function () {
    session()->forget('loggedin');
    session()->forget('USER_ID');
    session()->forget('cart'); 
    session()->forget('compare'); 
  
    return redirect('/');
});

// show profile
Route::get('account/profile',[UserController::class, 'profile']);

//user order
Route::get('account/order',[UserController::class,'order']);
Route::get('account/order_info/{id}',[UserController::class,'order_info']);


//user edit_profile
Route::get('account/edit_profile', function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.edit_profile',compact('customer_info'));
});
Route::post('edit_profile',[UserController::class,'edit_profile']);

//user password change
Route::post('changepw',[UserController::class,'changepw']);
Route::get('account/change_pw',function(){

    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.change_pw',compact('customer_info'));
});



//user address
Route::get('account/address',[UserController::class,'address']);
Route::get('account/editaddress/{id}',[UserController::class,'edit_address']);
Route::post('edit_address',[UserController::class,'edit_address_submit']);
Route::get('account/addnewaddress',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.addnewaddress',compact('customer_info'));
});
Route::post('addnewaddress',[UserController::class,'addnewaddress']);




// PCB items saved
Route::get('account/save_pc',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
        
        return view ('pages.account.save_pc',compact('customer_info'));
    }else{
        return redirect('login');
      }
});
Route::post('savepc_submit',[PcbuilderController::class,'savepc_submit']);
Route::get('account/saved_pc',[PcbuilderController::class,'saved_pc']);
Route::get('delsavedpc/{id}',[PcbuilderController::class,'delsavedpc']);
Route::get('pc_builder_view/{id}',[PcbuilderController::class,'pc_builder_view']);

Route::get('account/star_point',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.star_point',compact('customer_info'));
  
});   
Route::get('account/your_trans',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.your_trans',compact('customer_info'));
    
});





// review
Route::get('review/{id}',[ProductController::class,'review'])->name('review');
Route::post('review_submit',[ProductController::class,'review_submit']);

//wish_list 
Route::get('add_wish_list/{id}',[UserController::class,'add_wish_list']);
Route::get('account/wish_list',[UserController::class,'wishlist']);
Route::get('del_wish_list/{id}',[UserController::class,'del_wish_list']);
Route::get('del_address/{id}',[UserController::class,'del_address']);

// cart start
Route::get('shopping_cart',[ProductController::class,'cart']);
Route::get('add-to-cart/{id}',[ProductController::class,'addToCart']);
Route::post('add-to-cart',[ProductController::class,'addToCartq']);
Route::patch('update-cart',[ProductController::class,'update']);
Route::delete('remove-from-cart ',[ProductController::class,'remove']);

// searching 
Route::get('search/{str}',[ProductController::class,'search']);
Route::get('common',[ProductController::class,'compare_search']);

// checkout
Route::get('checkout',[ProductController::class,'checkout']);
Route::post('checkout_process',[UserController::class,'checkout_process']);





// compare start

Route::get('add-to-compare/{id}',[CompareController::class,'addTocompare']);
Route::get('compare', function(){
    return view('pages.common.compare');
});
Route::delete('remove-from-compare',[CompareController::class,'remove']);
Route::get('clear_compare', function () {  
    session()->forget('compare');   
  return redirect('/');
});



// add to pcb  items 

Route::get('addtopcb/{id}',[PcbuilderController::class, 'addtopcb']);
Route::get('deltopcb/{id}',[PcbuilderController::class,'remove']);
Route::get('pc_builder',[PcbuilderController::class, 'pcbuilder']);
Route::get('print_pc', function(){
    return view('pages.tool.print_pc');
});



//show pcb  items 

Route::get('tool/choose/1', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 1)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/2', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 2)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/3', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 3)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/4', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 4)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/5', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 5)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/6', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 6)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/7', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 7)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/8', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 8)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/9', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 9)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/10', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 10)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/11', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 11)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/12', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 12)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/1', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 1)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/13', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 13)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/14', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 14)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/15', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 15)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/16', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 16)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});
Route::get('tool/choose/17', function(){
    $pcb = DB::table('products')
        ->where('component_id', '=', 17)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
 });



 











// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

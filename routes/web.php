<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
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




Route::get('/', [SliderController::class,'index']);
Route::get('/', [ProductController::class,'display']);


Route::get('register', function(){
    return view('pages.account.register');
});
Route::get('login', function(){
    return view('pages.account.login');
});
Route::get('forgotten', function(){
    return view('pages.account.forgotten');
});

Route::get('logout', function () {
    session()->forget('loggedin');
    session()->forget('USER_ID');
    session()->forget('cart'); 
    session()->forget('compare'); 
  
    return redirect('/');
});

Route::get('print_pc', function(){
    return view('pages.tool.print_pc');
});
Route::get('compare', function(){
    return view('pages.common.compare');
});
Route::get('thunder', function(){
    return view('pages.thunder');
});
Route::get('offer', function(){
    return view('pages.offer');
});
Route::get('laptop', function(){
    $products = DB::table('producttb')
        ->where('category_id', '=', 1)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('desktop', function(){
    $products = DB::table('producttb')
        ->where('category_id', '=', 2)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('component', function(){
    $products = DB::table('producttb')
        ->where('category_id', '=', 3)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('monitor', function(){
    $products = DB::table('producttb')
        ->where('category_id', '=', 4)       
        ->get();
        return view ('pages.product2',compact('products'));
});
Route::get('ups', function(){
    $products = DB::table('producttb')
        ->where('category_id', '=', 5)       
        ->get();
        return view ('pages.product2',compact('products'));
});

Route::get('addtopcb/{id}',[PcbuilderController::class, 'addtopcb']);
Route::get('deltopcb/{id}',[PcbuilderController::class,'remove']);
Route::get('pc_builder',[PcbuilderController::class, 'pcbuilder']);



Route::post('registerUser',[UserController::class, 'register']);
Route::post('loginUser',[UserController::class, 'login']);
Route::get('account/profile',[UserController::class, 'profile']);


Route::get('account/order',[UserController::class,'order']);

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

Route::post('addnewaddress',[UserController::class,'addnewaddress']);
Route::get('account/address',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.address',compact('customer_info'));
});


Route::get('account/addnewaddress',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.addnewaddress',compact('customer_info'));
});
Route::get('account/wish_list',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.wish_list',compact('customer_info'));
  
});
Route::get('account/saved_pc',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.saved_pc',compact('customer_info'));
 
});
Route::get('account/star_point',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.star_point',compact('customer_info'));
  
});
Route::get('account/saved_pc',function(){
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID'); 
        $customer_info=DB::table('users') 
        ->where(['id'=>  $uid])
        ->get(); 
    }
    return view ('pages.account.saved_pc',compact('customer_info'));
   
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


Route::get('single/{id}',[ProductController::class,'detail']);










// cart start
Route::get('shopping_cart',[ProductController::class,'cart']);

Route::get('add-to-cart/{id}',[ProductController::class,'addToCart']);
Route::post('add-to-cart',[ProductController::class,'addToCartq']);
Route::patch('update-cart',[ProductController::class,'update']);
Route::delete('remove-from-cart ',[ProductController::class,'remove']);

Route::get('search/{str}',[ProductController::class,'search']);
Route::get('common',[ProductController::class,'compare_search']);
Route::get('checkout',[ProductController::class,'checkout']);
Route::post('checkout_process',[ProductController::class,'checkout_process']);





// compare start

Route::get('add-to-compare/{id}',[CompareController::class,'addTocompare']);

Route::delete('remove-from-compare',[CompareController::class,'remove']);
Route::get('clear_compare', function () {  
    session()->forget('compare');   
  return redirect('/');
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



Route::get('tool/choose/1', function(){
$pcb = DB::table('producttb')
        ->where('component_id', '=', 1)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/2', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 2)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/3', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 3)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/4', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 4)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/5', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 5)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/6', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 6)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/7', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 7)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/8', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 8)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/9', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 9)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/10', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 10)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/11', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 11)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/12', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 12)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/1', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 1)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/13', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 13)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/14', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 14)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/15', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 15)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/16', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 16)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
});Route::get('tool/choose/17', function(){
    $pcb = DB::table('producttb')
        ->where('component_id', '=', 17)       
        ->get();
        return view ('pages.tool.choose',compact('pcb'));
    });
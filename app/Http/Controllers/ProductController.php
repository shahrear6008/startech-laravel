<?php

namespace App\Http\Controllers;
use App\Models\DisplayProduct;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     public function display(){
        $displays = DisplayProduct::limit(10)->get();
        return view ('pages.home',compact('displays'));
    }
     public function detail($id){
        $details = DisplayProduct::find($id);
        return view ('pages.single',compact('details'));
    }
   
     public function checkout(){
       
        return view ('pages.checkout');
    }

    public function cart(){
    return view('pages.shopping_cart');
    } 

 public function addToCart($id) // by this function we add product of choose in card
 {
     $products = DisplayProduct::find($id);


// what is Session:
//Sessions are used to store information about the user across the requests.
// Laravel provides various drivers like file, cookie, apc, array, Memcached, Redis, and database to handle session data. 
// so cause write the below code in controller and tis code is fix
     $cart = session()->get('cart');  

     // if cart is empty then this the first product
     if(!$cart) {

         $cart = [
                 $id => [
                     "name" => $products->product_name,
                     "quantity" => 1,
                     "price" => $products->product_price,
                     "image" => $products->product_image,
                     "model" => $products->product_model
                 ]
         ];

         session()->put('cart', $cart);

         return redirect()->back()->with('success', 'added to cart successfully!');
     }

     // if cart not empty then check if this product exist then increment quantity
     if(isset($cart[$id])) {

         $cart[$id]['quantity']++;

         session()->put('cart', $cart); // this code put product of choose in cart

         return redirect()->back()->with('success', 'Product added to cart successfully!');

     }

     // if item not exist in cart then add to cart with quantity = 1
     $cart[$id] = [
         "name" => $products->product_name,
         "quantity" => 1,
         "price" => $products->product_price,
         "image" => $products->product_image,
         "model" => $products->product_model
     ];

     session()->put('cart', $cart); // this code put product of choose in cart

     return redirect()->back()->with('success', 'Product added to cart successfully!');
 }

 public function addToCartq(Request $request)
     {
        
             $cart = session()->get('cart');
    
             $cart[$request->id]["quantity"] = $request->quantity;
    
             session()->put('cart', $cart);
    
             session()->flash('success', 'Cart updated successfully');
        
         return redirect()->back()->with('success', 'Product added to cart successfully!');
     }



 // update product of choose in cart
 public function update(Request $request)
 {
     if($request->id and $request->quantity)
     {
         $cart = session()->get('cart');

         $cart[$request->id]["quantity"] = $request->quantity;

         session()->put('cart', $cart);

         session()->flash('success', 'Cart updated successfully');
     }
 }






 // delete or remove product of choose in cart
 public function remove(Request $request)
 {
     if($request->id) {

         $cart = session()->get('cart');

         if(isset($cart[$request->id])) {

             unset($cart[$request->id]);

             session()->put('cart', $cart);
         }

         session()->flash('success', 'Product removed successfully');
     }
 }


 
    public function search(Request $request,$str)
    {
        $result['product']=
            $query=DB::table('producttb');
            $query=$query->leftJoin('categories','categories.id','=','producttb.category_id');
            $query=$query->leftJoin('products_attr','producttb.id','=','products_attr.products_id');
      
            $query=$query->where('product_name','like',"%$str%");
            $query=$query->orwhere('product_model','like',"%$str%");
            $query=$query->orwhere('product_price','like',"%$str%");
        
            $query=$query->orwhere('product_weight','like',"%$str%");
            $query=$query->orwhere('product_brand','like',"%$str%") ;
            $query=$query->distinct()->select('producttb.*');
            $query=$query->get();
            $result['product']=$query;
                    
        return view('pages.search',$result);
    }
     // search using ajax

     public function compare_search(Request $request)
     {
 
         if($request->ajax()) {
 
             $output = '';
 
             $products = DisplayProduct::where('product_name', 'LIKE', '%'.$request->com_search.'%')
                             ->orWhere('category_id', 'LIKE', '%'.$request->com_search.'%')
                             ->orWhere('product_price', 'LIKE', '%'.$request->com_search.'%')
                             ->get();
 
             if($products) {
 
                 foreach($products as $row) {
 
                     $output .='
                     <li class="li">
                     <a href="add-to-compare/'.$row->id.'">'.$row->product_name.'</a>
                     
                     </li>
                     ';
                     
 
                 }
 
                 return response()->json($output);
 
             }
 
         }
 
         return view('/');
 
     }

public function review($id){
    $details = DisplayProduct::find($id);
    return view ('pages.review',compact('details'));

}
public function review_submit(Request $request){
   
    if(session()->has('loggedin')){
        $uid=session()->get('USER_ID');
        $user_type="Reg";
    }else{
        if(!session()->has('USER_TEMP_ID')){
            $rand=rand(111111111,999999999);
            $getUserTempId=   session()->put('USER_TEMP_ID',$rand);
            
        }else{
            $getUserTempId =session()->get('USER_TEMP_ID');
        }
        $uid=$getUserTempId;
        $user_type="Not-Reg";
    }
    $review=DB::table('review')->insertGetId([
        'uid'=>$uid,
        'pid'=>$request->id,
        'rating'=> $request->rating, 
        'text'=>  $request->text, 
        'created_at'=>date('Y-m-d h:i:s')
    ]);
   
    $details = DisplayProduct::find($request->id);
    return view ('pages.review',compact('details'));
    

}
    
}

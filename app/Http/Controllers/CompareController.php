<?php

namespace App\Http\Controllers;
use App\Models\DisplayProduct;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    
 public function addTocompare($id) // by this function we add product of choose in card
 {
     $products = DisplayProduct::find($id);

     if(!$products) {

         abort(404);

     }





// what is Session:
//Sessions are used to store information about the user across the requests.
// Laravel provides various drivers like file, cookie, apc, array, Memcached, Redis, and database to handle session data. 
// so cause write the below code in controller and tis code is fix
     $compare = session()->get('compare');  

     // if cart is empty then this the first product
     if(!$compare) {

         $compare = [
                 $id => [
                     "name" => $products->product_name,
                     "quantity" => 1,
                     "price" => $products->product_price,
                     "image" => $products->product_image,
                     "model" => $products->product_model
                 ]
         ];

         session()->put('compare', $compare);

         return redirect()->back()->with('success', 'added to compare successfully!');
     }

     // if cart not empty then check if this product exist then increment quantity
     if(isset($compare[$id])) {

         // this code put product of choose in cart

         return redirect()->back()->with('success', 'Product already added to compare !');

     }

     // if item not exist in cart then add to cart with quantity = 1
     $compare[$id] = [
         "name" => $products->product_name,
         "quantity" => 1,
         "price" => $products->product_price,
         "image" => $products->product_image,
         "model" => $products->product_model
     ];

     session()->put('compare', $compare); // this code put product of choose in cart

     return redirect()->back()->with('success', 'Product added to compare successfully!');
 }

 // delete or remove product of choose in cart
 public function remove(Request $request)
 {
     if($request->id) {

         $compare = session()->get('compare');

         if(isset($compare[$request->id])) {

             unset($compare[$request->id]);

             session()->put('compare', $compare);
         }

         session()->flash('success', 'Product removed successfully');
     }
 }
}

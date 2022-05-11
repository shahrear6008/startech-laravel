<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Checkout;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;

use Crypt;
use Mail;
use Session;




class UserController extends Controller
{
 
    public function register(Request  $request){
      
     
      $rules=[
        'firstname'=>'required|max:20',
        'lastname'=>'required|max:20',
        'email'=>'required|email',
        'telephone'=>'required|max:11',
        'password'=>'required',
        'password'=>'required',
       ]; 

       $this->validate( $request,$rules);
       $reg = new User();
        $reg->fname= $request->firstname;
        $reg->lname= $request->lastname;
        $reg->email= $request->email;
        $reg->mobile= $request->telephone;
        $reg->password=$request->password;
        $reg->otp= $request->otp;
        $reg->save();
        Session::flash('msg','Registration successfully ');
       return redirect()->back();
      
    }


    
    public function login(Request $request){
  
        $result=DB::table('users')  
            ->where(['email'=>$request->email])
            ->get(); 
        
         if(isset($result[0])){
            $db_pwd=$result[0]->password;
            $status=$result[0]->status;
          

           
            if($status==0){
                return response()->json(['status'=>"error",'msg'=>'Your account has been deactivated']); 
            }

                    if($db_pwd==$request->password){

                        if($request->rememberme===null){
                            setcookie('login_email',$request->email,100);
                            setcookie('login_pwd',$request->password,100);
                        }else{
                        setcookie('login_email',$request->email,time()+60*60*24*100);
                        setcookie('login_pwd',$request->password,time()+60*60*24*100);
                        }

                        $request->session()->put('loggedin',true);
                        $request->session()->put('USER_ID',$result[0]->id);
                    
                        $status="success";
                        $msg="";

                        $getUserTempId=$rand=rand(111111111,999999999);
                        
                        DB::table('cart')  
                            ->where(['user_id'=>$getUserTempId,'user_type'=>'Not-Reg'])
                            ->update(['user_id'=>$result[0]->id,'user_type'=>'Reg']);
                        
                    }else{
                      Session::flash('pass_error','Warning: No match for Password.');
                      return redirect()->back();
                    }
           }else{
            Session::flash('email_error','Warning: No match for email');
            return redirect()->back();
        }
        return redirect('/account/profile');
      
      
    }

      public function profile(){
          
        if(session()->has('loggedin')){
           $uid=session()->get('USER_ID');
           $customer_info=DB::table('users')  
           ->where(['id'=>  $uid])
           ->get();   
           return view('pages.account.profile',compact('customer_info'));
        }else{
          return redirect('login');
        }
      }
      
      public function edit_profile(Request $request){
        if(session()->has('loggedin')){
            $uid=session()->get('USER_ID');   
           
             
            $editprofile = DB::table('users')           
            ->where('id','=', $uid) 
            ->update(['fname'=> $request->firstname,
                      'lname'=>  $request->lastname,
                      'mobile'=>  $request->fax]) ;
           
           
            
            $customer_info=DB::table('users')  
            ->where(['id'=>  $uid])
            ->get(); 
            
            return view('pages.account.edit_profile',compact('editprofile','customer_info'));
            }else{
                return redirect('login');
              }
      }
      public function changepw(Request $request){
        if(session()->has('loggedin')){
            $uid=session()->get('USER_ID');   
           
             
            $changepw = DB::table('users')           
            ->where('id','=', $uid) 
            ->update(['password'=> $request->password]) ;
           
           
            
            $customer_info=DB::table('users')  
            ->where(['id'=>  $uid])
            ->get(); 
            
            return view('pages.account.change_pw',compact('changepw','customer_info'));
            }else{
                  return redirect('login');
                 }
      }
      public function addnewaddress(Request $request){
        if(session()->has('loggedin')){
            $uid=session()->get('USER_ID');  
           
          $rules=[
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'email'=>'required|email',
            'telephone'=>'required|max:11',
            
          ]; 
          
          $this->validate( $request,$rules);
            $address = new Checkout();
            $address->uid=$uid;
            $address->f_name= $request->firstname;
            $address->l_name= $request->lastname;
            $address->company= $request->company;     $address->address_1= $request->address_1;       
            $address->address_2= $request->address_2;      
            
            $address->mobile= $request->telephone;       
            $address->email= $request->email; 
            $address->country= $request->country_id; 
            $address->city= $request->city;       
            $address->postcode= $request->postcode;       
                 
            $address->zone= $request->zone_id;
            $address->comment= $request->comment;       
            $address->payment_method = $request->payment_method;       
            $address->shipping_method = $request->shipping_method;  $address->address_type= $request->default;     
            $address->save();
            Session::flash('msg','add new address successfully ');
           
           
            
            $customer_info=DB::table('users')  
            ->where(['id'=>  $uid])
            ->get(); 
            
            return view('pages.account.address',compact('address','customer_info'));
          
        }else{
              return redirect('login');
             }
      }




      public function order(){
        if(session()->has('loggedin')){
        $uid=session()->get('USER_ID');
        $orders =DB::table('orders') 
        ->leftjoin('producttb','producttb.id' ,'=', 'orders.pid') 
        ->where('uid','=', $uid) 
        ->select('producttb.product_name','producttb.product_price','producttb.product_image','orders.id','orders.pid','orders.status')   
         ->get(); 

         $customer_info=DB::table('users')  
         ->where(['id'=>  $uid])
         ->get(); 
        return view('pages.account.order',compact('orders','customer_info'));
        }else{
            return redirect('login');
          }

         
    }
      public function order_info($id){
        if(session()->has('loggedin')){
        $uid=session()->get('USER_ID');
        $order_info =DB::table('orders') 
        ->leftjoin('producttb','producttb.id' ,'=', 'orders.pid')      
        ->where('pid','=', $id) 
        ->select('producttb.id','producttb.product_name','producttb.product_price','producttb.product_image','orders.id','orders.status')   
        ->get(); 

         $customer_info=DB::table('users')  
         ->where(['id'=>  $uid])
         ->get(); 
        return view('pages.account.order_info',compact('order_info','customer_info'));
        }else{
              return redirect('login');
             }

         
    }
    public function checkout_process(Request $request){
       
        $request->validate([
            'fristname' => 'required|max:55',
            'lastname' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'city' => 'required',
            'zone' => 'required',
            'comment' => 'required'
        ]);



        Checkout::insert([
          
            'f_name' => $request->fristname,
            'l_name' => $request->lastname,
            'address_1' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'city' => $request->city,
            'zone' => $request->zone,
            'comment' => $request->comment,
            'payment_method' => $request->payment_method,
            'shipping_method' => $request->shipping_method
        ]);


     } 
}

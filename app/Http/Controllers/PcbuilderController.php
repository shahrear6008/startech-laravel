<?php

namespace App\Http\Controllers;
use App\Models\DisplayProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PcbuilderController extends Controller
{
    public function addtopcb($id){
        $products =  DisplayProduct::find($id);
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
      
        $component=DB::table('pc_builder')
        ->where(['cid'=> $products->component_id])
        ->where(['uid'=> $uid])
        ->get(); 

        if(isset($component[0])){
            $pcb=DB::table('pc_builder')  
                    ->where(['cid'=> $products->component_id])
                    ->where(['uid'=> $uid])
                    ->update(['pid'=>$products->id,
                    'cid'=> $products->component_id ]);
        }else{
             $pcb=DB::table('pc_builder')->insertGetId([
            'uid'=>$uid,
            'pid'=>$products->id,
            'cid'=>$products->component_id, 
            'added_on'=>date('Y-m-d h:i:s')
          ]);
        }
      

       
        return redirect ('pc_builder');
    }
    public function pcbuilder(){
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
       
       
           $Totalamount=DB::table('pc_builder')
           ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
           ->where('uid','=',$uid)          
           ->distinct()->select('producttb.*') 
           ->get(); 
          


            $component_id1=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')
            
            ->where('uid','=',$uid)
            ->where('cid','=', 1)
            ->distinct()->select('producttb.*')
            ->get(); 
           
            $component_id2=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')
            
            ->where('uid','=',$uid)
            ->where('cid','=', 2)
            ->distinct()->select('producttb.*')
            ->get(); 


            $component_id3=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 3)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id4=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 4)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id5=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 5)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id6=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 6)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id7=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 7)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id8=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 8)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id9=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 9)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id10=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 10)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id11=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=',11)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id12=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 12)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id13=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 13)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id14=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 14)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id15=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 15)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id16=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 16)
            ->distinct()->select('producttb.*')           
            ->get();
            $component_id17=DB::table('pc_builder')
            ->leftJoin('producttb','producttb.id','=','pc_builder.pid')            
            ->where('uid','=',$uid)
            ->where('cid','=', 17)
            ->distinct()->select('producttb.*')           
            ->get();
           return view ('pages.tool.pc_builder',compact('component_id1','component_id2','component_id3','component_id4','component_id5','component_id6','component_id7','component_id8','component_id9','component_id10','component_id11','component_id12','component_id13','component_id14','component_id15','component_id16','component_id17','Totalamount'));
           

        
    }




     // delete or remove product of choose in cart
    public function remove($id)
    {      
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
       $pcbuilders = DB::table('pc_builder')   
       ->where('uid','=',$uid)      
       ->where('pid','=', $id)
       ->delete(); 
       session()->flash('success', 'Pcb items removed successfully');
       return redirect('pc_builder');       
 }





 public function savepc_submit(Request $req){
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
        $saved_pc=DB::table('saved_pc')->insertGetId([
            'uid'=> $uid,
            'name'=> $req->name,
            'description'=> $req->description
        ]);
        $lastId = DB::getPdo()->lastInsertId();

       if($saved_pc > 0){

       $pcbuilder = DB::table('pc_builder')   
       ->where('uid','=',$uid) 
       ->get();


       $saved_pcs = DB::table('saved_pc')   
       ->where('uid','=',$uid) 
       ->get();
  

       if(isset($saved_pcs[0])){
            
        foreach($pcbuilder as $row){
            $savedpc_items=DB::table('savedpc_items')->insertGetId([
            'uid'=> $uid,
            'pcbid'=>  $lastId,
            'pid'=>$row->pid,         
            'cid'=> $row->cid  
            ]);
           }
       
       if($savedpc_items){
             DB::table('pc_builder')   
            ->where('uid','=',$uid) 
            ->delete();
       }       
       return redirect ('account/saved_pc');

      }
    }

    }


// view save pc items

    public function saved_pc(){
        if(session()->has('loggedin')){
            $uid=session()->get('USER_ID');
            
            $saved_pc = DB::table('saved_pc')   
            ->where('uid','=',$uid) 
            ->get();

            $customer_info=DB::table('users') 
            ->where(['id'=>  $uid])
            ->get();
            
            return view ('pages.account.saved_pc',compact('customer_info','saved_pc'));
        }else{
            return redirect('login');   

        }
    }


// delete pcb items
    public function delsavedpc($id){
        if(session()->has('loggedin')){
            $uid=session()->get('USER_ID');
            
            $delsavedpc = DB::table('saved_pc')   
            ->where('id','=',$id) 
            ->delete();
            
            $delsavedpc_items = DB::table('savedpc_items')   
            ->where('uid','=',$uid) 
            ->where('pcbid','=',$id) 
            ->delete();
        

            $customer_info=DB::table('users') 
            ->where(['id'=>  $uid])
            ->get();
            
            return redirect ('account/saved_pc');
        }else{
            return redirect('login');   

        }
    }

    // view savepc details
    public function pc_builder_view($id){
        if(session()->has('loggedin')){
            $uid=session()->get('USER_ID');
            
            

            $Totalamount=DB::table('savedpc_items')
            ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
            ->where('uid','=',$uid)          
            ->where('pcbid','=',$id)          
            ->distinct()->select('producttb.*') 
            ->get(); 
           
 
 
             $component_id1=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')             
             ->where('uid','=',$uid)
             ->where('cid','=', 1)
             ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')
             ->get(); 
            
             $component_id2=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')
             
             ->where('uid','=',$uid)
             ->where('cid','=', 2)
             ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')
             ->get(); 
 
 
             $component_id3=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 3)
               ->where('pcbid','=',$id)              
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id4=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 4)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id5=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 5)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id6=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 6)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id7=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 7)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id8=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 8)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id9=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 9)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id10=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 10)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id11=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=',11)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id12=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 12)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id13=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 13)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id14=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 14)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id15=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 15)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id16=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 16)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();
             $component_id17=DB::table('savedpc_items')
             ->leftJoin('producttb','producttb.id','=','savedpc_items.pid')            
             ->where('uid','=',$uid)
             ->where('cid','=', 17)
               ->where('pcbid','=',$id) 
             ->distinct()->select('producttb.*')           
             ->get();


            return view ('pages.tool.pc_builder_view',compact('component_id1','component_id2','component_id3','component_id4','component_id5','component_id6','component_id7','component_id8','component_id9','component_id10','component_id11','component_id12','component_id13','component_id14','component_id15','component_id16','component_id17','Totalamount'));
           
            
            
        }else{
            return redirect('login');   

        }

    }


}

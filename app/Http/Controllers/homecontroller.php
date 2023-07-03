<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Cart;
use App\Models\Order;
class homecontroller extends Controller
{
    function index(){
        if(Auth::id())
            return redirect('/redirects');
        else
        $food=Food::all();
        $food2=Chefs::all();
        return view("home",compact("food","food2"));
        
    }

    function user(){
        $food=Food::all();
        $food2=Chefs::all();

       $usertype=Auth::user()->usertype;
       if($usertype=='1'){
        return view('admin.adminhome');

       }else
       {
        $userid= Auth::id();
        $count=Cart::where('user_id',$userid)->count();
        return view("home",compact("food","food2","count"));
       }
    }
    function cart(Request $request,$id){
        if(Auth::id())
       
        {
            $userid= Auth::id();
           
            
            $food_id=$id;
            $quantity=$request->quantity;
            $data=new Cart;
            $data->user_id=$userid;
            $data->food_id=$id;
            $data->quantity=$quantity;
            $data->save();
            return redirect()->back();
           
        }else
        {
            return redirect('/login');
        }
    }
  function cartshow(Request $request,$id){
       if(Auth::id()==$id){
        $data2=cart::select('*')->where('user_id','=',$id)->get();
         $data=cart::where('user_id',$id)->join('food','carts.food_id', '=' , 'food.id')->get();
       return view('profile.cartpage', compact('data','data2'));
       }else{
        return redirect()->back();
       }
    }
    function remove($id){
$data=Cart::find($id);
$data->delete();
return redirect()->back();
    }
    function orderconfirm(Request $request){
        foreach($request->foodname as $key =>$foodname )
        {
            $data=new order;
            $data->food_name=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->user_name=$request->n1;
            $data->phone=$request->n2;
            $data->address=$request->n3;
            $data->save();
            

        }
        return redirect()->back();

    }
   
}

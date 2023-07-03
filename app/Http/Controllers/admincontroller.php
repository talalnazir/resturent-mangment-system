<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Order;
use App\Models\Reservation;
class admincontroller extends Controller
{
    function show(){
      $data=user::all();
      return view('admin.user',['data'=>$data]);

    }
    function foodmenu(){
        return view('admin.food');
    }
    function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();

    }
    function uploadfood(Request $request){
$data=new Food;
$data->title=$request->title;
$data->price=$request->price;
$image=$request->img;
$imagename=time(). '.' .$image->getClientOriginalExtension();
$request->img->move('image',$imagename);
$data->image=$imagename;
$data->discription=$request->textarea;
$data->save();
return redirect()->back();
    }
    function fooditems(){
        $data=Food::all();
        return view('admin.food',['food'=>$data]);
    }
    function deletefood($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }
    function updatefood($id)
    {
      $data=food::find($id);
      return view('admin.updatefood',['food'=>$data]);
    }
    function update(Request $request,$id){
        $data=food::find($id);
$data->title=$request->title;
$data->price=$request->price;
$image=$request->img;
$imagename=time(). '.' .$image->getClientOriginalExtension();
$request->img->move('image',$imagename);
$data->image=$imagename;
$data->discription=$request->textarea;
$data->save();
return redirect('food');
    }
    function chefspanel(){
        $data=Chefs::all();
        return view('admin.chefs',['chefs'=>$data]);
    }
   function chefsupload(Request $request){
    $data=new Chefs;
    $data->name=$request->name;
    $image=$request->img;
$imagename=time(). '.' .$image->getClientOriginalExtension();
$request->img->move('image',$imagename);
$data->image=$imagename;
    $data->experties=$request->experties;
    $data->save();
    return redirect()->back();
   }
   function deletechefs($id){
    $data=Chefs::find($id);
    $data->delete();
    return redirect()->back();
   }

   function updatechef($id){
    $data=Chefs::find($id);
    return view('admin.updatechef',['chef'=>$data]);  
}
 function updatedc(Request $request,$id){
    $data=Chefs::find($id);
    $data->name=$request->name;
    $image=$request->img;
$imagename=time(). '.' .$image->getClientOriginalExtension();
$request->img->move('image',$imagename);
$data->image=$imagename;
    $data->experties=$request->experties;
    $data->save();
    return redirect('chefs');
 }
 function reservation(Request $request){
    $data=new Reservation;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->phone=$request->phone;
    $data->guests=$request->guest;
    $data->date=$request->date;
    $data->time=$request->time;
    $data->messege=$request->message;
    $data->save();
    return redirect()->back();
 }
 function reservationdetail(){
    if(Auth::id()){
    $data=Reservation::all();
    return view('admin.reservationdetail',['reserve'=>$data]);
    }else{
        return redirect('/login');
    }
 }
 function deleteres($id){
    $data=Reservation::find($id);
    $data->delete();
    return redirect()->back();

 }
 function order(){
   
    $data= Order:: all();
    return view('admin.order',compact('data'));
 }
 function search(Request $request){
    $search=$request->search;
    $data= Order::where('food_name','like','%'.$search.'%')->orwhere('user_name','like','%'.$search.'%')->get();
    return view('admin.order',compact('data'));

 }
}
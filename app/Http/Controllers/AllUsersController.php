<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\allUsers;

class AllUsersController extends Controller
{
    //get All Data 
     public function view(){
         $data = allUsers::all();
         return view('Users.view', ['data'=>$data]);
     }
     //Delete Data
     public function delete($id){
         $data = allUsers::find($id);
         $data->delete();
         return redirect('allUsers');
     }
     //Insert Data
     public function add(Request $r){
        $user = new allUsers;
        $user->name=$r->name;
        $user->email=$r->email;
        $user->phone=$r->phone;
        $user->save();
        return redirect('allUsers');
     }
     // get Edit Id
     public function update($id){
         $data = allUsers::find($id);
         return view('Users.update', ['data'=>$data]);
     }
     //Update Data
     public function updateData(Request $r){
        $user = allUsers::find($r->id);
        $user->name=$r->name;
        $user->email=$r->email;
        $user->phone=$r->phone;
        $user->save();
        return redirect('allUsers');
     }
}

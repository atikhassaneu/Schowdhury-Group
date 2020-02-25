<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class password_changeController extends Controller
{
   public  function index(){
       return view('admin.password_change.index');
   }

   public function update(Request $request){
       $this->validate($request,[
           'old_password' => 'required',
           'new_password' => 'required|min:6|max:20',
           'confirm_password' => 'required|min:6|max:20'
       ]);
       $old_password = $request->old_password;
       $new_password = $request->new_password;
       $confirm_password = $request->confirm_password;



       $hashed_password = Auth::user()->password;

       if (Hash::check($old_password,$hashed_password)){
            if($new_password == $confirm_password){
                $user = User::find(Auth::id());
                $user->password=Hash::make($new_password);
                $user->save();
                Toastr::success('Password Change Successfully','Success',['positionClass' => 'toast-top-right']);
                Auth::logout();
                return redirect()->route('login');
            }else{
                Toastr::warning('Confirm Password Not Match','Warning',['positionClass' => 'toast-top-right']);
                return redirect()->back();
            }
       }else{
           Toastr::warning('Old Password Not Match','Warning',['positionClass' => 'toast-top-right']);
           return redirect()->back();
       }


   }
}

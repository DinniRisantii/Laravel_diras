<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserSettingController extends Controller
{
    public function form()
    {
<<<<<<< HEAD
    	$data = User::where('id',Auth::id())->first();
    	return view('admin.pages.user.setting',['dt'=>$data]);
=======
        $data = User::where('id',Auth::id())->first();
        return view('admin.pages.user.setting',['dt'=>$data]);
>>>>>>> Episode-9
    }

    public function update( Request $req)
    {
<<<<<<< HEAD
    	$id = Auth::id();
    	\Validator::make($req->all(), [
    		'name'=>'required|between:3,100',
    		'email'=>'required|email|unique:users,email,'.$id,
    		'password'=>'nullable|min:6',
    		'repassword'=>'same:password',
    	])->validate();
    	
<<<<<<< HEAD
    	return "Fungsi Update";
=======
    	if (!empty($req->password)) {
=======
        $id = Auth::id();
        \Validator::make($req->all(), [
            'name'=>'required|between:3,100',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'nullable|min:6',
            'repassword'=>'same:password',
        ])->validate();

        if (!empty($req->password)) {
>>>>>>> Episode-9
            $field = [
                'name'=>$req->name,
                'email'=>$req->email,
                'password'=>bcrypt($req->password),
            ];
        } else{
            $field = [
                'name'=>$req->name,
                'email'=>$req->email,
            ];
        }

        $result = User::where('id',$id)->update($field);

        if ($result) {
            return back()->with('result','success');
        } else {
            return back()->with('result','fail');
        }
        
<<<<<<< HEAD
>>>>>>> Episode-9
=======

>>>>>>> Episode-9
    }
}

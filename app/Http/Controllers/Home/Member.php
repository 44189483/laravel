<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Request;

class Member extends Controller
{
    //登录
    public function login(){

    	$input = Request::all();

		$row = Users::where('nickname', $input['user'])
            ->orWhere('phone', $input['user'])
            ->first();
        if(!$row){
        	echo '用户不存在';
        	exit();
        }

        if(sha1($input['pwd'].'|'.$row->passwordSalt) != $row->passwordHash){
        	echo '密码错误';
			exit();
        }

        session(['member' => $row]);
        
    }

    public function logout(){
    	Request::session()->flush();
    	return redirect("/");
    }

}

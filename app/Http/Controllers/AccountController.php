<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;


class AccountController extends Controller
{
    public function storeUser(Request $request) {
        
        $rules = [
            'username' => 'required|unique:users,name',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];

        $messages = [
            'password.same' => 'pass not cool dog',
            'first_name.required' => 'name not good dog',
        ];

        $request->validate($rules, $messages);

        // ja ir tik taalu tad everything is cool
        
        $userData = [
            'username' =>$request->get('username'),
            'password' =>Hash::make($request->get('password')),
            'name' =>$request->get('first_name'),
            'last_name' =>$request->get('last_name'),
            
        ];
        DB::table('users')->insert($userData);
        Session::flash('success', 'yay, hyou adf garlic');
        return redirect()->back();

    }

    public function saveChatMessage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
            'created_at' => date('Y-m-d')
        ];
        DB::table('messages')->insert($messageData);
        return ['status' => 'ok'];
    }
    public function getChatMessages() {
        return DB::table('messages')->get();
    }
}
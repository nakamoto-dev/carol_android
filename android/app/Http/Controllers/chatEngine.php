<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class chatEngine extends Controller
{  

    public function chatnow(){
        if(!empty($_GET['id'])){
            return view('user.chat');
        }
        return view('user.chat_table');
    }

    public function initializeChat(Request $req){
      
       $user = Auth::user()->name;
       $check = DB::table('chat')->where('reciever_userid', $req->reciever_userid)->get();
       if($check->count() == 1){
        $chat_id = $check->tradecode;
        return redirect("/chatting?id=$chat_id");
       }


       $rand_id = Str::random(8);
       $chat =  DB::table('chat')->insert([
            'sender_userid' => $req->sender_userid,
            'reciever_userid' => $req->reciever_userid,
            'message' =>  "$user started a chat with you",
            'tradecode' => $rand_id,
            'status' => 0
            
        ]);

        if($chat){
            return redirect("chatting?id=$rand_id");
        }

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactTableModel;


class ContactController extends Controller
{
    function onContactSend(Request $req){
       $name = $req->input('name');
       $email = $req->iput('email');
       $msg = $req->input('msg');

        $result =  contactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$msg]);
        
        if($result = true){
            return 1;
        }
        else{
            return 0;
        }

    }
}

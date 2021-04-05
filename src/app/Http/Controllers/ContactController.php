<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ContactController extends Controller
{
    /**
     * 入力画面の表示
    */
    public function input(){
        return view("contact.input");
    }
}

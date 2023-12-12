<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageTestController extends Controller
{
    public function send()
    {
        echo('メッセージ表示');
    }
}

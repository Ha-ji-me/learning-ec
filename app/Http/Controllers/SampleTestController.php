<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\MessageTestController;

class SampleTestController extends Controller
{
    public $message;

    public function __construct(MessageTestController $message)
    {
        $this->message = $message;
    }

    public function run()
    {
        $this->message->send();
    }
}

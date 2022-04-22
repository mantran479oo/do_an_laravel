<?php

namespace App\Http\Controllers\Frontend;

use App\Event\RegisteredSendMail;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function sendMail()
    {
        event(new RegisteredSendMail('mantran971@gmail.com'));
    }
}
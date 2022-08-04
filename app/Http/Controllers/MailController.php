<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public static function sendMail($mail, $id, $title, $content_array)
    {

        $url = 'https://contract.etc-network.uz/contract/'.$id.'/create-pdf';

        Mail::to($mail)->send(new SendMail($url, $title, $content_array));

    }

}

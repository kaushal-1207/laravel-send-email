<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{
    public function sendEmail()
    {
        $emaildescreption = 'This is Test Mail';
        Mail::send('email',compact('emaildescreption'),function($msg){
            $msg->from('gupool14@gmail.com','Kaushal Parekh');
            $msg->to('gupool14@gmail.com','GU Pool');
            $msg->subject('Test Email');
        });
        return redirect('email_sent');
    }
}

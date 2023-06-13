<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => '홈페이지에서 보낸 이메일 입니다.',
            'body' => '테스트 이메일입니다.'
        ];
        // to("테스트 받을 이메일 주소")
        Mail::to("gogo@gmail.com")->send(new TestMail($details));
        return "이메일 전송 완료";
    }
}

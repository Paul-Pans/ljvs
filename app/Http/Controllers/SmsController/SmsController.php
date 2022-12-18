<?php

namespace App\Http\Controllers\SmsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SmsS\SmsService;

class SmsController extends Controller
{
    public function getSimpleJobSms(int $sms)
    {
        dump($sms);
        $EgSimpleJobSms = new SmsService();
        $EgSimpleJobSms->SimpleJobSmsStart($sms);

    }
}

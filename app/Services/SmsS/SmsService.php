<?php

namespace App\Services\SmsS;
use App\Jobs\sms\SimpleSMS;


class SmsService {

    /**
     *  тест заливки
     *  @param int $sms
     *  @return void
     */

    public function SimpleJobSmsStart(int $sms)
    {

        SimpleSMS::dispatch($sms)->delay(now()->addMinutes(1));

    }


}
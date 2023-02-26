<?php

namespace App\Services\SmsS;
use App\Jobs\sms\SimpleSMS;


class SmsService {

    /**
     *  тест заливки
     *  Новый токен без логина f
     *  @param int $sms
     *  @return void
     */

    public function SimpleJobSmsStart(int $sms)
    {

        SimpleSMS::dispatch($sms)->delay(now()->addMinutes(1));

    }


}
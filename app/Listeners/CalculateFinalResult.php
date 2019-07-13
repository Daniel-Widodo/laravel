<?php

namespace App\Listeners;

use App\Events\QuestionerAnswered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Hasil;

class CalculateFinalResult
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuestionerAnswered  $event
     * @return void
     */
    public function handle(QuestionerAnswered $event)
    {
        $pengisian = $event->pengisian;
        
        $hasil = Hasil::where('matakuliah_id','=',$pengisian->matakuliah_id)->first();
        $hasil->fill([
            'q1' => $pengisian->q1 + $hasil->q1,
            'q2' => $pengisian->q2 + $hasil->q2,
            'q3' => $pengisian->q3 + $hasil->q3,
            'q4' => $pengisian->q4 + $hasil->q4,
            'q5' => $pengisian->q5 + $hasil->q5,
            'q6' => $pengisian->q6 + $hasil->q6,
            'q7' => $pengisian->q7 + $hasil->q7,
            'q8' => $pengisian->q8 + $hasil->q8,
            'q9' => $pengisian->q9 + $hasil->q9,
            'q10' => $pengisian->q10 + $hasil->q10,
            'qcount' => $hasil->qcount + 1,
        ]);
        $hasil->qavg = (
            $hasil->q1 +
            $hasil->q2 +
            $hasil->q3 +
            $hasil->q4 +
            $hasil->q5 +
            $hasil->q6 +
            $hasil->q7 +
            $hasil->q8 +
            $hasil->q9 +
            $hasil->q10) / $hasil->qcount / 10;
        return $hasil->save();
    }
}

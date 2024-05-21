<?php

namespace App\Services;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Cmixin\BusinessDay\Holiday;
use Cmixin\BusinessTime;
use Cmixin\BusinessDay;

class TasksSchedule
{

    public function WorkList()
    {
        $config = config('business-time');

        Carbon::mixin(new BusinessTime($config['workingHours']));
        Carbon::mixin(new Holiday);
        Carbon::mixin(new BusinessDay);
        Carbon::setHolidaysRegion('br-national');

        $startDate = Carbon::today();
        $endDate = Carbon::today()->addDays(30);

        $workPeriods = CarbonPeriod::create($startDate, $endDate);

        $workDays = collect();
        $workHours = collect([
            "09:00",
            "10:00",
            "11:00",
            "12:00",
            "13:00",
            "14:00",
            "15:00",
            "16:00",
            "17:00",
            "18:00"
        ]);

        foreach ($workPeriods as $date) {
            if ($date->isBusinessDay() && !$date->isHoliday()) {
                $workDays->push($date->format('d/m/Y'));
            }
        }

        return [
            'days' => $workDays,
            'hours' => $workHours,
        ];
    }
}

<?php

use Cmixin\BusinessDay\Holiday;
use Cmixin\BusinessTime;

return [
    'workingHours' => [
        'monday' => ['09:00-12:00', '13:00-18:00'],
        'tuesday' => ['09:00-12:00', '13:00-18:00'],
        'wednesday' => ['09:00-12:00', '13:00-18:00'],
        'thursday' => ['09:00-12:00', '13:00-18:00'],
        'friday' => ['09:00-12:00', '13:00-18:00'],
        'saturday' => [],
        'sunday' => [],
    ],
    'holidaysAreClosed' => true,
  'holidays' => [
    'region' => 'br',
  ],
];
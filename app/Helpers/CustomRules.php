<?php

namespace App\Helpers;

class CustomRules
{
    public function date_not_future($value): bool
    {
        $date = strtotime($value);
        $today = strtotime(date('Y-m-d'));

        return $date <= $today;
    }

    public function rational_start_time($value): bool
    {
        $minimum = time() - 3600;
        $maximum = time() + 120;
        $startTime = strtotime($value);

        if ($startTime <= $minimum || $startTime >= $maximum) :
            return false;
        endif;

        return true;
    }

    public function rational_end_time($value, string $field, array $data): bool
    {
        $startTime = strtotime($data[$field]);
        $endTime = strtotime($value);

        return $endTime > $startTime;
    }
}

<?php
if (!function_exists("convertToPercent")) {
    function converToPercent($waktu): int
    {
        $max = 120;
        $percent = ($max - $waktu) / $max * 100;
        return $percent;
    }
}

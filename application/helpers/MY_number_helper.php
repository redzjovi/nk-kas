<?php

if (! function_exists('remove_number_format'))
{
    /**
     * $number = remove_number_format('Rp 1.000,00');
     * @param integer $number
     * @return integer $number
     */
    function remove_number_format($number)
    {
        $number = filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
        $number = abs($number);
        return $number;
    }
}

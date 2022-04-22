<?php
use App\Models\Categorie;

if (! function_exists('getPriceSale')) {
    function getPriceSale($price,$sale)
    {
        return $price - (($sale * $price)/100);
    }
}

if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}

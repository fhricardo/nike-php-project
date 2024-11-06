<?php
// Calculates discount based in the original price
function Discount($price, $discount)
{
    $newPrice = $price - $price / 100 * $discount;
    Price($newPrice);
}
// Show the price in the correct currancy format for BRL
function Price($value)
{
    $showPrice = number_format($value, 2, ",", ".");
    echo "R$ {$showPrice}";
}

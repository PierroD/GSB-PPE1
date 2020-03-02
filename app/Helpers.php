<?php

function getPrice($price)
{
 $price = floatval($price);
//str_replace(".",",",$Item->price)

 return number_format($price, 2, ',',  ' '). '€';
}
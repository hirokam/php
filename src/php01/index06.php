<?php

function getSquareArea($base, $height)
{
    return $base * $height;
}

function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}

function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(7, 6) . "\n";
echo getTriangleArea(4, 8) . "\n";
echo getTrapezoidArea(10, 6, 4);
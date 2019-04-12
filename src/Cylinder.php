<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getPerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    public function getPerimeter($radius)
    {
        $perimeter = pi() * $radius * $radius;
        return $perimeter;
    }

    public function getBaseArea($radius)
    {
        $baseArea = 2 * pi() * $radius;
        return $baseArea;
    }
}
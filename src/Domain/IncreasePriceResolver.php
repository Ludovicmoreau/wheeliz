<?php

namespace Domain;

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 * @author Elao <contact@elao.com>
 */

class IncreasePriceResolver
{
    /**
     * @param int $cars
     * @param int $size
     *
     * @return int
     */
    public static function resolve(int $cars, int $size)
    {
        $increase = 0;
        $ratio    = $size !== 0 ? ($cars / $size) * 100 : 0;

        switch ($ratio) {
            case $ratio <= 10:
                $increase = 0;
                break;
            case $ratio <= 20:
                $increase = 1;
                break;
            case $ratio <= 30:
                $increase = 2;
                break;
            case $ratio <= 40:
                $increase = 3;
                break;
            case $ratio <= 50:
                $increase = 4;
                break;
            case $ratio <= 60:
                $increase = 5;
                break;
            case $ratio <= 70:
                $increase = 6;
                break;
            case $ratio <= 80:
                $increase = 7;
                break;
            case $ratio <= 90:
                $increase = 8;
                break;
            case $ratio <= 100:
                $increase = 9;
                break;
        }

        return $increase;
    }
}

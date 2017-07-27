<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 */

namespace Domain;

class HolidaysIncreaseResolver
{
    /**
     * @var array
     */
    private $holidays;

    public function __construct()
    {
        $this->holidays = [
            //Zone A
            ['startDate' => new \DateTime('21-10-2017'), 'endDate' => new \DateTime('06-11-2017')],
            ['startDate' =>new \DateTime('21-12-2017'), 'endDate' => new \DateTime('08-01-2018')],
            //Zone B
            ['startDate' =>new \DateTime('20-12-2017'), 'endDate' => new \DateTime('05-01-2018')],
            ['startDate' =>new \DateTime('22-12-2017'), 'endDate' => new \DateTime('07-01-2018')],
            //Zone C
            ['startDate' =>new \DateTime('23-12-2017'), 'endDate' => new \DateTime('08-01-2018')],
        ];
    }

    /**
     * @param $dateStart
     * @param $DateEnd
     *
     * @return bool
     */
    public function resolve($dateStart, $DateEnd)
    {
        foreach ($this->holidays as $holiday) {
            $startDate = $holiday['startDate'];
            $endDate   = $holiday['endDate'];

            if ($dateStart >= $startDate && $dateStart <= $endDate) {
                return true;
            }

            if($DateEnd <= $endDate && $DateEnd >= $startDate) {
                return true;
            }
        }
        return false;
    }
}

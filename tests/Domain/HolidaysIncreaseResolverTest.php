<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 * @author Elao <contact@elao.com>
 */

namespace Domain;

use PHPUnit\Framework\TestCase;

class HolidaysIncreaseResolverTest extends TestCase
{
    public function testResolvetrue()
    {
        $dateStart = new \DateTime('21-10-2017 08:00:00.000');
        $dateEnd = new \DateTime('22-10-2017 08:00:00.000 ');

        $holidaysIncreaseResolver = new HolidaysIncreaseResolver();

        $increase = $holidaysIncreaseResolver->resolve($dateStart, $dateEnd);

        $this->assertEquals(true, $increase);
    }

    public function testResolvefalse()
    {
        $dateStart = new \DateTime('07-11-2017 08:00:00.000');
        $dateEnd = new \DateTime('08-11-2017 08:00:00.000');

        $holidaysIncreaseResolver = new HolidaysIncreaseResolver();

        $increase = $holidaysIncreaseResolver->resolve($dateStart, $dateEnd);

        $this->assertEquals(false, $increase);
    }
}

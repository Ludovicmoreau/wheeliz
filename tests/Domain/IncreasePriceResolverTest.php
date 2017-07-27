<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 * @author Elao <contact@elao.com>
 */

namespace Tests\Domain;

use Domain\IncreasePriceResolver;
use PHPUnit\Framework\TestCase;

class IncreasePriceResolverTest extends TestCase
{
    public function testResolve()
    {
        $increase = IncreasePriceResolver::resolve(20, 40);

        $this->assertEquals(4, $increase);
    }
}

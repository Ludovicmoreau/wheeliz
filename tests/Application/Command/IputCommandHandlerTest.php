<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 */

namespace Application\Command;

use PHPUnit\Framework\TestCase;

class IputCommandHandlerTest extends TestCase
{
    public function testInputCommandHandler()
    {
        $command = new InputCommand();
        $command->size = 19;
        $command->cars = 10;
        $command->date_start = new \DateTime('22-10-2017');
        $command->date_end = new \DateTime('23-10-2017');


        $handler = new InputCommandHandler();
        $price = $handler->handle($command);

        $this->assertEquals(74.6, $price);



    }
}

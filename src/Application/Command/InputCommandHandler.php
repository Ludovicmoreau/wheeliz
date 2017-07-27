<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 */

namespace Application\Command;

use Domain\HolidaysIncreaseResolver;
use Domain\IncreasePriceResolver;

class InputCommandHandler
{

    /**
     * @param InputCommand $command
     *
     * @return float
     */
    public function handle(InputCommand $command): float
    {
        $basePrice = 70;

        $increase = IncreasePriceResolver::resolve($command->cars, $command->size);

        $holidaysIncreaseResolver = new HolidaysIncreaseResolver();

        $increaseHoliday = $holidaysIncreaseResolver->resolve($command->date_start, $command->date_end);

        $price = $increase > 0 ? $basePrice * (($increase / 100) + 1) : $basePrice;

        if ($increaseHoliday === true) {
            $price = $price + ((10 / 100) + 1);
        }

        return $price;
    }
}

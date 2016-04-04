<?php

namespace PhpPatterns\Decorator\CoffeeShop;

class Lemon extends Condiment
{
    const COST = 50;

    /**
     * @return string
     */
    public function description()
    {
        return 'Lemon';
    }

    public function cost()
    {
        return $this->product->cost() + self::COST;
    }
}
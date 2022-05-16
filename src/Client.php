<?php

namespace Networkheap;

class Client
{

    public function __construct(...$args)
    {

    }

    public static function create(...$args)
    {
        return new static (...$args)
    }
}

<?php

namespace DeGraciaMathieu\Clike\Tests;

use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Contracts;

class Clear implements Contracts\Command {

    public function description() :Contracts\Line
    {
        return new Lines\Info('...');
    }

    public function authorized() :bool
    {
        return true;
    }

    public function binding() :string
    {
        return '/clear';
    }

    public function process()
    {
        // foo
    }

    public function output() :array
    {
        return [
            new Lines\Info('Output text...'),
        ];
    }
}
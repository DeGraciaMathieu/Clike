<?php

namespace DeGraciaMathieu\Clike;

use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Contracts;

class Clear implements Contracts\Command {

    public function description() :Contracts\Line
    {
        return new Lines\Description('...');
    }

    public function authorized() :bool
    {
        return true;
    }

    public function binding() :string
    {
        return '/clear';
    }

    public function process() :void
    {
        // foo
    }

    /**
     * [output description]
     * @return \DeGraciaMathieu\Clike\Contracts\Line[]
     */
    public function output() :array
    {
        return [
            new Lines\Info('Output text...'),
        ];
    }
}
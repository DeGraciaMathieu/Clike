<?php

namespace DeGraciaMathieu\Clike\Output;

use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Contracts;

class Unauthorize implements Contracts\Output {

    /**
     * @param DeGraciaMathieu\Clike\Contracts\Command $command [description]
     */
    public function __construct(Contracts\Command $command)
    {
        $this->command = $command;
    }

    /**
     * Return unauthorize command lines
     * @return \DeGraciaMathieu\Clike\Contracts\Line[]
     */
    public function get() :array
    {
        $errorLine = $this->getErrorLine();

        return [
            new Lines\Error($errorLine),
        ];
    }

    /**
     * Return unauthorize lines
     * @return string
     */
    protected function getErrorLine() :string
    {
        $format = '%s has a unauthorize command.';

        return sprintf($format, $this->command->binding());
    }
}

<?php

namespace DeGraciaMathieu\Clike\Outputs;

use DeGraciaMathieu\Clike\Contracts;

class Command implements Contracts\Output {

    /**
     * @param DeGraciaMathieu\Clike\Contracts\Command $command [description]
     */
    public function __construct(Contracts\Command $command)
    {
        $this->command = $command;
    }

    /**
     * Return command lines
     * @return \DeGraciaMathieu\Clike\Contracts\Line[]
     */
    public function get() :array
    {
        return $this->command->output();
    }
}

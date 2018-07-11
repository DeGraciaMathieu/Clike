<?php

namespace DeGraciaMathieu\Clike\Contracts;

interface Output {

    /**
     * Return unauthorize command lines
     * @return \DeGraciaMathieu\Clike\Contracts\Line[]
     */
    public function get() :array;
}

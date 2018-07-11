<?php

namespace DeGraciaMathieu\Clike\Contracts;

interface Line {
    
    /**
     * Get line
     * @return array
     */    
    public function read() :array;
}
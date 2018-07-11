<?php

namespace DeGraciaMathieu\Clike\Lines;

use DeGraciaMathieu\Clike\Contracts;

class Error extends Line implements Contracts\Line {

    /**
     * Get line
     * @return array
     */
    public function read() :array
    {
        return [
            'type' => LineConstants::ERROR,
            'content' => $this->content,
        ];
    }
}

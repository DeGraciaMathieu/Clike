<?php

namespace DeGraciaMathieu\Clike\Lines;

use DeGraciaMathieu\Clike\Contracts;

class Info extends Line implements Contracts\Line {

    /**
     * Get line
     * @return array
     */
    public function read() :array
    {
        return [
            'type' => LineConstants::INFO,
            'content' => $this->content,
        ];
    }
}

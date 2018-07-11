<?php

namespace DeGraciaMathieu\Clike\Lines;

use DeGraciaMathieu\Clike\Contracts;

class Warning extends Line implements Contracts\Line {

    /**
     * Get line
     * @return array
     */
    public function read() :array
    {
        return [
            'type' => LineConstants::WARNING,
            'content' => $this->content,
        ];
    }
}

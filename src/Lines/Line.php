<?php

namespace DeGraciaMathieu\Clike\Lines;

abstract class Line {

    protected $content;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }
}

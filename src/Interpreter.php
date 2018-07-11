<?php

namespace DeGraciaMathieu\Clike;

use DateTime;

class Interpreter {

    /**
     * Get command response
     * @param  \DeGraciaMathieu\Clike\Contracts\Output $output
     * @return array
     */
    public static function read(Contracts\Output $output) :array
    {
        $datetime = new DateTime();

        return [
            'timestamp' => $datetime->getTimestamp(),
            'lines' => self::transformLines($output),
        ];	
    }

    /**
     * Retrieve command lines
     * @param  \DeGraciaMathieu\Clike\Contracts\Output $output
     * @return array
     */
    protected static function transformLines(Contracts\Output $output) :array
    {
        return array_map(function($line) use($datetime) {
            return $line->read();
        }, $output->get());
    }
}

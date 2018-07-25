<?php

namespace DeGraciaMathieu\Clike\Tests;

use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Contracts;
use DeGraciaMathieu\Clike\Lines\LineConstants;

class LinesTest extends TestCase {
    
    const CONTENT = 'line content';

    /** @test */
    public function info()
    {
        $this->checkLine(Lines\Info::class, LineConstants::INFO);
    }

    /** @test */
    public function error()
    {
        $this->checkLine(Lines\Error::class, LineConstants::ERROR);
    }

    /** @test */
    public function success()
    {
        $this->checkLine(Lines\Success::class, LineConstants::SUCCESS);
    }

    /** @test */
    public function warning()
    {
        $this->checkLine(Lines\Warning::class, LineConstants::WARNING);
    }  

    protected function checkLine($line, $type)
    {
        $line = new $line(self::CONTENT);

        $expectedArray = [
            'type' => $type,
            'content' => self::CONTENT,
        ];

        $this->isInstanceOf(Contracts\Line::class, $line);
        $this->assertEquals($line->read(), $expectedArray);
    }      
}

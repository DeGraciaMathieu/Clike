<?php

namespace DeGraciaMathieu\Clike\Tests;

use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Contracts;

class LinesTest extends TestCase {
    
    /** @test */
    public function info()
    {
        $this->checkLine(Lines\Info::class, 'content', 'info');
    }

    /** @test */
    public function error()
    {
        $this->checkLine(Lines\Error::class, 'content', 'error');
    }

    /** @test */
    public function success()
    {
        $this->checkLine(Lines\Success::class, 'content', 'success');
    }

    /** @test */
    public function warning()
    {
        $this->checkLine(Lines\Warning::class, 'content', 'warning');
    }  

    protected function checkLine($line, $content, $type)
    {
        $line = new $line($content);

        $expectedArray = [
            'type' => $type,
            'content' => $content,
        ];

        $this->isInstanceOf(Contracts\Line::class, $line);
        $this->assertEquals($line->read(), $expectedArray);
    }      
}

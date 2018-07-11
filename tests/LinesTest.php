<?php

namespace DeGraciaMathieu\Clike\Tests;

use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Lines;

class LinesTest extends TestCase {
    
    /** @test */
    public function info()
    {
        $line = new Lines\Info('content');

        $expectedArray = [
            'type' => 'info',
            'content' => 'content',
        ];

        $this->assertEquals($line->read(), $expectedArray);
    }

    /** @test */
    public function error()
    {
        $line = new Lines\Error('content');

        $expectedArray = [
            'type' => 'error',
            'content' => 'content',
        ];

        $this->assertEquals($line->read(), $expectedArray);
    }

    /** @test */
    public function success()
    {
        $line = new Lines\Success('content');

        $expectedArray = [
            'type' => 'succes',
            'content' => 'content',
        ];

        $this->assertEquals($line->read(), $expectedArray);
    }

    /** @test */
    public function warning()
    {
        $line = new Lines\Warning('content');

        $expectedArray = [
            'type' => 'warning',
            'content' => 'content',
        ];

        $this->assertEquals($line->read(), $expectedArray);
    }        
}

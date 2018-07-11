<?php

namespace DeGraciaMathieu\Clike\Tests;

use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Lines;
use DeGraciaMathieu\Clike\Command;
use DeGraciaMathieu\Clike\Contracts;

class IntegrationTest extends TestCase {
    
    /** @test */
    public function info()
    {
        $command = new Command();

        $result = $command->execute(new Clear());

        $expectedArray = [
            [
                'type' => 'info',
                'content' => 'Output text...',
            ]
        ];

        $this->assertEquals($result['lines'], $expectedArray);        
    }

}

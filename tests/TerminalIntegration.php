<?php

namespace DeGraciaMathieu\Clike\Tests;

use Mockery;
use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Terminal;
use DeGraciaMathieu\Clike\Exceptions\UnknowCommand;

class TerminalIntegration extends TestCase {
    
    /** @test */
    public function success()
    {
        $terminal = new Terminal([
            Clear::class,
        ]);

        $result = $terminal->execute('/clear');

        $expectedArray = [
            [
                'type' => 'info',
                'content' => 'Output text...',
            ]
        ];

        $this->assertNotNull($result['timestamp']);        
        $this->assertEquals($result['lines'], $expectedArray);  
    }    


    /** @test */
    public function unknow()
    {
        $terminal = new Terminal([
            Clear::class,
        ]);

        $this->expectException(UnknowCommand::class);
        
        $terminal->execute('/unknow_command');
    }            
}

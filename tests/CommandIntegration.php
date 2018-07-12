<?php

namespace DeGraciaMathieu\Clike\Tests;

use Mockery;
use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Command;

class CommandIntegration extends TestCase {
    
    /** @test */
    public function success()
    {
        $command = new Command();

        $result = $command->execute(new Clear());

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
    public function unauthorized()
    {
        $command = new Command();

        $clear = Mockery::mock(new Clear())->makePartial();

        $clear->shouldReceive('authorized')->andReturn(false);        

        $result = $command->execute($clear);

        $expectedArray = [
            [
                'type' => 'error',
                'content' => '/clear is an unauthorized command.',
            ]
        ];

        $this->assertNotNull($result['timestamp']);
        $this->assertEquals($result['lines'], $expectedArray);  
    }         
}

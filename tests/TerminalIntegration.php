<?php

namespace DeGraciaMathieu\Clike\Tests;

use PHPUnit\Framework\TestCase;
use DeGraciaMathieu\Clike\Terminal;
use DeGraciaMathieu\Clike\Exceptions\UnknowCommand;

class TerminalIntegration extends TestCase {

    /** @test */
    public function success()
    {
        $terminal = $this->makeTerminal();

        $result = $terminal->execute('/clear');

        $expectedArray = [
            [
                'type' => 'info',
                'content' => 'Output text...',
            ]
        ];

        $this->assertNotNull($result['timestamp']);
        $this->assertEquals($expectedArray, $result['lines']);
    }

    /** @test */
    public function unknow()
    {
        $terminal = $this->makeTerminal();

        $this->expectException(UnknowCommand::class);
        $this->expectExceptionMessage('');

        $terminal->execute('/unknow_command');
    }

    /** @test */
    public function getAvailableCommands()
    {
        $terminal = $this->makeTerminal();

        $availableCommands = $terminal->getAvailableCommands();

        $expectedArray = [
            [
                'binding' => '/clear',
                'description' => 'description',
            ]
        ];

        $this->assertEquals($expectedArray, $availableCommands);
    }

    /**
     * @return \DeGraciaMathieu\Clike\Terminal
     */
    protected function makeTerminal()
    {
        $terminal = new Terminal([
            Clear::class,
        ]);

        return $terminal;
    }
}

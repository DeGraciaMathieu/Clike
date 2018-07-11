<?php

namespace DeGraciaMathieu\Clike;

class Command {

    /**
     * Execute a command
     * @param  \DeGraciaMathieu\Clike\Contracts\Command $command
     * @return array
     */
    public function execute(Contracts\Command $command) :array
    {
        if ($command->authorized()) {
            return $this->launch($command);
        }

        return $this->unauthorize($command);
    }

    /**
     * Launch an authorized command
     * @param  \DeGraciaMathieu\Clike\Contracts\Command $command
     * @return array
     */
    protected function launch(Contracts\Command $command) :array
    {
        $command->process();

        $output = new Outputs\Command($command);

        return $this->interpretOutput($output);
    }

    /**
     * Response for a unauthorized command
     * @param  \DeGraciaMathieu\Clike\Contracts\Command $command
     * @return array
     */
    protected function unauthorize(Contracts\Command $command) :array
    {
        $output = new Outputs\Unauthorize($command);

        return $this->interpretOutput($output);
    }

    /**
     * return response command
     * @param  \DeGraciaMathieu\Clike\Contracts\Output $output
     * @return array
     */
    protected function interpretOutput(Contracts\Output $output) :array
    {
        return Interpreter::read($output);
    }
}

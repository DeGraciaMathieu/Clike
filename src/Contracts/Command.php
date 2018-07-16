<?php

namespace DeGraciaMathieu\Clike\Contracts;

interface Command {

    /**
     * Get the command description
     * @return \DeGraciaMathieu\Clike\Contracts\Line
     */	
    public function description() :Line;

    /**
     * Check if the command is executable
     * @return boolean
     */    
    public function authorized() :bool;

    /**
     * Bind of this command
     * @return string
     */    
    public function binding() :string;


    /**
     * Code executed by this command
     * @return void
     */    
    public function process();

    /**
     * Output of this command
     * @return \DeGraciaMathieu\Clike\Contracts\Line[]
     */    
    public function output() :array;
}

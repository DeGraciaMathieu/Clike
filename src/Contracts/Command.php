<?php

namespace DeGraciaMathieu\Clike\Contracts;

interface Command {
    public function description() :Line;
    public function authorized() :bool;
    public function binding() :string;
    public function process();
    public function output() :array;
}
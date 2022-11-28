<?php

class AllInOne
{
    # Dot
    public function add_dot($str)
    {
        return !str_contains($str, '.') ? $str . "." : 0;
    }

    # Operations
    public function calculate($str): mixed
    {
        return eval("print (" . $str . ");");
    }

    # Execution
    public function run(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['equal'])) {
                echo 'post success';
            }
        }
    }
}
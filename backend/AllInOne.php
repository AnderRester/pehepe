<?php

class AllInOne
{
    # Dot
    public function add_dot($str) {
        return !str_contains($str, '.') ? $str . "." : 0;
    }

    # Op
    public function please_do_something($str) {
        $pula = eval("print (" . $str . ");");
        return $pula;
    }

    public function run(): void {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['equal'])) {
                echo 'post success';
            }
        }
    }
}
<?php

class Common
{
    # Dot
    public function add_dot()
    {
        return $_SESSION['str'] = !str_contains($_SESSION['str'], '.') ? $_SESSION['str'] . "." : $_SESSION['str'];
    }

    # Clear
    public function clear(): int
    {
        return $_SESSION['str'] = 0;
    }

    # Operations
    public function operation($sign): string
    {
        return $_SESSION['str'] .= $sign;
    }

    # Change sign
    public function change_sign(): int
    {
        return $_SESSION['str'] *= -1;
    }

    # Operations
    public function calculate(): string
    {
        $var = 0;
        eval('$var = ' . $_SESSION['str'] . ';');
        return $_SESSION['str'] = $var;
    }

    public function add_digit($num): string
    {
        if ($_SESSION['str'] == '0') {
            $_SESSION['str'] = $num;
        } else {
            $_SESSION['str'] .= $num;
        }
        return $_SESSION['str'];
    }

    # Execution
    public function run()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['equal'])) {
                return $this->calculate();
            }
            if (isset($_POST['add_digit'])) {
                return $this->add_digit($_POST['add_digit']);
            }
            if (isset($_POST['add_dot'])) {
                return $this->add_dot();
            }
            if (isset($_POST['operation'])) {
                return $this->operation($_POST['operation']);
            }
            if (isset($_POST['clear'])) {
                return $this->clear();
            }
            if (isset($_POST['change_sign'])) {
                return $this->change_sign();
            }

        }

        return null;
    }
}

class Hammming
{
    public function do_something()
    {
        echo "works";
    }

    public function run()
    {
        echo "Ok!";
    }
}
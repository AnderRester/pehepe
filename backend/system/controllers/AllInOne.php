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

class Hamming
{
    public function sir_bite()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str'])) {
                return intval($_POST['str']) + ($i);
            }
        }
    }

    public function sir_byte()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str']) * 8) {
                return intval($_POST['str']) * 8  + $i;
            }
        }
    }

    public function control_bite()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str'])) {
                return $i;
            }
        };
    }

    public function control_byte()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str']) * 8) {
                return $i;
            }
        };
    }

    public function run(): void
    {
        $hammingType = $_POST['hamming_type'] ?? '0';
        switch ($hammingType) {
            case '1':
                $_POST['result'] = $this->sir_bite();
                break;
            case '2':
                $_POST['result'] = $this->sir_byte();
                break;
            case '3':
                $_POST['result'] = $this->control_bite();
                break;
            case '4':
                $_POST['result'] = $this->control_byte();
                break;
        }
    }
}

class Network
{
    # TESTS
    # http://elearning.usarb.md/moodle/mod/quiz/review.php?attempt=33103&cmid=29113
    # TASKS
    # http://elearning.usarb.md/moodle/mod/quiz/review.php?attempt=32580&cmid=29027
    # INFO
    # https://en.wikipedia.org/wiki/Wildcard_mask
    # https://www.drogoreanu.ro/tutorials/adresa-ip.php

    public function network_class() {

    }
    public function default_mask() {

    }
    public function subnet_mask() {

    }
    public function subnet_res_bits() {

    }
    public function subnet_max_quantity() {

    }
    public function node_res_bits() {

    }
    public function max_nodes() {

    }
    public function network_class() {

    }
    public function network_class() {

    }
    public function network_class() {

    }

    public function run(): void
    {

    }
}
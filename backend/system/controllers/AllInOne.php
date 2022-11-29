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
    #1
    public function sir_bite()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str'])) {
                return intval($_POST['str']) + ($i);
            }
        }
    }

    #2
    public function sir_byte()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str']) * 8) {
                return intval($_POST['str']) * 8 + $i;
            }
        }
    }

    #3
    public function control_bite()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str'])) {
                return $i;
            }
        }
    }

    #4
    public function control_byte()
    {
        for ($i = 0; $i <= 15; $i++) {
            if ((2 ** $i) > intval($_POST['str']) * 8) {
                return $i;
            }
        }
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

    #1
    public string $network_class = '';
    #2
    public string $default_mask = '';
    public int $default_mask_dec = 0;
    #3
    public string $subnet_mask = '';
    public int $subnet_mask_dec = 0;
    #4.1
    public int $subnet_res_bits = 0;
    #4.2
    public int $max_pos_subnets = 0;
    #4.3
    public int $node_res_bits = 0;
    #4.4
    public int $max_possible_nodes = 0;
    #4.5
    public int $network_step = 0;
    #4.6

    #5
    #6
    #7
    #8
    #9
    #10
    #11
    #12
    #13
    #14
    #15
    #16
    #17


    #1 Класс IP-адреса
    public function network_class(): string
    {
        $mask = $_POST['str'];
        switch($mask) {
            case $mask >= '128.0.0.0' && $mask <= '191.255.0.0':
                return $this->network_class = 'B';
            case $mask >= '192.0.0.0' && $mask <= '223.255.255.0':
                return $this->network_class = 'C';
            case $mask >= '224.0.0.0' && $mask <= '239.255.255.255':
                return $this->network_class = 'D';
            case $mask >= '240.0.0.0' && $mask <= '254.255.255.255':
                return $this->network_class = 'E';
            default:
                return $this->network_class = 'A';
        }
    }

    #2 Маска сети по умолчанию
    public function default_mask()
    {
        switch ($this->network_class) {
            case 'A':
                $this->default_mask_dec = 8;
                return $this->default_mask = '255.0.0.0';
            case 'B':
                $this->default_mask_dec = 16;
                return $this->default_mask = '255.255.0.0';
            case 'C':
                $this->default_mask_dec = 24;
                return $this->default_mask = '255.255.255.0';
        }
    }

    #3 Расширенная маска IP-адреса в десятичном формате с точками.Ответ
    public function subnet_mask(): void
    {
        $bits = [128, 64, 32, 16, 8, 4, 2, 1];
        $mask = substr($_POST['str'], -2);
        $this->subnet_mask_dec = $mask;
        $supp_bit = 0;
        for ($i = 0; $i < intval($mask) - (intval($mask / 8) * 8); $i++) {
            $supp_bit += $bits[$i];
        }
        $this->subnet_mask = str_repeat("255.", intval($mask / 8)) . $supp_bit;
    }

    #4.1 Количество битов, зарезервированных для подсети
    public function subnet_res_bits(): void
    {
        $this->subnet_res_bits = $this->subnet_mask_dec - $this->default_mask_dec;
        // echo $this->default_mask . " " . $this->default_mask_dec . " " . $this->subnet_mask . " " . $this->subnet_mask_dec;
    }

    #4.1 Максимальное количество возможных подсетей
    public function subnet_max_quantity(): void
    {
        $this->max_pos_subnets = 2 ** $this->subnet_res_bits;
    }

    #4.3 Количество битов, зарезервированных для узла
    public function node_res_bits(): void
    {
        $this->node_res_bits = 32 - $this->subnet_mask_dec;
    }

    #4.4 Максимальное количество возможных узлов в каждой подсети
    public function max_possible_nodes(): void
    {
        $this->max_possible_nodes = 2 ** $this->node_res_bits - 2;
    }

    #4.5 Шаг подсети ??
    public function network_step()
    {
        $this->network_step = 256;
    }

    #4.6 Номер подсети ί, где ί — число битов, зарезервированных для подсети
    public function network_number_with_res_bits()
    {

    }

    #5 Идентификатор ПОДСЕТИ (в десятичном формате с точками)Ответ
    public function subnet_identifier()
    {

    }

    #6 Двоичное и десятичное значение маски в октете, содержащем no. подсети и части узла (разделенные точкой, например: 11100000.224)
    public function byte_mask_value()
    {

    }

    #7 Двоичное значение байта, не содержащее. подсети и часть узла
    public function bin_bite_no_subnet_node()
    {

    }

    #8 Идентификатор NETWORK (в десятичном формате с точками)
    public function network_identifier_dec()
    {

    }

    #9 Идентификатор ПОДСЕТИ (в десятичном формате с точками)Ответ
    public function subwork_identifier_dec()
    {

    }

    #10 Идентификатор NOD исходного IP-адреса (в десятичном формате с точками)Ответ
    public function node_identifier_initial_dec()
    {

    }

    #11 Можно ли назначить начальный IP-адрес узлу?Ответ
    public function possible_assign_ip()
    {

    }

    #12 Идентификатор первой подсети, присвоенный первому узлу
    public function identifier_f_subnet_f_node()
    {

    }

    #13 Идентификатор первой подсети, присвоенной последнему узлуОтвет
    public function identifier_f_subnet_l_node()
    {

    }

    #14 Широковещательный адрес для первой назначенной подсети
    public function broadcast_f_subnet()
    {

    }

    #15 Идентификатор последней подсети, присвоенной первому узлуОтвет
    public function identifier_l_subnet_f_node()
    {

    }

    #16 Идентификатор последней подсети, присвоенный последнему узлуОтвет
    public function identifier_l_subnet_l_node()
    {

    }

    #17 Широковещательный адрес для последней назначенной подсетиОтвет
    public function broadcast_l_subnet()
    {

    }

    public function run(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->network_class();
            $this->default_mask();
            $this->subnet_mask();
            $this->subnet_res_bits();
            $this->subnet_max_quantity();
            $this->node_res_bits();
            $this->max_possible_nodes();
            // $_POST['result'] = "Class " . $this->network_class . ' <br> Def. Mask' . $this->default_mask . ' <br> Subn. Mask' . $this->subnet_mask . " <br>Res.Bits" . $this->subnet_res_bits . " <br>Max.Sub." . $this->max_pos_subnets . " <br>" . $this->node_res_bits . " <br>" . $this->max_possible_nodes . "<br> ";
            echo "<br>Class " . $this->network_class . ' <br> Def. Mask ' . $this->default_mask . ' <br> Subn. Mask ' . $this->subnet_mask . " <br>Res.Bits " . $this->subnet_res_bits . " <br>Max.Sub. " . $this->max_pos_subnets . " <br> " . $this->node_res_bits . " <br> " . $this->max_possible_nodes . "<br> ";
        }
    }
}
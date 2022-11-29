<?php

require_once './Config.php';

class Controller
{
    public function view($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once Config::$rootPath . '/resources/views/layouts/main.php';
        $layoutContent = ob_get_clean();

        ob_start();
        include_once Config::$rootPath . '/resources/views/' . $view . '.php';
        $viewContent = ob_get_clean();

        echo str_replace('{{content}}', $viewContent, $layoutContent);
    }
}
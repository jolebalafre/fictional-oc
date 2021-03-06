<?php

function display_view($view_name, $data = array(), $return = false)
{
    extract($data);

    ob_start();
    require_once __DIR__ . '/../views/' . $view_name . '.phtml';
    $content = ob_get_contents();
    ob_end_clean();

    if ($return) {
        return $content;
    } else {
        echo $content;
        return;
    }
}

<?php

namespace APP\Utils;

class Redirect
{
    public static function redirect(
        string|array $message,
        string $type = 'success',
        string $url = '../View/message.php'
    ) {
        session_start();
        if (is_array($message)) {
            // TODO Implementar a leitura do array
        } else {
            if ($type == 'error')
                $_SESSION['msg_error'] = $message;
            else if ($type == 'warning')
                $_SESSION['msg_warning'] = $message;
            else
                $_SESSION['msg_success'] = $message;
        }
        header("location:$url");
    }
}

<?php
if($_SERVER['SERVER_NAME'] == 'localhost'){
    define('DNS', 'mysql:host=localhost:3306;dbname=retail_store_morning');
    define('USER', 'root');
    define('PASSWORD', '12345678');
}else{
    // Exemplo Servidor
    define('DNS', 'mysql:host=210.0.4.67:4000;dbname=mydb');
    define('USER', 'anderson');
    define('PASSWORD', '123456789');
}

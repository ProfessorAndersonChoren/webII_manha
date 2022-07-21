<?php

namespace APP\Model\DAO;

use APP\Model\Connection;
use PDO;

class UserDAO
{
    public function findUser($login)
    {
        $connection = Connection::getConnection();
        $stmt = $connection->query("select login,password from user where login = '$login'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

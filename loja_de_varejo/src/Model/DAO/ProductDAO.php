<?php

namespace APP\Model\DAO;

use APP\Model\Connection;
use PDO;

class ProductDAO implements DAO
{
    public function insert($object)
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare('INSERT INTO product VALUES(null,?, ?, ?, ?, ?);');
        $stmt->bindParam(1, $object->name);
        $stmt->bindParam(2, $object->price);
        $stmt->bindParam(3, $object->quantity);
        $stmt->bindParam(4, $object->barCode);
        $stmt->bindParam(5, $object->isActive);
        return $stmt->execute();
    }
    public function update($object)
    {
    }
    public function findAll()
    {
        $connection = Connection::getConnection();
        $rs = $connection->query('select * from product');
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findOne($id)
    {
    }
    public function delete($id)
    {
    }
}

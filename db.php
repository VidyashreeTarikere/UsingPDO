<?php

class DB
{
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbName = "testdb";
    private $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
        } catch (PDOException $e) {
            die("DB connection failed : " . $e->getMessage());
        }
    }

    public function insertData($name, $relation)
    {
        $sql = "INSERT INTO userdetails (name, relation) VALUES(:name,:relation)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name, 'relation' => $relation]);
        echo "data inserted";
    }

    public function getData()
    {
        $sql = "SELECT * FROM userdetails";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function deleteData($name)
    {
        $sql = "DELETE FROM userdetails WHERE name = :name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name]);
        echo $name . " was deleted";
    }

    public function editData($name, $relation)
    {
        $sql = "UPDATE userdetails SET relation = :relation WHERE name = :name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name, 'relation' => $relation]);
    }

    public function searchData($name)
    {
        $sql = "SELECT * FROM userdetails WHERE name LIKE :name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => '%' . $name . '%']);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}

<?php
include_once "env.php";
class database
{
    public $conn;
    public function getConnect()
    {
        $connect = new PDO(
            "mysql:host=" . DBHOST
                . ";dbname=" . DBNAME
                . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    public function __construct()
    {
        $this->conn = $this->getConnect();
    }

    //nếu k truyền gì thì dùng cho truy vấn có dạng select 
    //nếu getAll = false sẽ dùng cho câu truy vấn có dạng thêm sửa xóa
    public function getData($query, $getAll = true)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
    }
}

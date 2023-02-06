<?php 
namespace ModelsComments;
include "models/db.php";
use database;
use FFI;

class CommentsModels extends database {
    public function getAllComments()
    {
        $sql = "SELECT comments.id, comments.des,comments.time,users.username,products.name_product
        FROM comments,users 
        JOIN products ON products.id
        WHERE comments.id_user = users.id_user 
        AND comments.id_product = products.id 
        ORDER BY comments.time DESC ";
        return $this->getData($sql);
    }
    public function deleteComment() {
        $id = $_GET['id'];
        $sql = "DELETE FROM comments WHERE id = $id";
        return $this->getData($sql,false);
    }

}
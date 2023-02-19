<?php 
namespace App\Models;

use Faker\Provider\Base;

class Comment extends BaseModel {
    public $comment = 'comments';
    public $user = 'users';
    public $product = 'products';
    public function getComments() {
        $sql = "SELECT $this->comment.id, $this->comment.des,$this->comment.time,$this->user.username,$this->product.name_product
        FROM $this->comment,$this->user
        JOIN $this->product ON $this->product.id
        WHERE $this->comment.id_user = $this->user.id_user 
        AND $this->comment.id_product = $this->product.id 
        ORDER BY $this->comment.time DESC ";
       
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function deleteComment($id) {
        $sql = "DELETE FROM $this->comment WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
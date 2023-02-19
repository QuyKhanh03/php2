<?php 
namespace App\Controllers;
use App\Models\Comment;
class CommentController extends BaseController {
    public $comment;
    public function __construct() {
        $this->comment = new Comment();
    }
    public function index() {
        $comments = $this->comment->getComments();
        $this->render("comment.index",compact('comments'));
        
    }
    public function removeComment($id) {
        // echo $id;
        $this->comment->deleteComment($id);
        header("location:".url("comment"));
    }
}
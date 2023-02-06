<?php 
include "models/CommentsModels.php";
class CommentsController {
    public function index() {
        $CommentsModels = new ModelsComments\CommentsModels();
        $listComments = $CommentsModels->getAllComments();
        $view = "views/tables/v_table_comments.php";
        include "templates/displays/layout.php";
    }
}
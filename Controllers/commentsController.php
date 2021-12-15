<?php

class commentsController extends Controller {

    function index()
    {
        require(ROOT . 'Models/Comment.php');

        $comments = new Comment();

        $d['comments'] = $comments->showAllComments();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        require(ROOT . 'Models/User.php');
        require(ROOT . 'Models/Post.php');

        $users = new User();
        $posts = new Post();

        $d['users'] = $users->showAllUsers();
        $d['posts'] = $posts->showAllPosts();

        if (isset($_POST["body"]))
        {
            require(ROOT . 'Models/Comment.php');

            $comment = new Comment();

            if ($comment->create($_POST["user_id"], $_POST["post_id"], $_POST['body']))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }

        $this->set($d);
        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComment($id);

        if (isset($_POST["body"]))
        {
            if ($comment->edit($id, $_POST['body']))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Comment.php');

        $comment = new Comment();
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "comments/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }

    function detail($id) {

        require(ROOT . 'Models/Comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComment($id);

        $this->set($d);
        $this->render("detail");
    }



    


}



?>
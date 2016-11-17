<?php
include_once "Controller.php";
include_once "Model/Post.php";

class PostController extends Controller
{
    private $posts = null;


    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->posts = new Post();
    }


    /**
     * get posts
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts->getFromPostsTable();
    }


    /**
     * set post
     * @param $title
     * @param $content
     * @param $userId
     */
    public function addPost($title, $content, $userId)
    {
        $this->posts->setToPostsTable($title, $content, $userId);
    }


}

?>

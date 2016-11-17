<?php

include_once "Model.php";

class Post extends Model
{
    /**
     * get posts from database
     * @return array
     */

    public function getFromPostsTable()
    {
        $postData = $this->db->query('SELECT * FROM posts');
        return $postData->fetchAll();
    }


    /**
     * set post to database
     * @param $title
     * @param $content
     * @param $userId
     */

    public function setToPostsTable($title, $content, $userId)
    {
        $db = $this->db->prepare("INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :userId)");
        $db->bindParam(':title', $title);
        $db->bindParam(':content', $content);
        $db->bindParam(':userId', $userId);
        $db->execute();
    }
}

?>

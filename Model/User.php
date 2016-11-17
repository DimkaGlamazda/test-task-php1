<?php

include_once "Model.php";

class User extends Model
{
    /**
     * get users database values
     * @return array
     */

    public function getFromUsersTable()
    {
        $userData = $this->db->query('SELECT * FROM users');
        return $userData->fetchAll();
    }



    /**
     * set user to table
     * @param $name
     * @param $email
     * @param $age
     */

    public function setToUsersTable($name, $email, $age)
    {
        $db = $this->db->prepare("INSERT INTO users (name, email, age) VALUES (:name, :email, :age)");
        $db->bindParam(':name', $name);
        $db->bindParam(':email', $email);
        $db->bindParam(':age', $age);
        $db->execute();
    }
}
?>
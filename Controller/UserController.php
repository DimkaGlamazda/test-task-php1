<?php
include_once "Controller.php";
include_once "Model/User.php";

class UserController extends Controller
{

    private $users = null;

    /**
     * UserController constructor.
     */

    public function __construct()
    {
        $this->users = new User();
    }

    /**
     * get users
     * @return array
     */
    public function getUsers()
    {
        return $this->users->getFromUsersTable();
    }

    /**
     * set user
     * @param $name
     * @param $email
     * @param $age
     */

    public function addUser($name, $email, $age)
    {
        $this->users->setToUsersTable($name, $email, $age);
    }
}
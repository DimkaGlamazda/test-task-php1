<?php

include_once "Controller/UserController.php";
include_once "Controller/PostController.php";


/*
 *
 * add user
 *
 * */
if((int)$_POST['saveUser'] == 1){

    $objUser = new UserController();

    $age = (int)$_POST['age'];
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $name = $objUser->clean($_POST['name']);

    if(!$email){
        print "Not valid Email.";
        die();
    }
    if(!$objUser->checkLength($name, 2, 25)){
        print "Name isn't correct!";
        die();
    }
    if(!is_int($age)){
        print "Age isn't correct!";
        die();
    }

    $objUser->addUser($name, $email, $age);

    print("Registration completed successfully");

    die();
}

/*
 *
 * add post
 *
 * */
if((int)$_POST['savePost'] == 1){
    print "1";

    $objPost = new PostController();

    $userId = (int)$_POST['userId'];
    $title = $objPost->clean($_POST['title']);
    $content = $objPost->clean($_POST['content']);

    if(!is_int($userId)){
        print "Reload page please!";
        die();
    }
    if(!$objPost->checkLength($title, 5, 50)){
        print "Name isn't correct!";
        die();
    }
    if(!$objPost->checkLength($content, 5, 1000)){
        print "Name isn't correct!";
        die();
    }


    $objPost->addPost($title, $content, $userId);


    print("You added a post!");
    die();

}

/*
 *
 * autoload user-select
 *
 * */

if((int)$_GET['loadUserList'] == 1){

    $objUserList = new UserController();
    $objPostList = new PostController();

    $arUser = $objUserList->getUsers();
    $arPost = $objPostList->getPosts();

    $arRes = [];
    foreach ($arUser as $key=>$usrItem){
        $arRes[$key][] = $usrItem['name'];
        foreach ($arPost as $postItem){
            if($usrItem["id"] == $postItem["user_id"]){
                $arRes[$key][] = $postItem["title"];
            }
        }
    }
    print json_encode($arRes, JSON_UNESCAPED_UNICODE);

    die();
}

/*
 *
 * list users and their posts
 *
 * */

if((int)$_GET['loadUserSelect'] == 1){

    $objUserSelect = new UserController();
    $res = [];

    foreach ($objUserSelect->getUsers() as $user){
        $res[] = [
            "id" => $user["id"],
            "name" => $user["name"]
        ];
    }

    print json_encode($res);

    die();
}
?>
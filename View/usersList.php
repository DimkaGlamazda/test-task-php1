<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash|Roboto" rel="stylesheet">
    <title>Users list</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="border-radius">
                <div class="logo">Logo</div>
                <img class="drop-down-btn" src="img/Dropp-down-icon.png" alt="drop-down button">
                <ul class="nav-list border-radius">
                    <li class="border-radius"><a href="userForm.php">Add user</a></li>
                    <li class="border-radius"><a href="postForm.php">Add post</a></li>
                    <li class="border-radius"><a href="usersList.php">Users list</a></li>
                </ul>
            </nav>
            <h1>Users list</h1>
        </header>
        <div class="container">
            <section class="content border-radius">
                <h2>Content</h2>
                <div id="list"></div>


            </section>
            <section class="side-bar border-radius">
                <h3>Side bar</h3>
            </section>
        </div>
        <footer class="border-radius">
            <p>some text</p>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/styleScript.js"></script>
    <script src="js/usersListHandler.js"></script>
</body>
</html>


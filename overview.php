<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Names and Relationships</title>
    <style>
        body {
            font-family: "Roboto";
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="left-pane">
            <h1>Insert name and relationship!</h1>
            <form action="insert.php" method="POST">
                <input type="text" placeholder="Name" name="name" class="gt-input rounded-left">
                <input type="text" placeholder="Mention relationship" name="relation" class="gt-input">
                <input type="submit" value="Insert" name="insertData" class="gt-button rounded-right">
            </form>

            <h1>Delete person![Should not happen]</h1>
            <form action="deleteData.php" method="POST">
                <input type="text" placeholder="name" name="name" class="gt-input full-width rounded-left">
                <input type="submit" value="Delete" name="deleteData" class="gt-button rounded-right">
            </form>

            <h1>Edit</h1>
            <form action="editData.php" method="POST">
                <input type="text" placeholder="Who's relation?" name="name" class="gt-input full-width rounded-left">
                <input type="text" placeholder="Edit relationship" name="relation" class="gt-input">
                <input type="submit" value="Edit" name="editData" class="gt-button rounded-right">
            </form>
        </div>

        <div class="right-pane">
            <h1>Search</h1>
            <form action="" method="GET">
                <input type="text" placeholder="Search" name="search" value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>" class="gt-input full-width rounded-left">
                <input type="submit" value="Search" class="gt-button rounded-right">
            </form>

            <h3>List :</h3>
            <span class="list">
                <?php

                foreach ($data as $i) {
                    echo $i['name'] . " is Vidya's " . $i['relation'] . "<br>";
                }
                ?>
            </span>
        </div>
    </div>
</body>

</html>
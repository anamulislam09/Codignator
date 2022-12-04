<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 1200px;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>User Edit Form</h1>
        <hr>

        <form action="<?php echo site_url('users/update') ?>" method="post">
            <label for="">Name: </label>
            <input type="text" value="<?php echo $user['name'] ?>" name="name"><br>
            <label for="">Email: </label>
            <input type="email" value="<?php echo $user['email'] ?>" name="email"><br>
            <input type="submit" name="submit" class="btn btn-info mt3" value="Update"><br>
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        </form>

    </div>

</body>

</html>
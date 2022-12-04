<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>

<body>
    <h1>User Entery Form</h1>
    <div class="container">

        <form action="<?php echo site_url('users/submit') ?>" method="post">
            <label for="">Name: </label>
            <input type="text" name="name"><br>
            <label for="">Email: </label>
            <input type="email" name="email"><br>
            <input type="submit" name="submit" class="btn btn-info mt3" value="Submit"><br>
        </form>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        .container {
            width: 1000px;
            margin: 0 auto;
        }

        tr {
            width: 800px;
        }
    </style>

</head>

<body>

    <div class="container">

        <table border="1px">
            <caption><strong>Product List</strong></caption>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>

            <?php foreach ($myusers as $user) : ?>
                <tbody>

                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="/users" class="btn btn-primary">Edit</a>
                            <a href="users/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
        <a href="/users" class="btn btn-primary">All Users</a>|
        <a href="users/add" class="btn btn-primary">New Users</a>

    </div>

</body>

</html>
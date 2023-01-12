<?php
echo view('includes/header');
echo view('includes/navbar');

?>

<div class="container mt-3">
    <h2>Students List</h2>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($students as $student) { ?>


                <tr>

                    <td><?php echo $student['id'] ?></td>
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['email'] ?></td>
                    <td><?php echo $student['address'] ?></td>
                    <td><?php echo $student['phone'] ?></td>

                    <td>
                        <a href="<?= base_url() ?>/student/edit/<?= $student['id'] ?>" class="btn btn-info">Edit</a>
                        <a href="<?= base_url() ?>/student/delete/<?= $student['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>

    <a href="<?= base_url() ?>/student/new" class="btn btn-info">Add New</a>

</div>

<?php
echo view('includes/footer');
?>
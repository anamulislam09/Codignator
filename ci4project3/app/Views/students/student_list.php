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
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($students as $student) { ?>


                <tr>
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['email'] ?></td>
                    <td><?php echo $student['address'] ?></td>
                    <td><?php echo $student['phone'] ?></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>

</div>

<?php
echo view('includes/footer');
?>
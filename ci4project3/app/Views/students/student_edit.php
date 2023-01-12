<?php
echo view('includes/header');
echo view('includes/navbar');

?>



<div class="container mt-3">
    <h2>Edit Form</h2>
    <hr>
    <form method="post" action="<?= base_url() ?>/student/update/<?= $student['id'] ?>">
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" value="<?php echo $student['name'] ?>" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" value="<?php echo $student['email'] ?>" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="address">Postal address:</label><br>
            <textarea name="address" class="form-control" id="" cols="10" rows="3"> <?php echo $student['address'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" value="<?php echo $student['phone'] ?>" id="Phone" placeholder="Enter Phone" name="phone">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php
echo view('includes/footer');
?>
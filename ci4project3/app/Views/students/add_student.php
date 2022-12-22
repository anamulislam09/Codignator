<?php
echo view('includes/header');
echo view('includes/navbar');

?>



<div class="container mt-3">
    <h2>Registration Form</h2>
    <hr>
    <form method="post" action="/student/create" <?= csrf_field(); ?> <div class="mb-3 mt-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
</div>
<div class="mb-3 mt-3">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
</div>
<div class="mb-3">
    <label for="address">Postal address:</label><br>
    <textarea name="address" class="form-control" id="" cols="10" rows="3"></textarea>
</div>
<div class="mb-3">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="Phone" placeholder="Enter Phone" name="phone">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
echo view('includes/footer');
?>
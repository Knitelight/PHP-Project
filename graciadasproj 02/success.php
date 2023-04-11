<?php require_once 'includes/header.php' ?>

<h1 class="text-center">YOU HAVE BEEN REGISTERED</h1>
<br/>

<div class="card" style="width: 18rem;">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"><?php echo $_GET['fname'].' '.$_GET['lname'];?> </h5>

  <p class="card-text">
    Date of Birth:  <?php  echo $_GET['birthday'];?>
  </p>
  <p class="card-text">
    Specialty:  <?php  echo $_GET['dbadmin'];?>
  </p>
  <p class="card-text">
    Email Address:  <?php  echo $_GET['email'];?>
  </p>
  <p class="card-text">
    Contact Number:  <?php  echo $_GET['phonenum'];?>
  </p>

  <a href="#" class="btn btn-primary">DONE</a>
</div>
</div>

<?php require_once 'includes/footer.php' ?>
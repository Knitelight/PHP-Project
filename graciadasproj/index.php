<?php require_once 'includes/header.php' ?>

<body>
    <h1 class="text-center">Registration For IT Conference</h1>
   
    <form>

  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Your name">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Your name">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

<div class="form-group">
  <label for="birthday">Date of Birth</label>
  <input type="text" id="datepicker">
</div>
<br>
 <p> Choose a Specialty </p>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="specialty1" name="db admin">
    <label class="form-check-label" for="db admin">Database Admin</label>
  </div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="specialty1" name="db admin">
    <label class="form-check-label" for="db admin">Software Developer</label>
  </div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="specialty1" name="db admin">
    <label class="form-check-label" for="db admin">Web Administrator</label>
  </div>
  <br>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
<br>

   <div class="form-group">
    <label for="form">Enter Contact Number</label> <br>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+63-000-000-0000" required>
  </div>
<br>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>





<?php require_once 'includes/footer.php' ?>
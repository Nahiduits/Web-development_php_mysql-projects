<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include 'menu.php' ?>
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Form</h2>
      <hr class="w-25 mx-auto">
    </div>
  <div class="w-50 mx-auto">
    <form action="userinfo.php" method="post">
   
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Id</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
  <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-outline-success">Submit</button>
</form>
  </div>
</section>
</body>
</html>
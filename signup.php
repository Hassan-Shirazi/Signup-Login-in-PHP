  <?php
  $connect = mysqli_connect("localhost","root","","crud");
  if(isset($_REQUEST['btn'])){
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $phone = $_REQUEST['phone'];
      $gen = $_REQUEST['gender'];
      $pass = $_REQUEST['password'];
      $hash_pass = password_hash($pass , PASSWORD_BCRYPT);
      $sql = "INSERT INTO `signup`(`name`, `email`, `no`, `password`, `gender`) VALUES ('$name','$email','$phone','$hash_pass','$gen')";
      mysqli_query($connect , $sql);
      header("Location: signup.html");
      exit;
  }
  ?>
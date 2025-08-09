
  <?php
  $con = mysqli_connect("localhost","root","","crud");

  if(isset($_REQUEST['btn'])){
      $name = $_REQUEST['fname'];
      $pass = $_REQUEST['password'];

      $sql = "SELECT * FROM `signup` WHERE no = '$name' OR email = '$name'";

      $query = mysqli_query($con , $sql);

      $row = mysqli_fetch_assoc($query);

      if($row){
        $Getpassword = $row['password']; 

        $check = password_verify($pass , $Getpassword);


        if($check){

            header("Location: signup.html");
            exit;
        }

        else{
            echo  "<script>
                alert('Wrong Password, Email or Phone');
                window.location.href = 'login.html';
              </script>";
        }
      }

      else{
            echo  "<script>
                alert('Wrong Password, Email or Phone');
                window.location.href = 'login.html';
              </script>";
      }
      
          //   $sql = "SELECT * FROM `signup` WHERE (no = '$name' OR email = '$name') AND password = '$pass'";
    
    //   $query = mysqli_query($con , $sql);

    //   $row = mysqli_fetch_assoc($query);

    //   if($row){
    //       header("Location: signup.html");
    //       exit;
    //   }
    //   else{
    //       echo "<script>alert('Wrong Password or email or phone');</script>";
    //   }
  }
  ?>
<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
      $servername = "us-cdbr-east-05.cleardb.net";
      $username = "b50bc7c5dabbc7";
      $password = "12838e21";
      $databasename ="heroku_9bf96b83611db46";
        $conn = mysqli_connect($servername,$username , $password,$databasename );
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $gender =  $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $number =$_REQUEST['number'];
        $address = $_REQUEST['address'];
        $postalCode =$_REQUEST['receipt'];

        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO volanteer  VALUES ('$firstname','$lastname','$gender','$email','$number','$address',$receipt)";
          
        if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully." ;
                
  
            
        } else{
            echo ("ERROR: Hush! Sorry . " 
                . mysqli_error($conn));
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
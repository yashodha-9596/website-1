<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
    $conn = pg_connect(getenv("DATABASE_URL"));
          
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
          
        if(pg_query($conn, $sql)){
            echo "data stored in a database successfully." ;
            
        } else{
            echo ("ERROR: Hush! Sorry . ");
        }
          
        // Close connection
        pg_close($conn);
        ?>
    </center>
</body>
  
</html>
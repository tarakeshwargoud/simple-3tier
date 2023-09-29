<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "srr_employeesdata");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
       
        $name = $_REQUEST['name'];
        $Father_name = $_REQUEST['Father_name'];
        $gender = $_REQUEST['gender'];
        $phone = $_REQUEST['phone'];
        $Email_id = $_REQUEST['Email_id'];
        $comment = $_REQUEST['comment'];
      

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO srr_data VALUES ('$name',
            '$Father_name','$gender','$phone','$Email_id','$comment')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>thank you.";

          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>

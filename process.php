<?php 
	$conn = mysqli_connect("localhost", "root", "", "forms");
		
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    $firstpref = $_REQU.EST['1stpref'];
    $secondpref = $_REQUEST['2ndpref'];

    $sql = "INSERT INTO test1 VALUES ('$firstpref','$secondpref')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully.</h3>";
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);


?>
<?php 
	$conn = mysqli_connect("localhost", "root", "", "forms");
		
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }
    
    // Taking all values from the form data(input)
    $fp = $_REQUEST['1stpref'];
    $sp = $_REQUEST['2ndpref'];
    $tp = $_REQUEST['3rdpref'];
    $s = $_REQUEST['siblings'];
    $fn = $_REQUEST['1stname'];
    $ln = $_REQUEST['lname'];
    $bd = $_REQUEST['birthday'];
    $g = $_REQUEST['gender'];
    $mno = $_REQUEST['mobno'];
    $eid = $_REQUEST['emid'];
    $ano = $_REQUEST['aadno'];
    $bgrp = $_REQUEST['bgrp'];
    $rel = $_REQUEST['religion'];
    $cm = $_REQUEST['comm'];
    $fg = $_REQUEST['fg'];
    $mt = $_REQUEST['mt'];
    $fname = $_REQUEST['fname'];
    $fno = $_REQUEST['fno'];
    $focc = $_REQUEST['focc'];
    $ap = $_REQUEST['ap'];
    $gocc = $_REQUEST['gocc'];
    $mn = $_REQUEST['mname'];
    $mmno = $_REQUEST['mmno'];
    $mocc = $_REQUEST['mocc'];
    $gn = $_REQUEST['gname'];
    $gmno =$_REQUEST['gmno'];



    $sql = "INSERT INTO dataform  VALUES ('$fp','$sp','$tp','$s','$fn','$ln','$bd','$g','$mno','$eid','$ano','$bgrp','$rel','$cm','$fg','$mt','$fname','$fno','$focc','$ap','$gocc','$mn','$mmno','$mocc','$gn','$gmno')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully.</h3>";

        echo nl2br("$fp\n$sp\n$tp\n$s\n$fn\n$ln\n$bd\n$g\n$mno\n$eid\n$ano\n$bgrp\n$rel\n$cm\n$fg\n$mt\n$fname\n$fno\n$focc\n$ap\n$gocc\n$mn\n$mmno\n$mocc\n$gn\n$gmno");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);


?>
<?php 
include("inc/config.php");

$sql = "SELECT * FROM contestant ";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $numrow = mysqli_num_rows($result);

        $row = mysqli_fetch_assoc($result);
        $randomnum= rand(1,$numrow);

        $sql2 = "SELECT * FROM contestant where id='$randomnum' ";
        $result2 = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_array($result2)) 
        {
           
           $name = $row['nama'];
           $noacc = $row['no_akaun'];               
        }    
        header("Location: lucky.php?name=".$name."&noacc=".$noacc."&random=".$randomnum."");
	} 
    
?>
 
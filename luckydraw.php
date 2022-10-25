<?php 
include("inc/config.php");

$sql = "SELECT * FROM user ";
$result = mysqli_query($conn, $sql);
 ?>
        
 <?php
    if (mysqli_num_rows($result) > 0) 
    {
        $numrow = mysqli_num_rows($result);

        $row = mysqli_fetch_assoc($result);
        $randomnum= rand(1,$numrow);

        $sql2 = "SELECT * FROM user where ID='$randomnum' ";
        $result2 = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_array($result2)) 
        {
           $name = $row['FullName'];
           $ic = $row['IC'];                
?>

            <h1 class="title"><?php echo $name?></h1> 
            <h1 class="title"><?php echo $ic?></h1>  
                

                    
<?php 	} 
    }?>
 
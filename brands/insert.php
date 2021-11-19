
    <?php
        include('../includes/connection.php');
   

   
        if(isset($_GET)){
            $name = $_GET['brand'];
            
            if($conn->connect_error){
                header('location:../../500.html');
            }else{
                $sql = "INSERT INTO `company`(`company_name`) VALUES ('$name')";	    
                $conn->query($sql);
                header('location:../brands.php');
            }
        }
        else{
            echo "Data not entered properly";
        }
    ?>

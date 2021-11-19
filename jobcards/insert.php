
    <?php
        include('../includes/connection.php');
   

   
        if(isset($_GET)){
            $company_id = $_GET['company_id'];
            $client_name = $_GET['client_name'];
            $product = $_GET['product'];
            $model = $_GET['model'];
            $sl_no = $_GET['sl_no'];
            $problem = $_GET['problem'];
            $accessory = $_GET['accessory'];
            $estimate = $_GET['estimate'];
            $advance = $_GET['advance'];
            $status = $_GET['status'];
            $due = $estimate - $advance; 
            
            if($conn->connect_error){
                header('location:../../500.html');
            }else{
                $sql = "INSERT INTO `jobcard`(`company_id`,`client_name`,`Product`,`Model`,`Sl_no`,`Problem`,`Accessory`,`Status`,`Estimate`,`Advance`,`Due`) VALUES ('$company_id','$client_name','$product','$model','$sl_no','$problem','$accessory','$status','$estimate','$advance','$due')";	    
                $conn->query($sql);
                header('location:../jobcard.php');
            }
        }
        else{
            echo "Data not entered properly";
        }
    ?>

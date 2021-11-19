<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('connection.php');
    ?>
    <br>
    <?php
        if(isset($_GET)){
            $id = $_GET['company_id'];
            $name = $_GET['brand'];
                        if($conn->connect_error){
                echo "there was error";
            }else{
                echo $sql = "UPDATE `company` SET company_name='$name'    WHERE company_id = $id";	    
                $conn->query($sql);
                header('location:../dashboard.php');
            }
        }
        else{
            echo "Data not entered properly";
        }
    ?>
</body>
</html>
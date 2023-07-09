<?php
   session_start();
    // Database connection
    include('conectar.php');
    include('config.php');
    include('logar.php');
    

        if(isset($_POST['buscar'])) {
        $valor = $_POST['valorid'];
        
        // Query if email exists in db
        $sql = "SELECT * From donations WHERE id_reference = '{$valor}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);
        
        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . mysqli_error($connection));
        }
        
            // Check if email exist
            if($rowCount <= 0) {
                
                echo "User account does not exist.";
                
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id              = $row['id'];
                    $nickname        = $row['nickname'];
                    $email           = $row['email'];
                    $message         = $row['message'];
                    $status          = $row['status'];
                    $value           = $row['value'];
                    $created_at      = $row['created_at'];
                    $updated_at      = $row['updated_at'];


                }
                
                echo  $status;
                 
            }
            
        
        }
                                            
                                            










?>
      

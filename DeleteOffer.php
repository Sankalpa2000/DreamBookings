<?php
#including configaration file 
include 'config.php';
?>
<?php
   if(isset($_GET['delete_id']))
    {
        
        $seller_id = $_GET['delete_id'];
        
        $sql = "DELETE FROM offers WHERE offer_id = $seller_id";

        $result= mysqli_query($connection,$sql);

        if($result)
        {
            echo "Deleted Succefully";
            header("location:AdministratorDashboard.php");
        }
        else{
            echo "Error";
        }
                
    }

?>
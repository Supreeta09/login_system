
<?php
    include 'connection.php';
    $sql = "delete from login where email = '".$_GET['id']."'";    
    $result = mysqli_query($con,$sql);  
    if($result){
        ?>
        <script type="text/javascript">
        alert("data deleted")
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("data not deleted")
        </script>
        <?php
    }
    header("location:login_data.php");
?>
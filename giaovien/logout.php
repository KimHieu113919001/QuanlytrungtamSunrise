  <?php
    
    session_start();
    //echo $_SESSION['user'];
    unset($_SESSION['id_giaovien']); 
    //echo 'session has destroyed';
   header ("Location: ../index.php");
?>
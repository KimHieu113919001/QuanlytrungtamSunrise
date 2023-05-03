  <?php
    
    session_start();
    //echo $_SESSION['user'];
    unset($_SESSION['id_hocvien']); 
    unset($_SESSION['username']); 
    //echo 'session has destroyed';
   header ("Location:index.php");
?>
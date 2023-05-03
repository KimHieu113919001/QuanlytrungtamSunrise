<?php
    
    include("config.php"); 
    
    
   
   
    if(isset($_POST['submit'])){
        $id=$_GET['id'];
        $noidung= $_FILES['noidung']['name'];
        move_uploaded_file($_FILES['noidung']['tmp_name'],"images/".$_FILES['noidung']['name']); 
        $noidungcu= $_POST['noidungcu'];

        $hinhanh= $_FILES['hinhanh']['name'];
        move_uploaded_file($_FILES['hinhanh']['tmp_name'],"images/".$_FILES['hinhanh']['name']); 
        $hinhanhcu= $_POST['hinhanhcu'];

       if($hinhanh == "" && $noidung ==""){
        $sql="UPDATE cau_hoi_listening SET noidung='$noidungcu', hinhanh='$hinhanhcu' WHERE id='$_GET[id]'";
        mysqli_query($connection,$sql);
            if(mysqli_query($connection,$sql)){
            header("Location: suafilenghe.php?id=".$id); 
            }else{
            echo "Not inserted";
            }
     
     
        }elseif($hinhanh != "" && $noidung ==""){
            $sql="UPDATE cau_hoi_listening SET noidung='$noidungcu', hinhanh='$hinhanh' WHERE id='$_GET[id]'";
            mysqli_query($connection,$sql);
                if(mysqli_query($connection,$sql)){
                header("Location: suafilenghe.php?id=".$id); 
                }else{
                echo "Not inserted";
                }
        }elseif($hinhanh == "" && $noidung != ""){
            $sql="UPDATE cau_hoi_listening SET noidung='$noidung', hinhanh='$hinhanhcu' WHERE id='$_GET[id]'";
            mysqli_query($connection,$sql);
                if(mysqli_query($connection,$sql)){
                header("Location: suafilenghe.php?id=".$id); 
                }else{
                echo "Not inserted";
                }
        }elseif($hinhanh != "" && $noidung != ""){
            $sql="UPDATE cau_hoi_listening SET noidung='$noidung', hinhanh='$hinhanh' WHERE id='$_GET[id]'";
            mysqli_query($connection,$sql);
                if(mysqli_query($connection,$sql)){
                header("Location: suafilenghe.php?id=".$id); 
                }else{
                echo "Not inserted";
                }
        }
    }
     ?>
<?php

    include("config.php");
    $msg= "" ;  
    session_start();

    if(isset($_POST['themlichsang'])){     
        
        $id_tuan=$_GET['id_tuan'];
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];
        

        if($thu_2 != 0 ){
        foreach($thu_2 as $i){
            $id_thu="1";
            $id_buoi="1";
            $so_gio="4";
            $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res2= mysqli_query($connection,$insert_query2);
        }}else{
            $id_thu="1";
            $id_buoi="1";
            $so_gio="4";
            $id_giaovien="0";
            $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res2= mysqli_query($connection,$insert_query2);
        }

       
        if($thu_3 != 0){
        foreach($thu_3 as $i){
            $id_thu="2";
            $id_buoi="1";
            $so_gio="4";
            $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res3= mysqli_query($connection,$insert_query3);
        }}else{
            $id_thu="2";
            $id_buoi="1";
            $so_gio="4";
            $id_giaovien="0";
            $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res3= mysqli_query($connection,$insert_query3);
        }


        if($thu_4 != 0){
        foreach($thu_4 as $i){
             $id_thu="3";
             $id_buoi="1";
             $so_gio="4";
             $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
             $res4= mysqli_query($connection,$insert_query4);
        }}else{
             $id_thu="3";
             $id_buoi="1";
             $so_gio="4";
             $id_giaovien="0";
             $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
             $res4= mysqli_query($connection,$insert_query4);
        }


        if($thu_5 != 0){ 
        foreach($thu_5 as $i){
            $id_thu="4";
            $id_buoi="1";
            $so_gio="4";
            $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res5= mysqli_query($connection,$insert_query5);
        }}else{
            $id_thu="4";
            $id_buoi="1";
            $so_gio="4";
            $id_giaovien="0";
            $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res5= mysqli_query($connection,$insert_query5);
        }


        if($thu_6 != 0){ 
        foreach($thu_6 as $i){
            $id_thu="5";
            $id_buoi="1";
            $so_gio="4";
            $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res6= mysqli_query($connection,$insert_query6);
        }}else{
            $id_thu="5";
            $id_buoi="1";
            $so_gio="4";
            $id_giaovien="0";
            $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res6= mysqli_query($connection,$insert_query6);
        }
        

        if($thu_7 != 0){ 
        foreach($thu_7 as $i){
            $id_thu="6";
            $id_buoi="1";
            $so_gio="4";
            $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res7= mysqli_query($connection,$insert_query7);
        }}else{
            $id_thu="6";
            $id_buoi="1";
            $so_gio="4";
            $id_giaovien="0";
            $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res7= mysqli_query($connection,$insert_query7);
        }


        if($chu_nhat != 0){ 
        foreach($chu_nhat as $i){
            $id_thu="7";
            $id_buoi="1";
            $so_gio="4";
            $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res8= mysqli_query($connection,$insert_query8);
        }}else{
            $id_thu="7";
            $id_buoi="1";
            $so_gio="4";
            $id_giaovien="0";
            $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res8= mysqli_query($connection,$insert_query8);
        }

    }

    //Thêm lịch trưa 13h00-17h30
    if(isset($_POST['themlichtrua1'])){     
        
        $id_tuan=$_GET['id_tuan'];
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];
        
        if($thu_2 != 0){ 
        foreach($thu_2 as $i){
            $id_thu="1";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res2= mysqli_query($connection,$insert_query2);
        }}else{
            $id_thu="1";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res2= mysqli_query($connection,$insert_query2);
        }

        if($thu_3 != 0){ 
        foreach($thu_3 as $i){
            $id_thu="2";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res3= mysqli_query($connection,$insert_query3);
        }}else{
            $id_thu="2";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res3= mysqli_query($connection,$insert_query3);
        }
        
        if($thu_4 != 0){ 
        foreach($thu_4 as $i){
            $id_thu="3";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res4= mysqli_query($connection,$insert_query4);
        }}else{
            $id_thu="3";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res4= mysqli_query($connection,$insert_query4);
        }

        if($thu_5 != 0){ 
        foreach($thu_5 as $i){
            $id_thu="4";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res5= mysqli_query($connection,$insert_query5);
        }}else{
            $id_thu="4";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res5= mysqli_query($connection,$insert_query5);
        }

        if($thu_6 != 0){
        foreach($thu_6 as $i){
            $id_thu="5";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res6= mysqli_query($connection,$insert_query6);
        }}else{
            $id_thu="5";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res6= mysqli_query($connection,$insert_query6);
        }
        
        if($thu_7 != 0){
        foreach($thu_7 as $i){
            $id_thu="6";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res7= mysqli_query($connection,$insert_query7);
        }}else{
            $id_thu="6";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res7= mysqli_query($connection,$insert_query7);
        }

        if($chu_nhat != 0){
        foreach($chu_nhat as $i){
            $id_thu="7";
            $id_buoi="2";
            $so_gio="4.5";
            $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res8= mysqli_query($connection,$insert_query8);
        }}else{
            $id_thu="7";
            $id_buoi="2";
            $so_gio="4.5";
            $id_giaovien="0";
            $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res8= mysqli_query($connection,$insert_query8);
        
        }}


    if(isset($_POST['themlichtrua2'])){     
        
      $id_tuan=$_GET['id_tuan'];
      $thu_2=$_POST['thu_2'];
      $thu_3=$_POST['thu_3'];
      $thu_4=$_POST['thu_4'];
      $thu_5=$_POST['thu_5'];
      $thu_6=$_POST['thu_6'];
      $thu_7=$_POST['thu_7'];
      $chu_nhat=$_POST['chu_nhat'];
      
      if($thu_2 != 0){
      foreach($thu_2 as $i){
          $id_thu="1";
          $id_buoi="3";
          $so_gio="4";
          $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
          $res2= mysqli_query($connection,$insert_query2);
      }}else{
          $id_thu="1";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res2= mysqli_query($connection,$insert_query2);
      }

      if($thu_3!= 0){
      foreach($thu_3 as $i){
          $id_thu="2";
          $id_buoi="3";
          $so_gio="4";
          $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
          $res3= mysqli_query($connection,$insert_query3);
      }}else{
          $id_thu="2";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res3= mysqli_query($connection,$insert_query3);
      }
      
      if($thu_4!= 0){
      foreach($thu_4 as $i){
           $id_thu="3";
           $id_buoi="3";
           $so_gio="4";
           $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
           $res4= mysqli_query($connection,$insert_query4);
      }}else{
          $id_thu="3";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res4= mysqli_query($connection,$insert_query4);
      }

      if($thu_5!= 0){
      foreach($thu_5 as $i){
          $id_thu="4";
          $id_buoi="3";
          $so_gio="4";
          $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
          $res5= mysqli_query($connection,$insert_query5);
      }}else{
          $id_thu="4";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res5= mysqli_query($connection,$insert_query5);
      }

      if($thu_6!= 0){
      foreach($thu_6 as $i){
          $id_thu="5";
          $id_buoi="3";
          $so_gio="4";
          $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
          $res6= mysqli_query($connection,$insert_query6);
      }}else{
          $id_thu="5";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res6= mysqli_query($connection,$insert_query6);
      }
      
      if($thu_7!= 0){
      foreach($thu_7 as $i){
          $id_thu="6";
          $id_buoi="3";
          $so_gio="4";
          $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
          $res7= mysqli_query($connection,$insert_query7);
      }}else{
          $id_thu="6";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res7= mysqli_query($connection,$insert_query7);
      }

      if($chu_nhat!= 0){
      foreach($chu_nhat as $i){
          $id_thu="7";
          $id_buoi="3";
          $so_gio="4";
          $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
          $res8= mysqli_query($connection,$insert_query8);
      }}else{
          $id_thu="7";
          $id_buoi="3";
          $so_gio="4";
          $id_giaovien="0";
          $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
          $res8= mysqli_query($connection,$insert_query8);
      }
  }


    if(isset($_POST['themlichtoi'])){     
        
        $id_tuan=$_GET['id_tuan'];
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];
        
        if($thu_2!= 0){
        foreach($thu_2 as $i){
            $id_thu="1";
            $id_buoi="4";
            $so_gio="3.5";
            $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res2= mysqli_query($connection,$insert_query2);
        }}else{
            $id_thu="1";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query2="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res2= mysqli_query($connection,$insert_query2);
        }

        if($thu_3!= 0){
        foreach($thu_3 as $i){
            $id_thu="2";
            $id_buoi="4";
            $so_gio="3.5";
            $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res3= mysqli_query($connection,$insert_query3);
        }}else{
            $id_thu="2";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query3="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res3= mysqli_query($connection,$insert_query3);
        }
        
        if($thu_4!= 0){
        foreach($thu_4 as $i){
             $id_thu="3";
             $id_buoi="4";
             $so_gio="3.5";
             $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
             $res4= mysqli_query($connection,$insert_query4);
        }}else{
            $id_thu="3";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query4="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res4= mysqli_query($connection,$insert_query4);
        }

        if($thu_5!= 0){
        foreach($thu_5 as $i){
            $id_thu="4";
            $id_buoi="4";
            $so_gio="3.5";
            $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res5= mysqli_query($connection,$insert_query5);
        }}else{
            $id_thu="4";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query5="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res5= mysqli_query($connection,$insert_query5);
        }

        if($thu_6!= 0){
        foreach($thu_6 as $i){
            $id_thu="5";
            $id_buoi="4";
            $so_gio="3.5";
            $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res6= mysqli_query($connection,$insert_query6);
        }}else{
            $id_thu="5";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query6="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res6= mysqli_query($connection,$insert_query6);
        }
        
        if($thu_7!= 0){
        foreach($thu_7 as $i){
            $id_thu="6";
            $id_buoi="4";
            $so_gio="3.5";
            $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res7= mysqli_query($connection,$insert_query7);
        }}else{
            $id_thu="6";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query7="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res7= mysqli_query($connection,$insert_query7);
        }

        if($chu_nhat!= 0){
        foreach($chu_nhat as $i){
            $id_thu="7";
            $id_buoi="4";
            $so_gio="3.5";
            $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$i','$so_gio')";
            $res8= mysqli_query($connection,$insert_query8);
        }}else{
            $id_thu="7";
            $id_buoi="4";
            $so_gio="3.5";
            $id_giaovien="0";
            $insert_query8="INSERT INTO `tructuan`(`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`) VALUES ('','$id_tuan','$id_buoi','$id_thu','$id_giaovien','$so_gio')";
            $res8= mysqli_query($connection,$insert_query8);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/logosunrise.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
        <!-- Sweetalert -->
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
</head>
<style>
body{
  background-image: url("../sunrise/admin/images/course-1.jpg");
  height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 100%;
}
.buttonsua {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block; width: auto;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonsua {  background-color: white;   color: black;   border: 2px solid green;}
.buttonsua:hover {  background-color: green;  color: white;}
.buttonxoa {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block; width: 120px;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonxoa {  background-color: white;   color: black;   border: 2px solid red;}
.buttonxoa:hover {  background-color: red;  color: white;}
.buttonthem {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold;  color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonthem {  background-color: white;   color: black;   border: 2px solid #17a2b8;}
.buttonthem:hover {  background-color: #17a2b8;  color: white;}

th{
  text-align:center;
}
</style>
<body>
<?php if(isset($_SESSION['id_giaovien'])==true) { ?>
    <?php
  include("../giaodien/topbar.php");
  include("giaodien_gv/header.php");
  ?>    
<?php } ?>
<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Xếp lịch trực</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xếp lịch trực</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid"> 
        <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

   <tr>
        <th style="width:5%;"></th>
        <th style="width:5%;">Giờ</th>
        <th style="width:11.8%;">Thứ 2</th>
        <th style="width:11.8%;">Thứ 3</th>
        <th style="width:11.8%;">Thứ 4</th>
        <th style="width:11.8%;">Thứ 5</th>
        <th style="width:11.8%;">Thứ 6</th>
        <th style="width:11.8%;">Thứ 7</th>
        <th style="width:11.8%;">Chủ nhật</th>
        <th style="width:5%;"></th>
    </tr>

    <tr>
    
    <th style="width:5%; background-color:#ffff80;text-align:center;">Ca 1</th>
    <th style="width:5%;">7h00-11h00</th>
        <form action="" method="POST" enctype="multipart/form-data"  >
        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_2[]" multiple="multiple" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                      <option value="<?php echo $row_2['id_giaovien']?>"><?php echo $row_2['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="0">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="thu_3[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                      <option value="<?php echo $row_3['id_giaovien']?>"><?php echo $row_3['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_4[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                      <option value="<?php echo $row_4['id_giaovien']?>"><?php echo $row_4['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_5[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                      <option value="<?php echo $row_5['id_giaovien']?>"><?php echo $row_5['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_6[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                      <option value="<?php echo $row_6['id_giaovien']?>"><?php echo $row_6['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_7[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                      <option value="<?php echo $row_7['id_giaovien']?>"><?php echo $row_7['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="chu_nhat[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                      <option value="<?php echo $row_8['id_giaovien']?>"><?php echo $row_8['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>
        
            <td><button type="submit" class="btn btn-success"  name="themlichsang">Lưu</button></td>
    </form>
    </tr>



    <tr>
        <th style="width:5%; background-color:#ffff80; text-align:center;" rowspan="2" >Ca 2</th>
        <th style="width:5%;">13h00-17h30</th>
        <form action="" method="POST" enctype="multipart/form-data"  >
            
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_2[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                      <option value="<?php echo $row_2['id_giaovien']?>"><?php echo $row_2['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="thu_3[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                      <option value="<?php echo $row_3['id_giaovien']?>"><?php echo $row_3['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_4[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                      <option value="<?php echo $row_4['id_giaovien']?>"><?php echo $row_4['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_5[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                      <option value="<?php echo $row_5['id_giaovien']?>"><?php echo $row_5['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_6[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                      <option value="<?php echo $row_6['id_giaovien']?>"><?php echo $row_6['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_7[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                      <option value="<?php echo $row_7['id_giaovien']?>"><?php echo $row_7['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="chu_nhat[]" multiple="multiple"required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                      <option value="<?php echo $row_8['id_giaovien']?>"><?php echo $row_8['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>
            <td><button type="submit" class="btn btn-success"  name="themlichtrua1">Lưu</button></td>
    </form>
                    </tr>
    <tr>
    <th style="width:5%;">13h30-17h30</th>
        <form action="" method="POST" enctype="multipart/form-data"  >
            
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_2[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                      <option value="<?php echo $row_2['id_giaovien']?>"><?php echo $row_2['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="thu_3[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                      <option value="<?php echo $row_3['id_giaovien']?>"><?php echo $row_3['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_4[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                      <option value="<?php echo $row_4['id_giaovien']?>"><?php echo $row_4['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_5[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                      <option value="<?php echo $row_5['id_giaovien']?>"><?php echo $row_5['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_6[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                      <option value="<?php echo $row_6['id_giaovien']?>"><?php echo $row_6['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_7[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                      <option value="<?php echo $row_7['id_giaovien']?>"><?php echo $row_7['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="chu_nhat[]" multiple="multiple" required>
        <option value="0">Trống</option>
                    
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                      <option value="<?php echo $row_8['id_giaovien']?>"><?php echo $row_8['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>
            <td><button type="submit" class="btn btn-success"  name="themlichtrua2">Lưu</button></td>
    </form>
    </tr>




    <tr>
        <th style="width:5%; background-color:#ffff80;text-align:center;">Ca 3</th>
        <th style="width:5%;">17h30-21h00</th>
                <form action="" method="POST" enctype="multipart/form-data"  >
            
                <td>
        <select class="form-control js-example-basic-multiple" name="thu_2[]" multiple="multiple" required>
              <option value="0">Trống</option>
                    
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                      <option value="<?php echo $row_2['id_giaovien']?>"><?php echo $row_2['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="thu_3[]" multiple="multiple" required>
                <option value="0">Trống</option>
                    
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                      <option value="<?php echo $row_3['id_giaovien']?>"><?php echo $row_3['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_4[]" multiple="multiple" required>
                <option value="0">Trống</option>
                    
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                      <option value="<?php echo $row_4['id_giaovien']?>"><?php echo $row_4['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_5[]" multiple="multiple" required>
                <option value="0">Trống</option>
                    
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                      <option value="<?php echo $row_5['id_giaovien']?>"><?php echo $row_5['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_6[]" multiple="multiple" required>
                <option value="0">Trống</option>
                    
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                      <option value="<?php echo $row_6['id_giaovien']?>"><?php echo $row_6['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>

        
        <td>
        <select class="form-control js-example-basic-multiple" name="thu_7[]" multiple="multiple" required>
                <option value="0">Trống</option>
                    
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                      <option value="<?php echo $row_7['id_giaovien']?>"><?php echo $row_7['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>


        <td>
        <select class="form-control js-example-basic-multiple" name="chu_nhat[]" multiple="multiple" required>
                <option value="0">Trống</option>
                    
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1' ORDER BY id_giaovien ASC";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                      <option value="<?php echo $row_8['id_giaovien']?>"><?php echo $row_8['ten_vt']?></option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
        </td>
            <td><button type="submit" class="btn btn-success"  name="themlichtoi">Lưu</button></td>
    </form>
    </tr>
   </table>
                    </div>
   <?php
    include("giaodien/footer.php");
     ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});</script>
</body>

</html>

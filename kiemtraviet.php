<?php
    include("config1.php");
    session_start();
    if(!isset($_SESSION['id_hocvien'])){
      header('Location:login.php');
     }
   $id_hocvien=$_GET['id_hocvien'];
   $id_cap=$_GET['id_cap'];
   $doituong=$_GET['doituong'];
   $id_de=$_GET['id_de'];
  
   $socauhoi="0";
   $selExam1 = $connection->query("SELECT * FROM cau_hoi WHERE id_de='$id_de' AND id_kynang='2' ");
     while($row_socauhoi = $selExam1->fetch(PDO::FETCH_ASSOC))  {
      $socauhoi++;
     }

   $selExam = $connection->query("SELECT * FROM de_test WHERE id_de='$id_de' ")->fetch(PDO::FETCH_ASSOC);
   $time_writing = $selExam['time_writing'];
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
    <link href="img/logosunrise.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

        <!-- Sweetalert -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Datepicker -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      

      

</head>
<style>
body{
 background-image: url("../sunrise/admin/images/registration.jpg");
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


</style>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
<?php
  include("giaodien/topbar.php");
?>
<?php } ?>


<body>  

<br>
<div class="container-fluid"> 
      <div class="container"> 
            <div> 
                  <div class="bg-secondary p-5">
                      <div class="hinh">
                          <h1 style="text-align: center; background-color:yellow; color:#000000;">KIỂM TRA KỸ NĂNG VIẾT</h1>      
                      </div> 

                      <form name="cd" id="tg">
                          <input type="hidden" name="" id="timeExamLimit" value="<?php echo $time_writing; ?>">
                          <input type="hidden" name="" id="socauhoi" value="<?php echo $socauhoi; ?>">

                          <label>Thời gian làm bài : </label>
                          <input style="border:none;background-color: transparent;color:blue;font-size: 25px;" name="disp" type="text" class="clock" id="txt" value="<?php echo $time_writing; ?>:00" size="5" readonly="true" />
                      </form> 
 
                          <br>
                          <div style="text-align:center;">
                            <button type="submit" class="btn buttonsua" id="btnStart" name="btnStart" style="font-size:20px;">Bắt đầu</button>
                          </div>
                          <input type="hidden" id="id_hocvien" value="<?php echo $id_hocvien;?>" class="span8 tip">
                          <input type="hidden" id="id_de" value="<?php echo $id_de;?>" class="span8 tip">


                          <div id="cauhoiviet">
                          </div>
                          <div id="thongbao" style="text-align:center;">
                          </div>
                          <div style="text-align:center;">
                            <button type="submit" class="btn buttonthem" onclick="return confirm('Bạn có chắc muốn nộp bài?')" id="btnNext" style="font-size:20px;">Nộp bài</button>
                          </div>
                          
                          <div style="text-align:center;">
                            <a type="submit" class="btn buttonthem" id="btnNextnghe" href="kiemtranghe.php?id_hocvien=<?php echo $id_hocvien;?>&id_cap=<?php echo $id_cap; ?>&doituong=<?php echo $doituong;?>&id_de=<?php echo $id_de;?>" style="font-size:20px;">Bắt đầu bài kiểm tra nghe</a>
                          </div>
<!-- 
                          <div style="text-align:center;">
                            <button type="submit" class="btn buttonthem" id="btnNext3" style="font-size:20px;">Nộp bài</button>
                          </div> -->
                    </div> 
        </div>
    </div> 
</div>
<br>


    <script>


    $(document).ready(function(){
      $('#btnNext').hide();
      $('#btnNextnghe').hide();

    });

    var cauhoiv;
    $('#btnStart').click(function(){
      GetQuestionsViet();
      $('#btnNext').show();//nút nộp bài
      $(this).hide();
      redo();
    });
    
    //Nộp bài READING 
    $('#btnNext').click(function(){
        $(this).hide();
        $('#btnNextnghe').show();
        $('#cauhoiviet').hide();  
        CheckResultViet();  
    });


    //Lưu điểm WRITING
    function CheckResultViet(){
      let markv = 0;
      let id_hocvien1 = $('#id_hocvien').val();
      let socauhoi = $('#socauhoi').val();
      $('#cauhoiviet div.mb-2').each(function(k,v){
        //Lấy đáp án đúng của câu hỏi
        let id = $(v).attr('id');
        let cauhoi = cauhoiv.find(x=>x.id_cauhoi == id);
        let dapan = cauhoi['dapan_dung'];

        //Lấy đáp án của người dùng chọn
        let choice = $(v).find('fieldset input[type="radio"]:checked').attr('class');
        if(choice == dapan){
          markv+= 1;
        }else{
          console.log('Câu có id: '+id+' sai');
        }
      });
      $('#btnNext').hide();
      $('#tg').hide();
          $.ajax({
            url:'diemviet.php',
            type: 'post',
            data:{
              socauhoi:socauhoi,
              id_hocvien1:id_hocvien1,
              markv:markv
            },
            success:function(b){
              console.log(b);
            }
          });
    }


      //Show câu hỏi Viết
    function GetQuestionsViet(){
      let id_de = $('#id_de').val();
        $.ajax({
            url:'cauhoiviet.php',
            type: 'get',
            data:{
              id_de:id_de
            },
            success:function(data1){
                cauhoiv = jQuery.parseJSON(data1);
                let index1 = 1;
                let d1 = '';
                $.each(cauhoiv,function(k,v){
                d1+= '<div class="mb-2" style="font-weight:bold;" id="'+v['id_cauhoi']+'">';
                d1+= '<span style="color:red;">Câu '+index1+':</span>'+v['noidung']+'';
                if(v['hinhanh']!=""){
                d1+= '<br><div style="text-align:center;"><img src="admin/images/'+v['hinhanh']+'" width:100px></div>';
                }
                d1+= '<fieldset id="group'+index1+'">';
                d1+= '<div style="font-weight:normal;"><label style="width:45%;">A&ensp;<input type="radio" class="A" name="group'+index1+'">&ensp;'+v['dapan_A']+'<br>';
                if(v['hinhA']!=""){
                d1+= '<img src="admin/images/'+v['hinhA']+'" width="100px" height="100px">';
                }
                d1+= '</label>'; 
                d1+= '<label style="width:45%;">B&ensp;<input type="radio" class="B" name="group'+index1+'">&ensp;'+v['dapan_B']+'<br>';
                if(v['hinhB']!=""){
                d1+= '<img src="admin/images/'+v['hinhB']+'" width="100px" height="100px">';
                }
                d1+= '</label></div><br>'; 
                d1+= '<div style="font-weight:normal;"><label style="width:45%;">C&ensp;<input type="radio" class="C" name="group'+index1+'">&ensp;'+v['dapan_C']+'<br>';
                if(v['hinhC']!=""){
                d1+= '<img src="admin/images/'+v['hinhC']+'" width="100px" height="100px">';
                }
                d1+= '</label>'; 
                d1+= '<label style="width:45%;">D&ensp;<input type="radio" class="D" name="group'+index1+'">&ensp;'+v['dapan_D']+'<br>';
                if(v['hinhD']!=""){
                d1+= '<img src="admin/images/'+v['hinhD']+'" width="100px" height="100px">';
                }
                d1+= '</label></div>';
                d1+= '</fieldset>'; 
                d1+= '</div><br>';
                index1++;
                });
                $('#cauhoiviet').html(d1);
            }
        });
    }



    

var mins
var secs;

function cd() {
  var timeExamLimit = $('#timeExamLimit').val();
  mins = 1 * m("" + timeExamLimit); // change minutes here
  secs = 0 + s(":01"); 

}

function m(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(0, i));
}

function s(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
  var disp;
  if(mins <= 9) {
      disp = " 0";
  } else {
      disp = " ";
  }
  disp += mins + ":";
  if(secs <= 9) {
      disp += "0" + secs;
  } else {
      disp += secs;
  }
  return(disp);
}
function redo() {
  secs--;
  if(secs == -1) {
      secs = 59;
      mins--;
  }
  document.cd.disp.value = dis(mins,secs); 
  if((mins == 0) && (secs == 0)) {
      $('#cauhoiviet').hide();
      $('#btnNextnghe').show();
     CheckResultViet();
  } else {
    cd = setTimeout("redo()",1000);
  }
}

function init() {
  cd();
}
window.onload = init;



</script>
</body>
</html>
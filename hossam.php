
<?php

//index.php

include('database_connection.php');
include('function.php');

if(!isset($_SESSION["type"]))
{
	header("location:login.php");
}

include('header.php');

?>


<head>
  
</head>
<body>







<div class="container-fluid" style="margin-top:30px">
  <div class="row ">



  <div class="col-lg ">
  <form action="gigi.php"  method="post">


    <select name="service" class="custom-select mb-3" dir="rtl" >
      <option value="%">اختار الخدمة</option>
      <?php echo fill_service($connect);?>
      </select>
	  
</div>

  <div class="col-lg">

    <select name="zone" class="custom-select mb-3" dir="rtl"  >
	
      <option value="%">المنطقة</option>
	  
      <?php echo fill_zone($connect);?>
       </select>

</div>




<div class="col-lg">
<!-- <input type="text" name="idr"> -->
  <select name="grade" class="custom-select mb-3" dir="rtl"  >
    <option value="%">الدرجة العلمية</option>
    <?php echo fill_grade($connect);?>

     </select>

</div>

<div class="col-lg">

  <button type="submit" class="form-control btn btn-success active searchinputButton" name = "submit" value="search" id="searchnow">
<span>
<i class="fas fa-search" ></i>
ابحث
</span>
</button>

</div>

  </form>

<!--  old    -->


</div>
</div>



</body>

</html>


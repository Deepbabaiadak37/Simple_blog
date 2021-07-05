
<?php
$username=$_GET['username'];

$conn=mysqli_connect("localhost","root","","image");
if($conn)
{
  
  if(isset($_POST['submit']))
  {
    $des=$_POST['textarea'];
    $name=$username;
    $img=$_FILES['image']['name'];

   $sql="INSERT INTO `images`(`name`, `imagename`,`description`) VALUES ('$name','$img','$des')";
   $qry=mysqli_query($conn,$sql);
   if($qry)
   {


    $filetmpname=$_FILES['image']['tmp_name'];
     move_uploaded_file($filetmpname, "upload/$img");
    $url="main.php?username=".$username;
    header('Location:'.$url);
   }
   else
   {
    header("location:emni.php");
   }
 }

}

?>



<!DOCTYPE html>
<html>
<head>
  <title>image preview</title>
  <link rel="stylesheet" type="text/css" href="postcss.css">
</head>
<body>
<form  method="post" class="postbody" enctype="multipart/form-data">

        <div class="c1">

          <textarea class="txtarea" name="textarea" rows="280" cols="300"></textarea>
        </div>

        <div class="c2">

          <input type="file" id="file" onchange="loadfile(event)" name="image">

        </div>
        <div class="c3">
          <img src="" id="preimage" width="200px" height="200px">

        </div>
        <div class="post">
          
          <input type="submit" name="submit" value="Submit">
        </div>
</form>

  <script type="text/javascript">
    function loadfile(event)
    {

      var output=document.getElementById('preimage');
      output.src=URL.createObjectURL(event.target.files[0]);

    }



  </script>

  
</body>
</html>




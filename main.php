<?php

$username=$_GET['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Frenjoy</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript">
		function fun()
		{

			window.open("index.html","_self");

		}
		

	</script>
</head>
<body bgcolor="red">


	<div class="wel">

		<div class="fst">
			<b>welcome  </b>

		</div>

		<div class="scd">
				<button class="btnfst"><b>
							<?php
								echo "$username";

							?></b>
					</button>
		</div> 
	
	</div>


			
			<div class="welscd">
				
				<button class="btnscd" onclick="fun()">LogOut</button>

			</div>

			<div class="thd">

				<form method="post">
					<button class="btnthd" name="chngbtn"><b>Add your New Post</b>
					</button>

				</form>
			</div> 


<div class="showpic">
	<center>
		<form action="" method="POSt" enctype="multipart/form-data">
			<table width="70%" border="1" cellpadding="7" cellspacing="7" class="scrolldown">
				<thead>
					<tr>
						
						<th>USER</th>
						<th>POSTS</th>
						<th>ABOUT</th>
					</tr>
				</thead>

				<?php
					$connection=mysqli_connect("localhost","root","","image");
					$qury=" SELECT * FROM `images`";
					$qury_run=mysqli_query($connection,$qury);
					while($row=mysqli_fetch_array($qury_run))
					{
						
						?>
						<tr>
							<td class="td1"> <div class="intd"><?php  echo $row['name'] ;   ?> </div></td>
							<td class="td2">

						 <img src="upload/<?php
				echo $row['imagename']; ?>"  height="300px" width="300px">
							</td>
							<td class="td3">
								<?php    echo $row['description'];              ?>
							</td>                                                  <!--EKHANTA...............................-->
							<td class="delt">
									
							<a href="<?php   echo "delete.php?id=". $row['id'] ;echo"&username=".$username ; ?> "  > Delete</a>
							</td>
						</tr>
						<?php
					}




				?>
			</table>
						

		</form>

	</center>
</div>

			
<?php

if(isset($_POST['chngbtn']))
{
	$url="post2.php?username=".$username;
		header('Location:'.$url);
}

?>
</body>
</html>
<?php include("crud1.php");

// fetch the record to be updated

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$edit_state=true;
	$rec=mysqli_query($db,"SELECT * from crud where id='$id'");
	$record=mysqli_fetch_array($rec);
	$name=$record['name'];
	$email=$record['email'];
	$class=$record['class'];
	$year=$record['year'];
	$city=$record['city'];
	$country=$record['country'];
	$id=$record['id'];

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>create,update,delete,read</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
</head>
<body>

    <?php if(isset($_SESSION['msg'])):?>

    	<div class="msg">
    		<?php
    		 echo $_SESSION['msg'];
    		 unset($_SESSION['msg']);
    		?>
    	</div>


    <?php endif ?>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Class</th>
				<th>Year</th>
				<th>City</th>
				<th>Country</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_array($result)){?>

			
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['class'];?></td>
				<td><?php echo $row['year'];?></td>
				<td><?php echo $row['city'];?></td>
				<td><?php echo $row['country'];?></td>
				<td><a class="edit_btn"href="crud.php?edit=<?php echo $row['id'];?>">edit</a></td>
				<td><a  class="del_btn"href="crud1.php?del=<?php echo $row['id'];?>">delete</a></td>

			</tr>
		<?php }?>
		</tbody>
	</table>
	<form action="crud1.php"method="post">
		<input type="hidden" name="id"value="<?php echo $id;?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name"value="<?php echo $name;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email"value="<?php echo $email;?>">
		</div>
		<div class="input-group">
			<label>Class</label>
			<input type="text" name="class"value="<?php echo $class;?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="year"value="<?php echo $year;?>">
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city"value="<?php echo $city;?>">
		</div>
		<div class="input-group">
			<label>Country</label>
			<input type="text" name="country"value="<?php echo $country;?>">
		</div>
		<div class="input-group">
			<?php if($edit_state==false):?>
				<button type="submit"name="save"class="btn">save</button>
				<?php else:?>
					<button type="submit"name="update"class="btn">update</button>
				<?php endif ?>



			
		</div>
	</form>




</body>
</html>
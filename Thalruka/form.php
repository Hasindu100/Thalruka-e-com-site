<html>
<body>
<head>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<form action="upload2.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Input Images</label>
    <input type="file" name="files[]" class="form-control-file" multiple id="exampleFormControlFile1"><br/>
	<label for="exampleFormControlFile1">Enter Item Number</label>
	<input class="form-control" type="text" placeholder="item_id" name="item_id"><br/>
	<label for="exampleFormControlFile1">Enter Name</label>
	<input class="form-control" type="text" placeholder="Caption" name="caption"><br/>
	<label for="exampleFormControlFile1">Enter Price</label>
	<input class="form-control" type="text" placeholder="price" name="price"><br/>
	<label for="exampleFormControlFile1">Select Catogery</label>
	<select class="form-control" name="catagory">
		<option>සිල්ලර බඩු</option>
		<option>සබන්</option>
		<option>ගෑස්</option>
		<option>මස්/මාළු</option>
	</select><br/>
	
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
<?php
// Include the database configuration file
include 'config.php';

// Get images from the database
$query = $db->query("SELECT * FROM item ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

<?php
// Include the database configuration file
include 'config.php';

// Get images from the database
$query2 = $db->query("SELECT * FROM catagory");

if($query2->num_rows > 0){
    while($row = $query2->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
	<h1><?php echo $row['name']; ?></h1>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

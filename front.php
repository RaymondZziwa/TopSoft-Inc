<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Program</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
	<h1 style="text-align: center"><strong>TopSoft Inc.</strong></h1>
	<div class="table-responsive">
	<table class="table table-hover" width="800px" border="2" style="max-width: none">
  <tbody>
    <tr>
      <th scope="col">Id</th>
		<th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Staff Status</th>
      <th scope="col">Designation</th>
      <th scope="col">Role</th>
      <th scope="col">Time Spent Spent</th>
    </tr>
	<?php
		$db = new SQLITE3('TopSoft Inc.db');
		
		$results = $db->query("SELECT * FROM employees");
	?>
	<?php
		while($row = $results->fetchArray()){?>
		<?php echo "<tr><td>{$row['employee_Id']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td></tr>\n";?>
	<?php }?>
	  <?php
	  	$ends = $db->query("SELECT * FROM designations");
	  ?>
	  <?php
	  	while($soft = $ends->fetchArray()){?>
	  		<?php echo "<tr><td>{$soft['designations']}</td></tr>";?>
	  <?php }?>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script>
		$('#orderModal').on('shown.bs.modal', function () {
  		$('#myInput').trigger('focus')
			})
	</script>
</body>
</html>

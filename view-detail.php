<?php 
  $connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
  mysql_select_db("final", $connect) or die("Database not found!");
  mysql_query("SET NAMES 'utf8'");
  $id = $_GET["id"];
  $query = mysql_query("select * from tour where id = ".$id, $connect);
  $row = mysql_fetch_array($query);

	$query1 = mysql_query("select * from tour limit 5", $connect);
  $row1 = mysql_fetch_array($query1);


  $name = "";
  $email = "";
  $phone = "";
  $num_member = "";
  $date_start = "";
  $request = "";
  $id_tour = $id;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"])) { $name = $_POST['name']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["phone"])) { $phone = $_POST['phone']; }
    if(isset($_POST["num_member"])) { $num_member = $_POST['num_member']; }
    if(isset($_POST["date_start"])) { $date_start = $_POST['date_start']; }
    if(isset($_POST["request"])) { $request = $_POST['request']; }
    
    if ($name!="" && $email!="" && $phone!="" && $date_start!="") {
        $query_insert = mysql_query("INSERT INTO book_tour (name, email, phone, num_member, date_start, request, id_tour) VALUES ('$name', '$email', '$phone', '$num_member', '$date_start', '$request', '$id_tour')", $connect);
    } 
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css4/bootstrap.min.css">
    <link rel="stylesheet" href="css3/bootstrap.min.css">
	  <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="css/font-family.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/post.css">
    <script src="js3/jquery.min.js"></script>
    <script src="js3/bootstrap.min.js"></script>
    <script src="js3/popper.min.js"></script>
    <script src="js4/bootstrap.min.js"></script>
</head>
<body>
	<!-- hearder -->
	<?php include('components/header.php') ?>

	<!-- image -->
	<div class="page-title">
		<img src="<?php echo $row['slide_thumb'] ?>" class="img-fluid" alt="Responsive image" style="width:100%">
	</div>

	<!-- content -->
	    <div class="row content">
        <div class="leftcolumn">
            <div class="card">
                <h2 style="text-align:center"><b><?php echo $row['title'] ?></b></h2><br><br>
								<h5><b>HÀNH TRÌNH</b></h5><p><?php echo $row['journey'] ?></p>
								<h5><b>GIÁ VÉ   </b></h5><p><?php echo $row['new_price'] ?></p>
								<h5><b>KHÁM PHÁ  </b></h5><p><?php echo $row['content'] ?></p>
						</div>
        </div>
        <div class="rightcolumn">
					<?php while($row1 = mysql_fetch_array($query1)) {?> 
            <div class="card card-list">
								<a href="view-detail.php?id=<?php echo $row1['id'] ?>"><h5><?php echo $row1['title'] ?></h5></a>
						</div>
					<?php } ?>
        </div>
    	</div>

	<!-- footer -->
  	
    <!-- footer -->
  	<?php include('components/footer.php') ?>
</body>
</html>
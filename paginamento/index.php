<?php 
include("baseConnection.php");

if(!isset($_GET["page"])){
	header("Location: ?page=1");
}

$currentPage = intval($_GET["page"]);
$maxItems = 10;
$index = ($currentPage * $maxItems) - 10;

if(!$currentPage > 0){
	header("Location: ?page=1");
}


if(isset($_GET["order"])){
	$order = $_GET["order"];
	$query = "select * from state order by $order asc LIMIT $index, $maxItems";
}else{
	$order = "Id";
	$query = "select * from state LIMIT $index, $maxItems";
}

$dump = mysqli_query($connect, $query) or die("Dump nao realizado!");

		
?>


<!DOCTYPE html>
<html>
<head>
	<title>paginamento</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="form">
		<input type="text" name="input" autocomplete="off" spellcheck="false">
		<div>
			<a href="?page=<?php echo $currentPage - 1 . "&order=$order"; ?>"><</a>
			<a href="?page=<?php echo $currentPage + 1 . "&order=$order"; ?>">></a>
		</div>
	</div>

	<div class="table-box">
		<div id="table">
			
			<header>
				<ul>
					<?php if(!isset($order)){$order = "";} ?>
					<li>
						<a <?php 
							echo "href='?page=$currentPage&order=Name'";
							if($order == "Name") {echo " class='current-order'";}
						?>>Nome</a>
					</li>

					<li>
						<a <?php 
							echo "href='?page=$currentPage&order=Initials'";
							if($order == "Initials") {echo " class='current-order'";}
						?>>Sigla</a>
					</li>

					<li>
						<a <?php 
							echo "href='?page=$currentPage&order=Id'";
							if($order == "Id") {echo " class='current-order'";}
						?>>ID</a>
					</li>

					<li>
						<a <?php 
							echo "href='?page=$currentPage&order=Country_Id'";
							if($order == "Country_Id") {echo " class='current-order'";}
						?>>ID-País</a>
					</li>
				</ul>
			</header>

			<div id="rows">
				
				<?php 

				while ($row = mysqli_fetch_assoc($dump)) {
					echo "
					<div class='row'>
						<div id='fields-wrapper'>
							<div class='state-name field'>
								".$row['Name']."
							</div>
							<div class='state-initials field'>
								".$row['Initials']."
							</div>
							<div class='state-id field'>
								".$row['Id']."</p>
							</div>
							<div class='state-coutry-id field'>
								".$row['Country_Id']."
							</div>
						</div>
					</div>";
				}
				
				?>

			</div>

		</div>
	</div>	

</body>
</html>
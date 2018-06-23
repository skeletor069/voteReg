<?php
	include "db_connect.php";
	$query = "SELECT * FROM results_category_1";
	$res = mysqli_query($db, $query);
	$result1 = [];
	while($row = mysqli_fetch_assoc($res)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $result1[] = array(
        	"id"	=>	$row["image_id"],
        	"votes"	=>	$row["votes"]
        );
    }

    $query = "SELECT * FROM results_category_2";
	$res = mysqli_query($db, $query);
	$result2 = [];
	while($row = mysqli_fetch_assoc($res)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $result2[] = array(
        	"id"	=>	$row["gallery_id"],
        	"votes"	=>	$row["votes"]
        );
    }
?>

<center>
	<h3>Results : Category 1</h3>
	<table border="1">
		<tr>
			<th>Image ID</th>
			<th>Votes</th>
		</tr>

		<?php foreach($result1 as $result):?>

			<tr>
				<td><?php echo $result["id"];?></td>
				<td><?php echo $result["votes"];?></td>
			</tr>

		<?php endforeach;?>

	</table>
	<h3>Results : Category 2</h3>
	<table  border="1">
		<tr>
			<th>Gallery ID</th>
			<th>Votes</th>
		</tr>

		<?php foreach($result2 as $result):?>

			<tr>
				<td><?php echo $result["id"];?></td>
				<td><?php echo $result["votes"];?></td>
			</tr>

		<?php endforeach;?>

	</table>
</center>
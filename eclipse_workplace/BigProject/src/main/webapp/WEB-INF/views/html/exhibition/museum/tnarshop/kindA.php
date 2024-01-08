<?php
include("db.php");
$sql="SELECT * FROM item WHERE item_kind = 'A'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {	
        echo "<div class='col-sm-6 col-md-4 col-lg-3 card'>";
        echo "<div style='height:90%; text-align: center; padding:1vw; background-color: blanchedalmond; border-radius: 1vw; box-shadow: 1vw 1vw 1.5vw rgba(0, 0, 0, 0.2);'>";
        echo "<a href='' style='text-decoration:none; color:black'>";
        echo "<img class='item' src='./image/".$row['item_url'].".jpg' alt=''>";
        echo "<p style='font-size:1.6vb;'>".$row['item_name']."</p>";
        echo "<p>NT$ ".$row['item_price']."</p></a>";
        echo "<a href='' style='width: 5rem; float: right;'><img src='./image/shopping_car.png' style='width: 2.5rem;'></a></div></div>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>

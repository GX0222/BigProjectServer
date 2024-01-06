<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        echo $row["thr_time_s"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

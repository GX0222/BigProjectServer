<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 6";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        echo $row["thr_time_n"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
include_once 'connection.php';
$sql = "DELETE FROM test WHERE tid='" . $_GET["tid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

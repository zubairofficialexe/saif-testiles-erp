<?php

$low_stock = mysqli_query(
$conn,
"SELECT * FROM weft_inventory
WHERE remaining_weight < 20"
);

$count = mysqli_num_rows($low_stock);

?>
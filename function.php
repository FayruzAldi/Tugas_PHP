<?php
function query($query) {
    global $connection;
    $result = $connection->query($query);
    
    if (!$result) {
        die("Query failed: " . $connection->error);
    }
    
    $rows = [];
    while ($row = $result->fetch_object()) {
        $rows[] = $row;
    }
    return $rows;
}
?>
<?php
include("request-postcodes.php");
if (isset($_POST["query"])) {
    $data = $_POST["query"];
    if (strlen($data)>4) {
        start($data);
    } else {
        header("HTTP/1.0 404 Not Found");
    }
}
?>
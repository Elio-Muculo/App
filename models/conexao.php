<?php
header("content_type: text/html;charset=utf-8");
$connect = mysqli_connect("localhost", "root", "", "TAF");
mysqli_set_charset($connect, "utf-8");

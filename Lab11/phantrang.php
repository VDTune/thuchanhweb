<?php
    $conn = mysqli_connect("localhost","root","","bai11");

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }

    $limit = 10; //giới hạn 10 tiêu đề / trang
    $start = ($page - 1)* $limit;

    $total_title = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tintuc"));
    $total_page = $total_title/$limit;

    $query = "SELECT * FROM tintuc LIMIT ".$start.",".$limit;
    $result = mysqli_query($conn, $query);
    echo "<div class=\"title\">";
    while($row = mysqli_fetch_array($result)){
	    echo '<a href="#">'.$row['id'].'. '.$row['title'].'</a><br />';
    }
    echo "</div>";
    echo "<div class=\"pagination\">";
    for($i = 1; $i <= $total_page; $i++){
	    echo '<a href="phantrang.php?page='.$i.'">'.$i.'</a> | ';
    }
    echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>


<?php
	$product_description = filter_input(INPUT_POST, 'product_description');
	$list_price = filter_input(INPUT_POST, 'list_price');
	$discount_percent = filter_input(INPUT_POST, 'discount_percent');
	
        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;
        
        $list_price_f = "$".number_format($list_price, 2);
        $discount_percent_f = $discount_percent."%";
        $discount_f = "$".number_format($discount, 2);
        $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tính chiết khấu sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Tính chiết khấu sản phẩm</h1>

        <label>Mô tả sản phẩm:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>Danh sách giá:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Giảm giá tiêu chuẩn:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Số tiền chiết khấu:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Giảm giá:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style02.css">
</head>

<body>
    <div class="container">
        <?php
            require_once 'lib/data.php';
        ?>

        <?php foreach($arrProduct as $p): ?>
        <div class="sanpham">
            <div class="hinhsp">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="thongtin">
                <h2><?php echo $p['name']?></h2>
                <p>
                    Giảm ngay 2 triệu (không áp dụng đồng thời Thu cũ đổi mới)
                </p>
                <p>Đổi máy cũ lên đời A9 tiết kiệm đến 12.000.000đ (áp dụng từ 1/2 - 28/2)</p>
                <p class="khuyenmai">Khuyến mãi</p>
                <p>Cơ hội trúng 100 bao lì xì trị giá 2 tỷ đồng Xem chi tiết</p>
            </div>
            <div class="tensanpham">
                <p><?=$p['name']?></p>
            </div>
            <div class="dongia">
                <p><?= number_format($p['price'])?> VND</p>
            </div>
            <div class="dongia">
                <p><?= number_format($p['price'], 0, ',', '.')?> VND</p>
            </div>
        </div>
        <?php endforeach?>
    </div>
</body>

</html> 
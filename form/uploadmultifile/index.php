<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="xuly.php" method="post" enctype="multipart/form-data">
        <input type="file" name='images[]' multiple>
        <input type="text" name='txtname[]' >
        <input type="text" name='txtname[]' >
        <button>Upload</button>
    </form>
</body>
</html>
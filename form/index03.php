<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h2>Form</h2>
                <form action="xulyform.php" method="POST">
                    <div class="form-group row">
                        <label class="col-4">
                            Số a:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="txtSoa" placeholder="Nhập số a" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">
                            Số b:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="txtSob" placeholder="Nhập số b">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Phép tính:</label>
                        <div class="col-8">
                            <select class="form-control" name="course">
                                <option value="+">Cộng</option>
                                <option value="-">Trừ</option>
                                <option value="*">Nhân</option>
                                <option value="/">Chia</option>
                                <option value="%">Chia dư</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>

                    <div class="form-group row">
                        <label class="col-4">
                            Kết quả:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="txtKetqua" placeholder="Kết quả" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
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
    <?php
        // if(isset($_POST['btnSubmit'])){
        //     $a = $_POST['txtSoa'];
        //     $b = $_POST['txtSob'];

        //     echo $a; 
        //     echo "<br>";
        //     echo $b;
        // }
        // else{
        //     print_r($_POST);
        //     echo 'chua khoi tao $_POST["btnSubmit"]';
        // }

        if(!empty($_POST)){
            print_r($_POST);
        }
        else{
            echo 'Mang $_POST dang rong';
        }
        ?>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h2>Form</h2>
                <form method="POST">
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
                            <select class="form-control" name="pheptinh">
                                <option value="+">Cộng</option>
                                <option value="-">Trừ</option>
                                <option value="*">Nhân</option>
                                <option value="/">Chia</option>
                                <option value="%">Chia dư</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Send"/>
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
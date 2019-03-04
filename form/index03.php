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
        $pt = '*';
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
        // $kq = '';
        if(!empty($_POST)){
            $a = $_POST['txtSoa'];
            $b = $_POST['txtSob'];
            $pt = $_POST['pheptinh'];
            if($pt == '+'){
                $kq = $a+$b;
            }
            elseif($pt=='-'){
                $kq = $a-$b;
            }
            elseif($pt=='*'){
                $kq = $a*$b;
            }
            elseif($pt=='/'){
                $kq = $a/$b;
            }
            else{
                $kq = $a%$b;
            }
            // echo $kq;
        }

        
        // isset($kq) ? $kq : 0;
        // isset($pt) && $pt=='*' ? 'selected' : '';
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
                            <input value="<?=isset($a) ? $a : ''?>" class="form-control" type="text" name="txtSoa" placeholder="Nhập số a" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">
                            Số b:
                        </label>
                        <div class="col-8">
                            <input value="<?=isset($b)?$b:''?>" class="form-control" type="text" name="txtSob" placeholder="Nhập số b">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Phép tính:</label>
                        <div class="col-8">
                            <select class="form-control" name="pheptinh">
                                <option <?=$pt=='+'?'selected':''?> value="+">Cộng</option>
                                <option <?=$pt=='-'?'selected':''?> value="-">Trừ</option>
                                <option <?=$pt=='*'?'selected':''?> value="*">Nhân</option>
                                <option <?=$pt=='/'?'selected':''?> value="/">Chia</option>
                                <option <?=$pt=='%'?'selected':''?> value="%">Chia dư</option>
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
                            <input class="form-control" type="text" name="txtKetqua" placeholder="Kết quả" readonly value="<?=isset($kq) ? $kq : ''?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
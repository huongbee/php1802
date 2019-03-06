<?php
// echo date_default_timezone_get();
// die;



$file = $_FILES['avatar'];  // return Array

$fileName = $file['name'];  //get file name in line 3


$file['size'] ; //byte
//3Mb -> 3*1024*1024 byte;
// 8 bit = byte 
// 1024 byte = 1kb 
// 1024 kb = 1mb 
// tb
$ext =  pathinfo($fileName,PATHINFO_EXTENSION); 
$arrExt = ['png','jpg','gif','jpeg']; // cac item duoc cho phep

if(in_array($ext,$arrExt)){

    if($file['size'] < 100*1024){ // < 100kb
        // $newName = rand(10000,999999).$fileName;  //123456.png

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $newName = date('Y-m-d-H-i-s.').$ext;
        move_uploaded_file($file['tmp_name'],"avatar-user/$newName");
        echo 'thanh cong';
    }
    else{
        echo 'File too large';
    }
}
else{
    echo 'File not allow';
}


// move_uploaded_file($file['tmp_name'],'avatar-user/a.png');
// print_r($file);
// echo $name;



/**
 * kiem tra file type // png, jpg, gif, jpeg 
 * kiem tra file size // 100kb
 * rename file
 * 
 */


?>
<?php
$files = $_FILES['images'];
// print_r($files);
// die;

// foreach($files['tmp_name'] as $key=>$tmp){
//     $name = $files['name'][$key];
//     move_uploaded_file($tmp,"hinhanh/$name");
// }

//kiem tra file size
foreach($files['size'] as $key=>$size){
    if($size > 100*1024){ // <=100kb
        $name = $files['name'][$key];
        exit("File $name too large");
        // return;
    }
}


for($i = 0; $i < count($files['name']); $i++){
    $tmp = $files['tmp_name'][$i];
    $newName = time().$files['name'][$i];
    $destination = 'hinhanh/'.$newName;
    move_uploaded_file($tmp,$destination);
}

// echo 'thanh cong';

/*
$img = [
    0 => [
        'name'=>'favicon.ico',
        'type'=>'ico',
        'tmp_name'=>'/Applications/XAMPP/xamppfiles/temp/phpuyLg0h'
    ],
    1 => [
        'name'=>'favicon.ico',
        'type'=>'ico',
        'tmp_name'=>'/Applications/XAMPP/xamppfiles/temp/phpuyLg0h'
    ]
];

foreach($img as $hinhanh){
    $path = "hinhanh/$hinhanh[name]";
    move_uploaded_file($hinhanh['tmp_name'],$path);
}
*/
/**
 * rollback all if error
 * kiem tra file type // png, jpg, gif, jpeg 
 * kiem tra file size // 100kb
 * rename file
 * 
 */



// unlink('https://cdn.tgdd.vn/Products/Images/42/192003/samsung-galaxy-a9-2018-blue-400x400.jpg');

?>
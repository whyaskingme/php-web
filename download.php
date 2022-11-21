<?php
if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
    header('Content-Disposition: attachment; filename="Logo UNTAR Universitas Tarumanegara.png"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/Logo UNTAR Universitas Tarumanegara.png');
    exit();
}else{
    echo "Invalid Key"; 
}
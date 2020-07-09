<?php

session_start();
session_regenerate_id(true); // 合言葉を変える
if(isset($_SESSION['login'])==false)
{
    print 'ログインされていません<br>';
    print'<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
}

// 参照

if(isset($_POST['disp']) == true) {

    if(isset($_POST['staffcode'])==false)
    {
        header('location:staff_ng.php');
        exit();
    }
    $staff_code = $_POST['staffcode'];
    header('location:staff_disp.php?staffcode='.$staff_code);
    exit();
}

// 追加

if(isset($_POST['add']) == true) {
    
    header('location:add/staff_add.php');
    exit();
    
}

// 修正

if(isset($_POST['edit']) == true) {

    if(isset($_POST['staffcode'])==false)
    {
        header('location:staff_ng.php');
        exit();
    }
    $staff_code = $_POST['staffcode'];
    header('location:edit/staff_edit.php?staffcode='.$staff_code);
    exit();
}

// 削除

if(isset($_POST['delete']) == true) {

    if(isset($_POST['staffcode'])==false)
    {
        header('location:staff_ng.php');
        exit();
    }
    $staff_code = $_POST['staffcode'];
    header('location:delete/staff_delete.php?staffcode='.$staff_code);
    exit();
    
}



?>
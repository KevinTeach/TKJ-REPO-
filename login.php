<?php
session_start();

//list user yang valid
//selain user ini tidak bisa login.
$list_user = [
    [
        'usernames' => 'admin',
        'passwords' => 'adminTKJ'
    ]
];


//dapatkan data user dari form
$user = [
    'usernames' => $_POST['usernames'],
    'passwords' => $_POST['passwords'],
];

//cocokan data user dengan list user yang valid.
//misalnya pakai looping saja.

$not_found = false;

foreach ($list_user as $key => $registered_user) {

    //login success
    if ($registered_user['usernames'] == $user['usernames']) {

        if ($registered_user['passwords'] == $user['passwords']) {

            $_SESSION['login'] = true;
            $_SESSION['usernames'] =  $user['usernames'];
            $_SESSION['message']  = 'Berhasil login ke dalam sistem.';

            header("Location: admin/daftarsiswa.php");
            break;
        } else {
            $_SESSION['error'] = 'Password anda salah';
            $not_found = true;
        }
    } else {
        $_SESSION['error'] = 'Password anda salah';
    }
}
if ($not_found == true) {
    header("Location: ../admin/index.php");
}
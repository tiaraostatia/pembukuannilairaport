<?php
include 'db/koneksi.php';
session_start(); // mulai sesi

//cek apakah penggunasudah login, jika ya,redirect ke halaman lain
if (isset($_SESSION['user_id'])) {
    header("location: login.php"); //Ganti dengan halaman setelah login 
    exit();
}
//cek apakah form login telah di_sumbit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ambil nilai dari form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    echo $username;
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    echo $query;
    $result = $koneksi->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
        exit();
    } else {

        // header("location: index.php");
    }
    //tutup koneksi
    $koneksi->close();
}
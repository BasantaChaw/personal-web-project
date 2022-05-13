<?php
$server_name = 'localhost';
$user = 'root';
$password = '';
$database = 'personaldata';
$conn = mysqli_connect($server_name, $user, $password, $database);
if (isset($_POST['insert'])) {
    $first_name = $_POST['first'];
    $last_name = $_POST['last'];
    $user_name = $_POST['user'];
    $gmail = $_POST['gmail'];
    $pass = $_POST['password'];
    if (!$conn) {
        print("<script>alert('Unsuccessfully !');</script>");
    } else {
        $sql = "insert into adminrecord(user_name,first_name,last_name,gmail,pass)values('$user_name','$first_name','$last_name','$gmail','$pass')";
        if (mysqli_query($conn, $sql)) {
            print("<script> window.location.href = 'http://localhost/page/login.php';</script>");
            print("<script> alert('Successfully sumbit !')</scrip>)");
        } else {
            print("<script> alert('Unsuccessfully sumbit !')</scrip>)");
            print("<script> window.location.href = 'http://localhost/page/registration.php';</script>");
        }
    }
    mysqli_close($conn);
}
?>
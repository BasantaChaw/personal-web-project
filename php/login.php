<?php
$server_name='localhost';
$user='root';
$password='';
$database='personaldata';
$conn=mysqli_connect($server_name,$user,$password,$database);

if(isset($_POST['submiting'])){

   $user=$_POST['user'];
   $pass=$_POST['pass'];
    if(!$conn){
        print("<script> alert('Unsuccessfully Connection !')");
    }else{
        $sql="select user,pass from adminrecord where user='$user' AND pass='$pass'";
        $result=mysqli_query($conn,$sql) or die("<script> alert('Query Invalid !')</script>");
        if(mysqli_num_rows($result)>0){

          print("<script> window.location.href='http://localhost/dream/account.php';</script>");
          print("<script>alert('Successfully !');</script>");
         
        }else{
            print("<script>alert('User && Password are Invalid !');</script>");
            print("<script> window.location.href = 'http://localhost/page/login.php';</script>");
        }
    }
    mysqli_close($conn);
}
?>
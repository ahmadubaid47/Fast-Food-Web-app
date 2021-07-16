<?

session_start();

$con =mysqli_connect('localhost','root','#Ali12');
mysqli_select_db($conn,'signup');

$name=$_POST['user'];
$pass=$_POST['password'];
$Name=$_POST['name'];
$mail=$_POST['e_mail'];
$cntct=$_POST['contact_no'];
$addrs=$_POST['addrs'];

$="select * from sign_in where name='$name'";
$result=$mysqli_query($con,$s);
$num=$mysqli_num_rows($result);

if($num==1){

    echo"username already taken";
}else{
    $reg="insert into  sign_in where (name,addrs,contact_no,e_mail,user,password) values ('$Name','$addrs','$cntct','$mail','$name','$pass')"
$mysqli_query($con,$reg);
echo"registration Successfull!!!";


}


?>
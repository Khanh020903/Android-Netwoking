<?php
//Khai bao cac bien
$server="localhost"; $u="id10840443_user"; $p="12345678Aa@123"; $db="id10840443_springbootdb";
//tao ket noi voi CSDL
$con=new mysqli($server,$u,$p,$db);
//kiem tra ket noi, neu co loi thi thong bao
if($con->connect_errno){
die("Loi ket noi: ".$con->connect_errno);
}
//chuoi insert
$sql="insert into MyGuests (firstname,lastname,email)
values ('Khanh','Nguyen','k@gmail.com')";
//thuc hien insert
if($con->query($sql)===TRUE){
echo "Insert thanh cong";
}
else{
echo "Loi: ".$con->error;
}
?>
 <?php

 emptyinputSignup($name,$email,$user,$pwd,$address){
$result;
if(empty($name) || empty($email) || empty($user) || empty($pwd) || empty($address)){

   function invalidUser($user) {
   $result;
   if(!filter_var($user, FILTER_VALIDATE_USER)){$result = true;
   }
   else {
   $result = false;
   }
   }
}
   function invalidEmail($email) {
   $result;
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){$result = true;
   }
   else {
   $result = false;
   }
   return $result;
}
    function     createUser($conn, $name, $email, $user, $pwd, $address){
    $sql = "INSERT INTO users (usersEmail, usersName, usersBirth, usersAddress, usersUID,usersPass) VALUES(?,?,?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../register.html?error=stmtfailed");
    exit();
}
$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, ssssss, $email, $name ,$user, $hashedpwdpwd,$address);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../register.html?error=none");
exit();
 }
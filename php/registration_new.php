<!doctype html>

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="login";

try{
$conn = mysqli_connect($servername,$username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$accountNumber=$_POST['accountNumber'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$register_query = "INSERT INTO `user`(`fname`,`lname`,`accountNumber`,`address`,`gender`,`phone`,`email`,`username`,`password`) VALUES ('$fname','$lname','$accountNumber','$address','$gender','$phone','$email','$username','$password')";

try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo'<script type="text/javascript">alert("you are enrolled successfully")</script>';

?>

<script type="text/javascript">
    window.location.href = "login_new.php";

</script>

<?php        
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Enroll | Nation's Bank Online Banking</title>
    <link rel="stylesheet" href="../css/registrationStyle.css" type="text/css">
</head>

<body>
    <div class="imageBox"></div>
    <section id="content1">
        <div class="mainContainer">

            <div class="enrollmentInformation">
                <h1>Welcome to Nation's Bank Online Banking Enrollment</h1>
                <ul>
                    <li>
                        <p>If you are not enrolled with us, you are in corect place to enroll.</p>
                    </li>
                    <li>
                        <p>Look our enrollment tutorial before you enrolling for further details if you wish.</p>
                    </li>
                    <li>
                        <p>Always provide your correct information. Unless you will not be able to get our services if your provided details are not match with our database(As We have your account number).</p>
                    </li>
                    <li>
                        <p>Never share your username & password with anyone.</p>
                    </li>
                    <li>
                        <p>Refrain from using computers that are open to public for this service.</p>
                    </li>
                    <li>
                        <p>Do not disclose account number(s) and credit card details when responding to emails of unknown parties. If you have already disclosed such information, please inform the bank immediately.</p>
                    </li>
                    <li>
                        <p>Do not enter login credentials in any pop up window before & after enrollment.</p>
                    </li>
                    <li>
                        <p>If you have any problems with the enrollment you can contact us anytime.</p>
                    </li>
                    <li>
                        <p>After enrollment you are an user of our Online Banking System.</p>
                    </li>
                </ul>
            </div>

            <div class="mainHeader">

                <h2>Enroll if you are not...</h2>

                <form action="registration_new.php" method="post">

                    <div class="inputBox">
                        <input type="text" name="fname" required>
                        <label>First Name</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="lname" required>
                        <label>Last Name</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="accountNumber" required>
                        <label>Account Number</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="address" required>
                        <label>Address</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="gender" required>
                        <label>Gender</label>
                    </div>

                    <div class="inputBox">
                        <input type="tel" name="phone" required>
                        <label>Contact Number</label>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="email" required>
                        <label>Email Address</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="submit" value="SignUp For Enrollment">
                    </div>

                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="mainContainer">
            <h1>Follow us on</h1>
            <img src="../img/icon_fb.png">
            <img src="../img/icon_twitter.png">
            <img src="../img/icon_instagram.png">
            <div class="footerList">
                <p>Deposit products offered by Nation's Bank National Association. Member FDIC Nation's Bank is not responsible for and does not guarantee the products, services or performance of Sri Lanka Bancorp Investments</p>
                <p>Investment products and services are available through Central Bank of Sri Lanka, the marketing name for Natons's Bank, member FINRA and SIPC, an investment adviser and a brokerage subsidiary of Central Bank of Sri Lanka and affiliate of Nation's Bank.</p>
            </div>
            <p>&copy; 2019 Nation's Bank. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>

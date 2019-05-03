<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="login";
$user='';
$pass='';

$conn=mysqli_connect($servername,$username,$password,$dbname);
echo "connection";

if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    
    $query="SELECT * FROM user WHERE username = '{$user}' AND password = '{$pass}'  " ;
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fname'] = $row['fname'];
        echo '<script>alert("Login Successfully!")</script>';
        echo '<script>window.location.href = "log_in_homepage.php"</script>';
    }else{
        echo '<script>alert("Login Error!")</script>';
        echo '<script>window.location.href = "login_new.php"</script>';
    }
}
?>


<html>

<head>
    <title>Log in | Nation's Bank Online Banking</title>
    <link rel="stylesheet" href="../css/loginStyle.css" type="text/css">
</head>

<body>

    <div class="imageBox"></div>
    <section id="content1">
        <div class="mainContainer">
            <div class="loginInformation">
                <h1>Explore new banking Experience</h1>
                <ul>
                    <li>
                        <p>If you are not enrolled with us use the link for enrollment.</p>
                    </li>
                    <li>
                        <p>Look our enrollment tutorial before you enrolling.</p>
                    </li>
                    <li>
                        <p>Log in using your username and password which you used during enrollment.</p>
                    </li>
                    <li>
                        <p>If you forget your password or username contact with us with your hotline.</p>
                    </li>
                    <li>
                        <p>We are providing 24*7 assistance to you as customers are our main priority.</p>
                    </li>
                    <li>
                        <p>After logged in you can access all of our services.</p>
                    </li>
                </ul>
            </div>

            <div class="mainHeader">
                <h2>Log in if you are a user...</h2>

                <form action="login_new.php" method="POST">


                    <div class="inputBox">
                        <input type="text" name="user" required>
                        <label>Username</label>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="pass" required>
                        <label>Password</label>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="submit">
                    </div>

                    <p>Not a user?<a href="registration_new.php">Enroll from here</a></p>

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

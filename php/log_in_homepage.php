<?php
session_start(); 
if (!isset($_SESSION['fname'])) {
    echo '<script>alert("You must login!")</script>';
    echo '<script>window.location.href = "login_new.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking | Nation's Bank</title>
    <link rel="stylesheet" href="../css/log_in_homepage.css" type="text/css">
</head>

<body>
    <header>
        <div class="container-header">
            <div id="brand">
                <h1><span class="highlight">Nation's Bank</span> | Internet Banking</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="About Us.html">About Us</a></li>
                    <li><a href="Locations.html">Locations</a></li>
                    <li><a href="Support.html">Support</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
        <div class="container">
            <h4>Nation's Bank Online Banking</h4>
            <h1>Imagine what your home equity could do for you.</h1>
            <a href="#">Hi <?php echo $_SESSION['fname']; ?> ! You are logged in...</a>
            <a href="logout.php">Logout</a>
        </div>
    </section>

    <section id="showcase">
        <div class="container">
            <h1>Easily bank on-the-go with Nation's bank</h1>

            <p>There are so many ways to manage your acount online.... We may never see you in a branch.</p>
        </div>
    </section>

    <section id="showcase1">
        <div class="container">
            <h1>Select an option to engage in...</h1>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="../img/e-statements-hover.png">
                <a href="#">Account Summary</a>
            </div>
            <div class="box">
                <img src="../img/checking_hover_new.png">
                <a href="#">Account Details</a>
            </div>
            <div class="box">
                <img src="../img/mobile-deposit-hover.png">
                <a href="#">Transfer Services</a>
            </div>
            <div class="box">
                <img src="../img/investments-hover.png">
                <a href="#">Payment Services</a>
            </div>
            <div class="box">
                <img src="../img/online-banking-hover.png">
                <a href="#">Online Account Settings</a>
            </div>
        </div>
    </section>

    <section id="showcase9">
        <div class="container">
            <h1>Place for BEST Online Banking Experience</h1>
            <p>Bill Pay | Transfers | Account alerts | Paperless documents | High Security</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <h1>Follow us on</h1>
            <img src="../img/icon_fb.png">
            <img src="../img/icon_twitter.png">
            <img src="../img/icon_instagram.png">
            <div class="footerList">
                <ol>
                    <li>Eligibility requirements and restrictions apply. Fees apply to outbound external transfers. Please see the Online and Mobile Financial Services Agreement and Fee Guide for more information.</li>
                    <li>Under the Bill Pay 'on-time' guarantee, Nation's Bank will bear the responsibility for any late-payment-related charges should an online bill payment arrive after its due date as long as you scheduled the transaction in accordance with the Nation's Bank Personal Internet Banking Terms and Conditions. This guarantee does not apply to business clients using Bill Pay.</li>
                    <li>Canceled checks will be retained for six years. A reconstruction fee may apply if you request a total checking reconstruction (copies of all checks and/or statements) for one or more checking statements. Check images are available for 365 days from the day the check posts to the account. Additional restrictions may apply.</li>
                    <li>Data rate charges from your service provider may apply. Nation's Bank Sri Lanka, is not responsible for these charges.</li>
                    <li>This tool is a personal financial management service that allows customers to consolidate and manage their financial information by consolidating it in one place on Personal Internet Banking.</li>
                </ol>
            </div>
            <p>&copy; 2019 Nation's Bank. All Rights Reserved.</p>
        </div>
    </footer>


</body>

</html>

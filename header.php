<?PHP
# Memulakan fungsi Session
session_start();
date_default_timezone_set("Asia/Kuala_Lumpur");
#----------------- Bahagian login & logout Session ------------

$namafail = basename($_SERVER['PHP_SELF']);

if(($namafail !='registration.php' and $namafail !='login.php' and $namafail !='booking_process.php'and
$namafail !='rooms.php' and $namafail !='booking_list.php' and 
$namafail !='booking_payment.php') and empty($_SESSION['Username']))
{
    die("<script>alert('Please Login');window.location.href='logout.php'</script>");
}
?>
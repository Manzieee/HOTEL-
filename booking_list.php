
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Sri Manja Boutique Hotel Main Page</title>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/2b4a81cb48.js" crossorigin="anonymous"></script>
<script src="tawkto.js"></script>
</head>
<body>
<section class="header">
    <nav>
        <a href="index.html"><img src="images/hotel logo.jpg"  style="width:300px;height:300px;" ></a>
        <div class="nav-links">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about us.html">ABOUT US</a></li>
                <li><a href="rooms.php">ROOM & SUITES</a></li>
                <li><a href="dinner.html">DINNER</a></li>
                <li><a href="facilities.html">FACILIIES</a></li>
                <li><a href="login chosee.html">LOGIN</a></li>
                <li><a href="sign up chosee.html">SIGN UP</a></li>
                <li><a href="contact us.html">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <div class="text-box">
        <h1>
            Sri Manja Boutique Hotel
        </h1>
        <p></p>
        <a href="about us.html" class="more">Explore More</a>
        
    </div>
</section>
</body>
</html>
<?PHP 

# memanggil fail header.php
include('header.php'); 

# menyemak kewujudan data POST
if(!empty($_POST))
{
    # memanggil fail connection.php
    include('db.php');
    
    # mengambil data POST
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];
    
    # data validation tarikh masuk lebih kecil dari tarikh keluar
    if($check_in>=$check_out)
    {
        die("<script>alert('Check-in is bigger than check-out');
        window.history.back();</script>");
    }
    
    # mengira bilangan hari
    $start = strtotime($check_in);
    $end = strtotime($check_out);
    $jumlah_hari = ceil(abs($end - $start) / 86400);

    # arahan sql untuk memilih homestay yang masih kosong pada tarikh dipilih
    $arahan_SQL_cari= "select* from hotel_room,room_type
    where 
    hotel_room.room_no not in(select room_no from booking where 
    check_out >='$check_in')
    and hotel_room.id_type=room_type.id_type";

    # melaksanakan arahan memilih
    $laksana_arahan_cari=mysqli_query($con,$arahan_SQL_cari);

    # jika bilangan row yang ditemui lebih kecil dari 1. bermaksud tiada kekosongan
    if(mysqli_num_rows($laksana_arahan_cari)<1)
    {
        die ("<script>alert('Sorry. There are no availabilities on the selected date'); 
        window.location.href='index.html';</script>");
    }

    echo"<table>";

    # pembolehubah rekod mengambil data yang di pilih baris demi baris
    while ($rekod=mysqli_fetch_array($laksana_arahan_cari))
    {
        # mengumpukan data yang diambil kepada tatasusunan
        $data_get= array(
            'room_no'=>$rekod['room_no'],
            'room_size'=>$rekod['room_size'],
            'bed'=>$rekod['bed'],
            'type'=>$rekod['type'],
            'price'=>$rekod['price'],
            'picture'=>$rekod['picture'],
            'check_in'=>$check_in,
            'check_out'=>$check_out,
            'jumlah_hari'=>$jumlah_hari
        );
        # memaparkan data yang diambil baris demi baris
        echo "

		<tr>
            <th >
            <b>Room Type :</b>".$rekod['type']."<br>
            <b>Room Number :</b>".$rekod['room_no']."<br>
            <b>Room Size :</b>".$rekod['room_size']."<br>
            <b>Bed:</b>".$rekod['bed']."<br>
            <b>Price Per Night :</b>RM ".$rekod['price']."<br>
            <b>Total Days :</b>".$jumlah_hari." Days<br>
            <b>Total Payment :</b>RM ".$rekod['price']*$jumlah_hari."<br>
            <button><a href='booking_payment.php?".http_build_query($data_get)."'>BOOK</a></button>
            </th>
			<td>
            <img src='images/".$rekod['picture']."' width='40%'>
			</td>
            
        </tr>";
    }
    echo "</table>";
}

?>


<style>
table,tr, th{
    text-align: center;
}
body{
    background-color: #D39DDC;
}

button {padding: 14px 40px;
    border-radius: 12px;
    transition-duration: 0.4s;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    background-color: #F3B3D6;
    border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
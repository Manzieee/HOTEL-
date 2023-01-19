<!--Memanggil fail header-->
<?PHP 
include('header.php'); 
$hari_ini=date("Y-m-d"); 
$esok=date('Y-m-d', strtotime(' +1 day'));
?>



<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Sri Manja Boutique Hotel Main Page</title>
<link rel="stylesheet" href="style.css">
<script src="store.js" async></script>
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
                <?PHP if(empty($_SESSION["Username"])){  ?>
                    <li><a class="dropdown-item"  href="login chosee.html">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Login 
                    </a></li>
                    
                    <?PHP } else {?>
                    <li><a class="dropdown-item" href="logout.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a></li>
                    <?PHP  }?>
                <li><a href="sign up chosee.html">SIGN UP</a></li>
                <li><a href="contact us.html">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    <div class = "book">
    <form action='booking_list.php' method='POST' class = "book-form">
        <div class = "form-item">
            <label for = "checkin-date">Check In Date: </label>
            <input type = "date" id = "chekin-date" name='check_in' value='<?PHP echo $hari_ini;?>' min='<?PHP echo $hari_ini;?>'>
        </div>
        <div class = "form-item">
            <label for = "checkout-date">Check Out Date: </label>
            <input type = "date" id = "chekout-date" name='check_out' value='<?PHP echo $esok;?>' min='<?PHP echo $esok;?>'>
        </div>
        <div class = "form-item">
            <label for = "adult">Adults: </label>
            <input type = "number" min = "1" value = "1" id = "adult" name='adult'>
        </div>
        <div class = "form-item">
            <label for = "children">Children: </label>
            <input type = "number" min = "1" value = "1" id = "children" name='children'>
        </div>
        <div class = "form-item">
            <label for = "rooms">Rooms: </label>
            <input type = "number" min = "1" value = "1" id = "rooms" name='room'>
        </div>
        <div class = "form-item">
            <input type = "submit" class = "btn" value = "Check Availability">
        </div>
    </form>
</div>


    <h1 class="band-name band-name-large">ROOM & SUITES</h1>
</header>
<section class="container content-section">
    <h2 class="section-header"></h2>
    <div class="shop-items">
        <div class="shop-item">
            <span class="shop-item-title" style="color:white">SUPERIOR TWIN ROOM</span>
            <img class="shop-item-image" src="images/st.jpg" style="width:300px;height:300px;">
            <div class="shop-item-details">
                
               
            </div>
        </div>
        <div class="shop-item">
            <span class="shop-item-title" style="color:white">JAPANESE-STYLE ROOM</span>
            <img class="shop-item-image" src="images/jt.jpg" style="width:300px;height:300px;">
            <div class="shop-item-details">
               
                
            </div>
        </div>
        <div class="shop-item">
            <span class="shop-item-title" style="color:white">DELUXE FAMILY ROOM</span>
            <img class="shop-item-image" src="images/DF.jpg" style="width:300px;height:300px;">
            <div class="shop-item-details">
                
                
            </div>
        </div>
        <div class="shop-item">
            <span class="shop-item-title" style="color:white">GOLDEN SUITE</span>
            <img class="shop-item-image" src="images/suite.jpg" style="width:300px;height:300px;">
            <div class="shop-item-details">
                
                
            </div>
        </div>
    </div>
</section>

            </div>
        </div>
    </div>
    <section class="container content-section">
 
        </div>
        <div class="cart-items">
        </div>
     
        
    </section>

<div class="footer">
    <div class="coll-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">About Us</a>
        <a href="#">Home Page</a>
        <a href="#">Rooms</a>
        <a href="#">Login</a>
        <a href="#">Sign Up</a>
    </div>
    <div class="coll-2">
        <h3>NEWSLETTER</h3>
        <form>
            <input type="email" placeholder="Your Email Address" required>
            <br><br>
            <button type="submit">SUBSCRIBE NOW</button>
        </form>
    </div>
    <div class="coll-3">
        <h3>CONTACT US</h3>
        <p>B2- 34 , Jalan IM7/1 <br> Bandar Indera Mahkota, Kuantan, Malaysia</p>
        <div class="social-icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-behance"></i>
        </div>   
    </div>
</div>

<style>

@import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');
@import url("https://fonts.googleapis.com/css?family=Metal+Mania");

@font-face {
    font-family: "Booter - Zero Zero";
    src: url("Fonts/Booter - Zero Zero.woff") format("woff"),
         url("Fonts/Booter - Zero Zero.woff2") format("woff2");
    font-weight: normal;
    font-style: normal;
}

.main-header {
    background-color: rgba(0, 0, 0, .6);
    background-image: url("Images/Header Background.jpg");
    background-blend-mode: multiply;
    background-size: cover;
    padding-bottom: 30px;
}

.band-name {
    text-align: center;
    margin: 0;
    font-size: 4em;
    font-family: "Booter - Zero Zero";
    font-weight: normal;
    color: white;
}

.band-name-large {
    font-size: 8em;
}

.content-section {
    margin: 1em;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
}
.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: #333;
    text-align: center;
    font-size: 2.5em;
}

.about-band-image {
    float: left;
    height: 200px;
    width: 200px;
    margin: 15px;
    border-radius: 50%;
}

.main-footer {
    background-color: #56CCF2;
    color: white;
    padding: .25em 0;
}

.main-footer-container {
    display: flex;
    align-items: center;
}

.main-footer-container ul {
    flex-grow: 1;
    text-align: end;
}

.footer-nav li {
    padding: 0 .5em;
}

.footer-nav img {
    width: 30px;
    height: 30px;
}

.btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
}

.btn-header {
    margin: .5em 15% 2em 15%;
    color: white;
    border: 2px solid #2D9CDB;
    background-color: rgba(255, 255, 255, .1);
    border-radius: 0;
    font-size: 1.5em;
    font-weight: lighter;
    padding-left: 2em;
    padding-right: 2em;
}

.btn-header:hover {
    background-color: rgba(255, 255, 255, .3);
}

.btn-play {
    display: block;
    margin: 0 auto;
    color: #2D9CDB;
    font-size: 4em;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    padding: 0;
    text-align: center;
}

.btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #2D9CDB;
}

.tour-row {
    border-bottom: 1px solid black;
    padding-bottom: 1em;
    margin-bottom: 1em;
}

.tour-row:last-child {
    border: none;
}

.tour-item {
    display: inline-block;
    padding-right: .5em;
}

.tour-date {
    color: #555;
    width: 11%;
    font-weight: bold;
}

.tour-city {
    width: 24%;
}

.tour-arena {
    width: 42%;
}

.tour-btn {
    max-width: 19%;
}

.shop-item {
    margin: 30px;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.shop-item-image {
    height: 250px;
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
}

.shop-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 45%;
}

.cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
}

.cart-quantity {
    width: 35%;
}

.cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
}

.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: #333;
    font-size: 1.1em;
}

.btn-purchase {
    display: block;
    margin: 40px auto 80px auto;
    font-size: 1.75em;
}
    *{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  box-sizing: border-box;
}

.footer{
  margin-top: 150px;
  width: 100%;
  padding: 100px 5%;
  font-family: 'Poppins', sans-serif;
  box-sizing: border-box;

  background: #333;
  color: #efefef;
  display: flex;
}

.footer div{
  text-align: center;
}

.coll-2{
    flex-grow: 2;
}
.footer div h3{
    font-weight: 300;
    margin-bottom: 30px;
    letter-spacing: 1px;
}

.coll-1 a{
    display: block;
    text-decoration: none;
    color: #efefef;
    margin-bottom: 10px;
}

form input{
    width: 400px;
    height: 45px;
    border-radius: 4px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
    outline: none;
    border: none;
}

form button{
    background: blueviolet;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 30px;
    padding: 10px 30px;
    font-size: 15px;
}

.social-icons{
    margin-top:30px;
}

.social-icons i{
    font-size: 22px;
    margin: 10px;
    cursor: pointer;
}


</style>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="with=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sri Manja Boutique Hotel Dinner Page</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<section class="header1">
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

    
    <div class="text-box">
        <h1>
            Dine With Us
        </h1>
        <p></p>
        <a href="about us.html" class="more">Explore More</a>
        
    </div>
</section>
<h1 style="text-align:center" >Our Menu</h1>
<p style="text-align:center">Enjoy the food in our hotel!</p>
  <br><br><br>

     
  <table style="width:100%">
    <tr>
      <th><img src="images/food1.jpg" style="width:300px;height: 300px;"></th>
      <th><img src="images/food2.jpg" style="width:300px;height: 300px;"></th>
      <th><img src="images/food4.jpg" style="width:300px;height: 300px;"></th>
    
    </tr>
    <tr>
      <td><h3>CHICKEN CHOP</h3></td>
      <td><h3>OMELET</h3></td>
      <td><h3>FRIED MEE</h3></td>
      
    </tr>
  
  </table>
  <br><br><br>

  <table style="width:100%">
      <tr>
        <th><img src="images/diningroom.jpg" style="width:500px;height: 300px;"></th>
        <th><img src="images/LOBY.jpeg" style="width:500px;height: 300px;"></th>
      
      </tr>
      <tr>
        <td><h3>DINING ROOM</h3><h4 style="text-align:center">Operating hours: 8am - 10pm</h4></td>
        <td><h3>FRONT VIEW OF DINING ROOM</h3><h4 style="text-align:center">Operating hours: 8am - 10pm</h4></td>
        
      </tr>
    
    </table>
    
    <table style="width:100%">
      <tr>
        <th><img src="images/food1.jpg" style="width:300px;height: 300px;"></th>
        <th><img src="images/food2.jpg" style="width:300px;height: 300px;"></th>
        <th><img src="images/food4.jpg" style="width:300px;height: 300px;"></th>
      
      </tr>
      <tr>
        <td><h3>CHICKEN CHOP</h3></td>
        <td><h3>OMELET</h3></td>
        <td><h3>FRIED MEE</h3></td>
        
      </tr>
    
    </table>
   
    <br><br><br>



        </div>
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
                  <a href="https://www.facebook.com/srimanjaboutiquehotel"><i class="fab fa-facebook"></i></a>
                  <a href="https://twitter.com/srimanjahotel"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/srimanjahotel_official/?hl=en"><i class="fab fa-instagram"></i></a>
              
              </div>   
          </div>
      </div>
<style>
  .header1{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/dinner.jpg);
    background-color:grey; 
    background-position: center;
    background-size: cover;
    position: relative;
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
      
  
                   



 

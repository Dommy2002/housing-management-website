<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>housing landing page</title>
 
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

<style>
    body{
   margin:0;
   padding:0;
  font-family: Arial, Helvetica, sans-serif;
  
}
header{
    height: 80px;
    width: 100%;
    background: blue;
    margin: 0 auto;
    border-radius: 6px;
    padding-top:0;
    z-index:1000;
    position:fixed;
}
header .nav-links ul li{
    display: inline-flex;
   justify-content: space-between;
   float: right;
}
header .nav-links ul li a{
    text-decoration: none;
    color: aliceblue;
    padding: 10px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 2px 2px 2px 2px;
}
header  .nav-links ul li a:hover{
    color: skyblue;
    font-size: 20px;
}
 
    /* Home Section */
    .home {
        position: relative;
        background-image: url('./img/house8.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: maroon;
        text-align: center;
        padding: 300px 0;
        object-fit: contain;
        height: 100vh;
    }
    .home .content {
        max-width: 800px;
        margin: 0 auto;
    }
    .home h2 {
        font-size: 48px; /* Increased font size for headline */
        margin-bottom: 30px;
        font-weight: 700; /* Bold font weight */
        text-transform: uppercase; /* Uppercase text */
    }
    .home p {
        font-size: 30px; /* Increased font size for paragraph */
        line-height: 1.6; /* Improved line height for better readability */
        margin-bottom: 40px;
        color: #f9f9f9;
    }
    .home .btn {
        display: inline-block;
        margin-right: 10px;
        padding: 12px 30px; /* Increased padding for buttons */
        font-size: 18px; /* Increased font size for buttons */
        text-decoration: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .home .btn:hover {
        background-color: #0056b3; /* Darker background color on hover */
    }



    /* Houses Section */
    .houses {
        background-color: #f9f9f9;
        padding: 100px 0;
     
    }
    .house-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .house {
        width: 300px;
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .house img {
        max-width: 100%;
        border-radius: 5px;
    }
    .house h3 {
        margin-top: 20px;
        font-size: 24px;
    }
    .house p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    /* Our Team Section */
    .ourteam {
        background-color: #fff;
        padding: 100px 0;
        height: 100vh;
    }
    .team-members {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .team-member {
        width: 200px;
        margin: 20px;
        text-align: center;
    }
    .team-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }
    .team-member h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .team-member p {
        font-size: 16px;
    }

    /* About Us Section */
    .aboutus {
        background-color: #f9f9f9;
        padding: 100px 0;
    }
    .aboutus p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    /* Contact Us Section */
    .contactus {
        background-color: #007bff;
        color: #fff;
        padding: 100px 0;
        text-align: center;
    }
    .contactus h2 {
        font-size: 36px;
        margin-bottom: 30px;
    }
    .contactus form {
        max-width: 600px;
        margin: 0 auto;
    }
    .contactus form input,
    .contactus form textarea,
    .contactus form button {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
    }
    .contactus form button {
        background-color: #fff;
        color: #007bff;
        cursor: pointer;
    }
    .contactus .contact-info {
        max-width: 600px;
        margin: 30px auto 0;
        text-align: left;
    }
    .contactus .contact-info p {
        font-size: 16px;
        margin-bottom: 10px;
    }
    .contactus .contact-info p i {
        margin-right: 10px;
    }
    .footer{
        height: 20vh;
        color: black;
        background-color: #fff;
    }
</style>
  
</head>
<body>


   <header>
    
     
        <div class="nav-links">
            <ul> 
            <li><a href="login.php">SIGN IN</a></li>
                <li><a href="#SIGN UP">SIGN UP</a></li>
                <li><a href="#contactus">CONTACT US</a></li>
                <li><a href="#aboutus">ABOUT US</a></li>
                <li><a href="#team">OUR TEAM</a></li>
                <li><a href="#houses">HOUSES</a></li>
                
                <li><a href="#home">HOME</a></li>
            </ul>
        </div>
        </header>
    <section class="home" id="home">
    <div class="content">
        <h2>Welcome to Our Housing Management System</h2>
        <p>Discover your dream home with ease and convenience.</p>
        <a href="#houses" class="btn btn-primary">View Available Houses</a>
        <a href="#aboutus" class="btn btn-secondary">Learn More About Us</a>
    </div>

    </section>
    <section class="houses" id="houses">
    <div class="container">
        <h2>Featured Houses</h2>
        <div class="house-list">
            <div class="house">
                <img src="house1.jpg" alt="House 1">
                <h3>Modern Apartment</h3>
                <p>A stunning modern apartment with panoramic views.</p>
            </div>
            <div class="house">
                <img src="./img/house7.jpeg" alt= "House 2">
                <h3>Cozy Cottage</h3>
                <p>A charming cottage nestled in the countryside.</p>
            </div>
            <div class="house">
                <img src="./img/house5.jpg" alt="House 5">
                <h3>Cozy Cottage</h3>
                <p>A charming cottage nestled in the countryside.</p>
            </div>
            <div class="house">
                <img src="house1.jpg" alt="House 1">
                <h3>Modern Apartment</h3>
                <p>A stunning modern apartment with panoramic views.</p>
            </div>
            <div class="house">
                <img src="./img/house7.jpeg" alt= "House 2">
                <h3>Cozy Cottage</h3>
                <p>A charming cottage nestled in the countryside.</p>
            </div>
            <div class="house">
                <img src="./img/house5.jpg" alt="House 5">
                <h3>Cozy Cottage</h3>
                <p>A charming cottage nestled in the countryside.</p>
            </div>
            <!-- Add more houses -->
        </div>
    </div>

    </section>
    <section class="ourteam" id="team">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="team_member1.jpg" alt="Team Member 1">
                <h3>John Doe</h3>
                <p>CEO & Founder</p>
            </div>
            <div class="team-member">
                <img src="team_member2.jpg" alt="Team Member 2">
                <h3>Jane Smith</h3>
                <p>Marketing Director</p>
            </div>
            <!-- Add more team members -->
        </div>
    </div>


    </section>

    <section class="aboutus" id="aboutus">

    <div class="container">
        <h2>About Us</h2>
        <p>At Housing Management Inc., we are dedicated to providing top-notch housing solutions to our clients. With over a decade of experience in the industry, we have helped thousands of families find their perfect homes.</p>
        <p>Our mission is to make the process of buying or renting a home as seamless and stress-free as possible. We believe in transparency, integrity, and exceptional customer service.</p>
        <p>Join us on our journey to redefine the housing experience!</p>
    </div>

    </section>
    <section class="contactus" id="contactus">

    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Reach out to us!</p>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div class="contact-info">
            <p><i class="mdi mdi-phone"></i> Phone: +123456789</p>
            <p><i class="mdi mdi-email"></i> Email: info@housingmanagement.com</p>
            <p><i class="mdi mdi-map-marker"></i> Address: 123 Main Street, City, Country</p>
        </div>
    </div>

    </section>

    <footer class= "footer">
        All Rights Reserved.
     </footer>
</body>
</html>
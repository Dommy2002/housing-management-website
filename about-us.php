<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US PAGE</title>


    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 
/* Global Styles */
 
body {
    font-family: Arial, sans-serif;
}
 
/* Header */
 
header {
    background-color: white;
    color: rgb(0, 0, 0);
    padding: 10px 0;
    position: fixed;
    width: 100%;
    z-index: 100;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}
 
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 5px auto;
    padding: 0 20px;
}
 
.logo {
    font-size: 1.5rem;
    font-weight: bold;
    border-radius: 50%;
    color: #
}
 
.nav-links {
    list-style: none;
    display: flex;
}
 
.nav-links li {
    margin-right: 20px;
}
 
.nav-links a {
    color: rgb(0, 0, 0);
    padding: 10px;
    font-weight: bold;
    text-decoration: none;
}
 
.nav-links a:hover {
    background-color: #40b736;
    border-radius: 4px;
    color: white;
}
 
/* About Section */
 
.about {
    background:linear-gradient(#1A2980,#00BFFF);
    padding: 100px 0 20px 0;
    text-align: center;
}
 
.about h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}
 
.about p {
    font-size: 1rem;
    color: #fff;
    max-width: 800px;
    margin: 0 auto;
}
 
.about-info {
    margin: 2rem 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: left;
}
 
.about-img {
    width: 20rem;
    height: 20rem;
}
 
.about-img img {
    width: 100%;
    height: 100%;
    border-radius: 5px;
    padding: 10px;
    object-fit: contain;
}
 
.about-info p {
    font-size: 1.3rem;
    margin: 0 2rem;
    text-align: justify;
}
 
button {
    border: none;
    outline: 0;
    padding: 15px 15px 15px 15px;
    margin: 2rem;
    font-size: 1rem;
    color: white;
    background-color: blueviolet;
    text-align: center;
    cursor: pointer;
    width: 15rem;
    border-radius: 4px;
}
 
button:hover {
    background-color: violet;
}
 
/* Team Section */
 
.team {
    padding: 30px 0;
    text-align: center;
}
 
.team h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}
 
.team-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}
 
.card {
    background-color: white;
    border-radius: 6px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
    width: 18rem;
    height: 25rem;
    margin-top: 10px;
}
 
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.5);
}
 
.card-img {
    width: 18rem;
    height: 12rem;
}
 
.card-img img {
    width: 100%;
    height: 100%;
    object-fit: fill;
}
 
.card-info button {
    margin: 2rem 1rem;
}
 
.card-name {
    font-size: 2rem;
    margin: 10px 0;
}
 
.card-role {
    font-size: 1rem;
    color: #888;
    margin: 5px 0;
}
 
.card-email {
    font-size: 1rem;
    color: #555;
}
 
/* Footer */
footer {
    background-color: #222;
    color: white;
    text-align: center;
    padding: 20px 0;
}
 
@media (max-width: 768px) {
    nav {
        display: block;
    }
 
    .logo {
        text-align: center;
    }
 
    .nav-links {
        margin-top: 1rem;
        justify-content: space-between;
    }
 
    .nav-links li {
        margin-right: 0;
    }
 
    .about h1 {
        font-size: 2rem;
    }
 
    .about p {
        font-size: 0.9rem;
    }
 
    .about-info {
        flex-direction: column;
        text-align: center;
    }
 
    .about-img {
        width: 60%;
        height: 60%;
        margin-bottom: 1rem;
    }
 
    .about-info p {
        margin: 1rem 2rem;
    }
 
    .about-info button {
        margin: 1rem 2rem;
        width: 10rem;
    }
 
    .team {
        margin: 0 1rem;
    }
}

</style>

</head>
<body>

    <section class="about">
        <h1>About Us</h1>
        <p style="font-weight: bold">
         <b>Kejapap! is a leading platform...<b>
          </p>
        <div class="about-info">
            <div class="about-img">
                <img src=
"./img/logo-img.png" alt="Kejapap!">
            </div>
            <div>
            <p> Kejapap! is a housing system that seeks to solve the problem of poor housing or in worst case scenarios no housing at all. <b>This is in line with Sustainable Development Goal number 11. The core aim of Kejapap! is to link potential tenants to potential house-owners.
            </p>
                <button>Read More...</button>
            </div>
        </div>
    </section>
 
    <section class="team">
        <h1>Meet Our Team</h1>
        <div class="team-cards">
           
            <!-- Cards here -->
            <!-- Card 1 -->
           
            <div class="card">
                <div class="card-img">
                    <img src=
"./img/moses-dev.png" alt="User 1">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Moses Ochieng'</h2>
                    <p class="card-role">Fullstack developer and co-founder</p>
                    <p class="card-email">moses22otieno@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
 
            <!-- Card 2 -->
           
            <div class="card">
                <div class="card-img">
                    <img src=
"./img/Dominic-dev.png" alt="User 2">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Dominic Mogeni</h2>
                    <p class="card-role">Fullstack developer and Cco-founder</p>
                    <p class="card-email">dominicmogeni2002@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
           
            <!-- Card 3 -->
           
            <div class="card">
                <div class="card-img">
                    <img src=
"./img/john-muli.png" alt="User 3">
                </div>
                <div class="card-info">
                    <h2 class="card-name">John Muli</h2>
                    <p class="card-role">Perpetuator of the plan and <b> overseer of the project</p>
                    <p class="card-email">mulijohn@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </section>
 
    <footer>
        <p>©Kejapap! All Rights Reserved- 2024</p>
    </footer>

    
</body>
</html>
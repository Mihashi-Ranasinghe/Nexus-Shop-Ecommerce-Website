<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutusstyle.css">
</head>
<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">About</span> us
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>
  
  <section class="home">
        <div class="home-content">
            <h1>Nexus Shop Experience</h1>
            <h3></h3>
            <p> At Nexus Shop, our goal is to connect you with the world of technology. 
                We are dedicated to offering the latest and most innovative gadgets, electronics, 
                and accessories, all in one place. Our diverse selection ensures that there is something 
                for every need and interest, whether it's cutting-edge devices, practical tools, or thoughtful gifts.


            </p>
            <h1></h1>
            <h4>Who we are?</h4>
            <p> Nexus Shop was founded by a group of passionate tech aficionados with a shared vision: 
              to create a one-stop shop where people can find cutting-edge technology and reliable customer service. 
              Our team is made up of industry experts who are dedicated to staying ahead of the tech curve and bringing you products that enhance your everyday life.
            </p>
                <a href="shop.php"class="btn">Nexus-Shop</a>
            
        </div>

        <div class="home-img">
            <!--<div class="rhombus">-->
                <img src="Store.png" alt="">
            </div>
        </div>

        <div class="rhombus2"></div>
        
    </section>
    

<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script>
window.embeddedChatbotConfig = {
chatbotId: "OKvJMwpwTyzcRseIzj5bY",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="OKvJMwpwTyzcRseIzj5bY"
domain="www.chatbase.co"
defer>
</script>
</body>
</html>

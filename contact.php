<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix</title>
    <link rel="stylesheet" href="./css/style.css">
    <link id="pagestyle" href="./css/material-kit.css" rel="stylesheet" />


</head>
<body>
        
        <?php include('function/authcode.php'); 
        $_SESSION['userId'] = 0 ;
        include('function/contact2.php'); ?>


        <section class="page-header" id="about-header">
            <h2 style="color: lightblue;">#contactus</h2>
            <p style="color: lightblue;">24/7 service available</p>        
        </section>

        <section class="contact-details" class="section-p1">
            <div class="contact-info">
                <h1>Get in touch</h1>
                <li>
                    <i class="far fa-map"></i>
                    <p>Saraswati college,shegaon</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>shubratoband12@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+919325967012</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Friday : 9:00AM to 5:00PM</p>
                </li>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.007292317796!2d76.66908457509842!3d20.79099288079955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd745a413fd5d9d%3A0x25d4aee8e50bb12c!2sSaraswati%20College%2C%20Shegaon!5e0!3m2!1sen!2sin!4v1713867000196!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>


        <footer class="foot" style="margin-top: 100px;">
            
            <div style="margin-top: 60px;">
                <h4>Links</h4>
            <div class="links">
            <a href="./index.php">Home</a>
            <a href="./shop.php">Shop</a>
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact</a>
        </div>
            </div>
            
            <div>
                <h4>About</h4>
                <div class="links">
            <a href="./about.php">About us</a>
            <a href="./contact.php">Contact us</a>
            </div>
            </div>

            <div style="margin-bottom: 30px;">
                <h4>Contact</h4>
                <div class="links">
                    <h6 style="font-size: 15px; color: #949494;">Address: <a href="#">Saraswati College,Shegaon</a></h6>
            <h6 style="font-size: 15px; color: #949494; margin-top: 5px;">Phone:<a href="">+91000333344</a></h6>
            </div>
            </div>
            

            <div class="footer"><p> Copyright  &copy; Phoenix 2024-25</p></div>
            
        </footer>

 <script src="https://kit.fontawesome.com/eb62b10a2e.js" crossorigin="anonymous"></script>
 <script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>
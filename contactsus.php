<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Masjid Ummah</title>
</head>
<body>
    
    <div class="motto">
        <div class="container">
        Motto: Service to Allah and Humanity.
    </div>
    </div>
    
    <header>
        <div class="container">
        <div class="islam"> </div> 
        <section class="top">
        <h1 class="mas">Masjid Ummah</h1>
        
            <ul  class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="prayers.php">Prayers</a></li>
                <li><a href="services.php">programs</a></li>
                <li class="active"><a href="contactsus.php">Contact</a></li>
            </ul>
            <li class="donate"><a href="donate.php"> Donate</a></li>
            </section>

    </div>
    </header>
    <div class="toggle">
        <div class="menu"></div>
    </div>
    <div class="banner2">
       <h1>Contact Us!</h1>
   </div>
   <div class="form2 container">
        <p>Please get in touch with us if you have <strong>ANY</strong> questions, comments or concerns.</p>

          <p>Our Office Hours are 12-5pm Monday-Friday.</p>
            
            <p>You can contact us at +234 8156 3312 55</p>
        
        <form name="myform" onSubmit="return validate()" method="POST" action="process.php">
            <label>Your Name (required)</label>
            <input type="text" name="Name" />

            <label>Your Email (required)</label>
            <input type="text" name="Email" />
            <p id=" demo"></p>
            
            <label>Your Telephone (optional)</label>
            <input type="text" name="Phone" />
            
            <label>Subject (required)</label>
            <input type="text" name="Subject"/>
            
            <label>Your Message (required)</label>
            <textarea col="10" row="10" name="Comment"></textarea>
            
            <input type="submit" value="Send"/>
        </form>
   </div>

    <div class="footer">
        <div class="first container">
            <h3>Contact us</h3>
            <p>Please contact us through phone or visit the mosque in Lagos City</p>
            <div class="phone"><img src="images/phone.png" class="ph" alt=""><a href="tel:08156331255"> +234 8156 3312 55</a></div>
            <div class="locate"><img src="images/location.png" class="lo" alt=""><p> Block7 Plot5, Ijanikin Rosegarden Estate Ojo Lagos.</p></div>
        </div>
        <div class="second container">
            <h3>Useful Links</h3>
            <p><a href="whoweare.php">Who we are?</a></p>
            <p><a href="donate.php">Support and FAQ's</a></p>
            <p><a href="donate.php">Payment</a></p>
            <p><a href="donate.php">Donations Trems</a></p>
            <p><a href="donate.php">Volunteer</a></p>
        </div>
        <div class="third container">
            <h3>Location</h3>
            <a href="https://goo.gl/maps/ryoq7e8zQBBcDgyc8"><div class="map">
                <div class="map2">View larger map</div>
            </div>
        </a>
        </div>
        <footer class="foot">
        <div class="container">
            <div class="two">
            <div class="islam it"> </div>
            <h1 class="mas2">Masjid Ummah</h1>
        </div>

        <div class="copy">
            &copy; Copyright 2022 Masjid Ummah
        </div>
    </footer>
</div>
        <script>
              function validate(){
                var name = document.forms["myform"]["Name"].value;
                var email = document.forms["myform"]["Email"].value;
                var sub = document.forms["myform"]["Subject"].value;
                var talk = document.forms["myform"]["Comment"].value;

                if(name=="" || name==null){
                    alert("Your Name is Required");
                    return false;
                }
                if(email=="" || email==null){
                    alert("Your Email is Required");
                    return false;
                }
                if(sub=="" || sub==null){
                    alert("This Field is Required");
                    return false;
                }
                if(talk=="" || talk==null){
                    alert("This Field is Required");
                    return false;
                }
         }
         

         var menuToggle = document.querySelector('.menu')
        var togggle = document.querySelector('.toggle')

        menuToggle.addEventListener('click', () =>{
            menuToggle.classList.toggle('active2')
            togggle.classList.toggle('active2')
        })
        </script>
            <div class="navigate">
        <div class="container">
        <ul>
            <li><a  href="index.php">Home</a></li>
            <li><a  href="prayers.php">Prayers</a></li>
            <li><a  href="services.php">Programs</a></li>
            <li><a class="active3" href="contactsus.php">Contact</a></li>
        </ul>
    </div>
</div>
  
</body>
</html>
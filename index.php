<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lovendino's Portfolio</title>
    <script src="https://kit.fontawesome.com/49f06a703c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js" type="text/javascript"></script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
    emailjs.init('xHWj4eOf20N9Qy_cc')
    </script>
    
</head>
<body>
    <nav id="top">
        <img src="img/logo.png" class="logo" >
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#moreinfos">PROJECTS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>
    <div class="hero">
        <div class="images" id="zoom-In">
            <figure>
            <img src="img/pic1hd.png">
        </div>
        
        <div class="about">
            <p class="greetings">Hello,</p>
            <h1 class="greetings">I'm <span>John Paul</span></h1>
            <h1 class="greetings">Lovendino</h1>
            <p class="greetings"> <b>➤</b>  A BSCS Student and a Future Developer.</p>
            <a class="greetings" href="https://www.google.com/" target="_blank">Download CV</a>
        </div>        
    </div>
    

    <!-- ABOUT SECTION -->

    <section class="secondpart" id="about" >
        <div class="aboutmain">
            <div class="image">
            <div id="zoom-In">
                <figure>
            <img src="img/lovendino.jpg" style="height: 600px"; width="300px";>
                </figure>
            </div>              
            </div>
        <div class="aboutinfo">
            <h2>About <span>Me</span></h2>
            <p> I'm John Paul Lovendino, 20 years old and a 3rd Year College Student currently taking Bachelor of Science in Computer Science at 
                Pamantasan ng Lungsod ng Pasig. I am also a musician and  I play bass guitar, acoustic guitar, and keyboard in my team. <br><br/>

                I am a person who is eager to do things and I'm willing to work with others and to learn new things, skills, and knowledge. I am
                a shy type person but I am willing to interact with other people. I can work well in a team environment as well as on my own initiative,
                and I can adjust to any difficult circumstances.   
            </p>
        </div>
    </div>
    </section>

    <section class="moreinfos" id="moreinfos">
        <div class="centeritem">
            <h3>MY <span>PROJECTS</span></h3>
        </div>
    

        <div class="more-contents">
            <div class="row">
                <h3>WHAT ARE THE THINGS I LIKE TO DO?</h3>
                <p>I love practicing coding every night. I like challenging myself with difficult things and situations even though
                    I don't know what the outcome will be. I like to explore things that interest me. I love playing instruments also that's why
                    I became a musician. I love putting hardwork on the things I love.
                </p>
            </div>
            <div class="row2">
                <h3>WHAT'S MY CHILDHOOD DREAM?</h3>
                <p>When I was a child, I always dreamed about being a Pro Player. I love playing games since I was a child until now. I also want
                    to be a streamer also. I also want to be a superhero when I was a child because I love watching cartoons that time. And also, one of
                    my dreams is being a musician.
                </p>
            </div>
            <div class="row">
                <h3>WHAT ARE MY DREAM PLACES TO VISIT/LIVE?</h3>
                <p>I'd want to travel to Boracay Island. despite having costly hotels, meals, and activities. Hopefully, everything will be worthwhile in the end.
                    I also want to visit Japan since the country is know for its modern and advanced technologies. As a future developer, I also want to see and 
                    experience those gadgets and technologies. </p>
            </div>
            <div class="row2">
                <h3>HOW DO I SEE MYSELF 5 YEARS FROM NOW</h3>
                <p> First, I see myself completing my education in college. 5 Years from now, I see myself having a stable well-paying job and working in a company that helps me to learn new
                    things and help me to grow in my industry. I see myself surrounded by supportive and non-toxic people that will help me to grow more.
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section class="contact" id="contact">
        <div class="centertxt">
            <h1>WORK WITH <span>ME</span></h1>
            <p>I would love to respond to your inquiries and help you with your concern. Feel free to get in touch with me.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h2>Address</h2>
                        <p>Pasig City, Metro Manila, Philippines</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h2>Email</h2>
                        <p>lovendino_johnpaul@plpasig.edu.ph</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h2>Phone Number</h2>
                        <p>09391675395</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form name="form">
                    <h2>Send me A Message</h2>
                        <div class="input-box">
                            <input type="text" id="from_name" name="fname" required>
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="text" id="email_add" name="" required>
                            <span>Email</span>
                        </div>

                        <div class="input-box">
                            <textarea id="message" required="required"></textarea>
                            <span>Your message here...</span>
                        </div>

                        <div class="input-box">
                            <button onclick="SendMail(); reset()">Submit</button>
                        </div>
                </form>

            </div>
        </div>
    </section>

    <!--FOOTER-->

    <footer>
        <div class="footercontent">
          <h4><b>FOLLOW <span>ME</span></b></h4>
          <ul class="socials">
            <li><a href="https://www.facebook.com/profile06142002" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/paul_lovendino" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/_jampol/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com/@johnpaullovendino14" target="_blank"><i class="fa fa-tiktok"></i></a></li>
          </ul>
        </div>
        <div class="copyright">
            <p>Copyright &copy;2022 BSCS3A. Designed by <span>LOVENDINO, JOHN PAUL</span></p>
        </div>
    </footer>

    <a class="topbtn" href="#top"><i class="fa-sharp fa-solid fa-arrow-up"></i></a>
        <script>
            ScrollReveal({
                reset: true,
                distance: '60px',
                duration: 2500,
                delay: 400
            });

            ScrollReveal().reveal('nav', {delay: 50, origin:'top'});
            ScrollReveal().reveal('.greetings', {delay: 500});
            ScrollReveal().reveal('.images', {delay: 400, origin: 'left'});
            ScrollReveal().reveal('.aboutmain', {delay: 200, origin: 'left'});
            ScrollReveal().reveal('.aboutinfo', {delay: 400, origin: 'left'});
            ScrollReveal().reveal('.centeritem', {delay: 200});
            ScrollReveal().reveal('.row', {delay: 300, origin: 'left', interval: 300});
            ScrollReveal().reveal('.row2', {delay: 300, origin: 'right', interval: 300});
            ScrollReveal().reveal('.centertxt', {delay: 200});
            ScrollReveal().reveal('.box', {delay: 400, origin: 'left', interval: 300});
            ScrollReveal().reveal('.contactform', {delay: 400, origin: 'right'});
            // ScrollReveal().reveal('.footercontent h4', {delay: 20, origin: 'top'});
            // ScrollReveal().reveal('.socials', {delay: 20, origin: 'bottom'});
            // ScrollReveal().reveal('.copyright', {delay: 20, origin: 'top'});
            
            
        </script>
</body>
</html>
<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNA HACKATHON_1.O</title>
    <link rel="stylesheet" href="User_style/style.css">
    <link rel="stylesheet" href="../style/service.css">
    <link rel="stylesheet" href="assets/style/responsive.css">
    <script src="https://kit.fontawesome.com/f073f3d2c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="js/index.js"></script>
</head>

<body>
    <div class="body">
        <!-- starting of heading -->
        <nav class="header">
            <div class="rightheader">
                <!-- <img src="assets/HEADER.png" alt="" srcset=""> -->
                <P class="logo"><span>🍁 G</span>N<span>A </span>HACK<span>ATHON</span>1.<span>O</span></P>
            </div>
            <div class="leftheader">
                <ul>
                    <li><a href="user_dashbord.php">Home</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="team.php">TEAM</a></li>
                    <li><a href="#" target="_blank">BLOGS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="../php/signIn.php" target="_blank"><i class="fa-solid fa-circle-user"> Hello: <?php echo $_SESSION['FirstName']; ?></i></a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>

        <!-- <section class="container">
            <p class="bigtext"> Let's Learning , Design & Develop The <br>Future Together</p>
            <p class="smalltext"> We Learnig to Create amazing UI/UX, Fronted Designs & Templates</p>
            <button class="btn"> LETS GET STARTED</button>




        </section> -->
        <div class="aboutbox">
            <p class="about">
            Participating in Hackathons
            </p>
            <br>
            <div class="ideas">
                <div class="subideas">
                    <div class="icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <p class="ideas_heading">Bug Bounties.</p>
                    <p class="ideacontain">You may participate in external bug bounty programs and accept monetary awards for assisting other companies with locating security vulnerabilities..</p>

                </div>
                <div class="subideas">
                    <div class="icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <p class="ideas_heading">Coding Competitions.</p>
                    <p class="ideacontain">coding competitions are addressed by the same policy as hackathons and do require terms review.</p>
                </div>

                <div class="subideas">
                    <div class="icon">
                        <i class="fa-solid fa-paint-roller"></i>
                    </div>
                    <p class="ideas_heading">Coding Classes.</p>
                    <p class="ideacontain">Unless you have obtained go/iarc authorization to perform your coursework independently from Google, if your course entails publishing your work, that should only be done as permitted by the go/patching (or go/releasing) process.</p>
                </div>

                <div class="subideas">
                    <div class="icon">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <p class="ideas_heading">Repeat Events.</p>
                    <p class="ideacontain">If you are interested in participating in a hackathon or coding competition that you have previously obtained authorization to participate in, please still complete the hackathon review process.</p>
                </div>


            </div>

            <button class="callus"><a href="tel:9852312351">CLICK HERE TO CALL US</a></button>
            <button class="callus"><a target="_blank" href="https://api.whatsapp.com/send?phone=9852312351&text=Hello this is the starting message">CLICK HERE TO WHATSCHAT</a></button>

        </div>

    </div>

    <!-- STARTING OF WEBSITE CONTAIN -->
    <!-- features-1 -->
    <!-- <div class="webcontainer">
        <div class="containerimage">
            <img src="../img/web.svg" alt="" srcset="">
        </div>
        <div class="containerdata">
            <h3 class="headingtext"> Web & Application Learning</h3>
            <p class="componentstext">Website Components</p>
            <p class="data">

                we are help you to learn web and application development
            </p>



            <p class="componentstext">Application Components</p>
            <p class="data">
                we are help you to learn web and application development
            </p>
            <button class="btn1"> <a href="https://skill-lync.com/computer-science-engineering-courses/masters-full-stack-web-development?utm_source=Sok-Google-Search-Ad&utm_campaign=PA_SOK_IND_Google_Search_Leads_CSE_FullStackWebDev_01042022&utm_set=Full-Stack-Development-Phrase&utm_network=g&utm_device=c&utm_keyword=full%20web%20development%20course&gclid=CjwKCAiAhKycBhAQEiwAgf19el4h0aTDYfJbh6w-0wT3QrB_zc-aVQKUVh5mJ6Vl68hN5smpqlInOhoCjY4QAvD_BwE" target="_blank">START LEARNING</a></button>


        </div>
    </div>
    <br> -->



    <!-- features-2 -->


    <!-- <div class="webcontainer webcontainer-reverse">

        <div class="containerdata">
            <p class="headingtext"> Android app design learnig</p>
            <p class="componentstext">App Components</p>
            <p class="data">

                Custom & ready-to use fully functional Website Components along with proper source code
            </p>




            <p class="componentstext">Application Components</p>
            <p class="data">
                Custom & ready-to use fully functional Website Components along with proper source code
            </p>
            <button class="btn1"><a href="https://alison.com/courses/android-app-building-104-auto-reply-text-messaging/content#event=login" target="_blank"> LETS GET STARTED</a></button>


        </div>

        <div class="containerimage">
            <img src="../img/app.svg" alt="" srcset="">
        </div>
    </div>
    <br> -->



    <!-- STARTING OF WEBSITE MOCUPS CONTAIN -->
    <!-- <div class="webcontainer">
        <div class="containerimage">
            <img src="../img/webmockup.png" alt="" srcset="">
        </div>
        <div class="containerdata">
            <p class="headingtext"> Website design learning </p>
            <p class="componentstext">Responsive Design</p>
            <p class="data">

                Custom & ready-to use fully functional Website Components along with proper source code
            </p>



            <p class="componentstext">Frameworks, Tools & Technologies</p>
            <p class="data">
                Custom & ready-to use fully functional Website Components along with proper source code
            </p>
            <button class="btn1"><a href="https://www.figma.com/community/tag/free%20download/files" target="_blank"> LETS GET STARTED</a></button>



        </div>
    </div>
    <br> -->


    <!-- STARTING OF RESUME CONTAIN -->

    <!-- <div class="webcontainer webcontainer-reverse">

        <div class="containerdata">
            <p class="headingtext"> Resume & CV Builder</p>

            <p class="componentstext">Resume Builder</p>

            <p class="data">
                A perfect resume is your winning ticket to a great job. Our easy-to-use online resume builder puts you on the professional fast track.
            </p>



            <p class="componentstext">CV Maker</p>
            <p class="data">
                Writing a CV is a tedious chore. Boring, confusing, time-consuming. With the RWT CV maker, you’ll create a document that shows you at your best—fast. Get the job you want, not whatever’s on offer.
            </p>
            <button class="btn1"><a href="../../ResumeBuilder/index.html" target="_blank">START BUILDING</a></button>


        </div>

        <div class="containerimage">
            <img src="../img/resume.svg" alt="" srcset="">
        </div>
    </div>
    <br> -->

    <!-- STARTING A  VIDEO PART  -->
     <section class="video">
        <div class="videocontainer">
            <a href="https://youtu.be/9tobL8U7dQo">
                <i class="fas fa-play"></i>
            </a>
            <h1> Watch Sample Video</h1>
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo facere atque itaque voluptas ut? Quasi
                debitis fugit quam animi expedita aspernatur .</h3>
           

        </div>

    </section> 


    <section class="memberpanal">
        <h4> We Make Your Dream Possible</h4>
        <h3> Yeah! we do it</h3>

        <div class="box">

            <div class="subbox">
                <div class="image">
                    <img src="../img/me.jpeg" alt="" srcset="">
                    <h2>Raushan kumar bharti</h2>
                    <h3>web developer</h3>
                </div>
            </div>
            <div class="subbox">
                <div class="image">
                    <img src="../img/abhi.jpeg" alt="" srcset="">
                    <h2>Raushan kumar bharti</h2>
                    <h3>web developer</h3>
                </div>
            </div>
        </div>

    </section>
    <br>
    <button class="accordion">Web Development</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, eius.
            Lorem ipsum quisquam ipsam maxime porro. Sed beatae consequatur eligendi
            repudiandae eos, perferendis voluptatum!
        </p>
    </div>

    <button class="accordion">App development</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, eius.</p>
    </div>

    <button class="accordion">Resume Building</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, eius.</p>
    </div>


    <footer class="footer">
        <div class="footerpart">
            <div class="footerright">
                <span>Follow Us</span>
                <br>
                <div class="socialicon">
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footerleft">
                <div class="footerbox">
                    <span> Subscribe To Your Newsletter</span>
                    <p>Our goal is to provide world best design and <br> fronted of web and app</p>
                    <form class="form">
                        <input type="text" placeholder="Enter your email here...." name="search">
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <p class="copyright">Copyright &#9400 2022 GNA HACKATHON_1.O Website | All Right Reserved</p>




    </footer>



    <script src="../js/index.js"></script>
</body>

</html>
?>



<!--
    
     $(document).ready(function(){

    // wow initiation
    new WOW().init();

    // navigation bar toggle
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });

    // navbar bg change on scroll
    $(window).scroll(function(){
        let pos = $(window).scrollTop();
        if(pos >= 100){
            $('.navbar').addClass('cng-navbar');
        } else {
            $('.navbar').removeClass('cng-navbar');
        }
    });

    // sample video popup
    $(document).ready(function() {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
    
            fixedContentPos: false
        });
    });

    // team carousel 
    $('.team .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: true,
        nav: false,
        responsiveClass: true,
        responsive:{
            0:{
                items: 1
            }, 
            600:{
                items: 2
            },
            1000:{
                items: 3
            }
        }
    });

    // faq accordion
    $('.faq-head').each(function(){
        $(this).click(function(){
            $(this).next().toggleClass('show-faq-content');
            let icon = $(this).children('span').children("i").attr('class');

            if(icon == "fas fa-plus"){
                $(this).children('span').html('<i class = "fas fa-minus"></i>');
            } else {
                $(this).children('span').html('<i class = "fas fa-plus"></i>');
            }
        });
    });

    // testimonial carousel 
    $('.testimonial .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        nav: false,
        items: 1
    });

});

-->
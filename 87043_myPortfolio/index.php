<?php
    require 'inc/functions.php'; //makes sure functions.php is loaded
    requirements(); //external functions and scripts
?>
    <link rel="stylesheet" href="style/style.css">  
    <title>Portfolio Tijn Peeters</title>
    <script>
        $(document).ready(function(){
            $('#toProjects').click(function(){
                console.log('clock');
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#projectsContainer").offset().top
                }, 1000);
            });

            $('#toAbout').click(function(){
                console.log('clock');
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#aboutContainer").offset().top
                }, 1000);
            });

            $('#toContact').click(function(){
                console.log('clock');
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#contactContainer").offset().top
                }, 1000);
            });

            $('#goToTop').click(function(){
                console.log('clock');
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#header").offset().top
                }, 1000);
            });
        });
    </script>
  </head>
  <body>
    <header id="header">
        <img class="unselectable" id="navLogo" src="img/ico.jpg" alt="Logo">
        <nav id="navBar">
            <div class="navItems" id="toAbout">
                <p class="navP unselectable">About</p>
            </div>
            <div class="navItems" id="toProjects">
                <p class="navP unselectable">Projects</p>
            </div>
            <div class="navItems" id="toContact">
                <p class="navP unselectable">Contact</p>
            </div>
        </nav>
    </header>
    <main id="mainContainer">
        <div id="titleDiv">
            <h1 id="homeTitle">
                Tijn Peeters
            </h1>
            <h2 id="homeGeneralInfo">
                Studying Software Development At ROC Ter-AA
            </h2>
        </div>
    </main>
    <div id="aboutContainer">
        <h1 id="aboutTitle">
            About Me
        </h1>
        <p class="aboutPagaraph">My name is Tijn Peeters, I am an aspiring software developer currently leaning at ROC-TerAA in Helmond.</p>
        <p class="aboutPagaraph">These are a few programming languages i'm currently learning</p>
        <ul id="aboutList">
            <li class="aboutPagaraph">C#</li>
            <li class="aboutPagaraph">HTML</li>
            <li class="aboutPagaraph">PHP</li>
            <li class="aboutPagaraph">Javascript</li>
        </ul>
    </div>
    <div id="projectsContainer">
        <h1 id="projectsTitle">
            My Projects
        </h1>
        <?php dbh(); ?>
    </div>
    <div id="contactContainer">
        <h1 id="contactTitle">
            Contact Me
        </h1>
        <form id="contactForm" action="" method="post">
            <input class="contactText" type="text" name="contactName" id="" placeholder="Enter Name" required>
            <input class="contactText" type="email" name="contactEmail" id="" placeholder="Enter Email" required>
            <textarea id="contactMessage" name="contactMessage" form="contactForm" placeholder="Enter text here..." required></textarea>
            <button id="contactButton" type="submit">Send Message</button>
        </form>
        <div class="unselectable" id="goToTop"><p>˄</p></div>
    </div>
  </body>
</html>
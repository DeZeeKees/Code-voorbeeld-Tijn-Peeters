<?php
    function requirements() {
        //require 'https://raw.githubusercontent.com/DeZeeKees/HTML-Depend/main/functions.php';
        ?>
            <!doctype html>
            <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <link rel="icon" href="img/ico.jpg">

                <!-- Jquery 3.6.0 Javascript File -->
                <script src="https://cdn.jsdelivr.net/gh/DeZeeKees/HTML-Depend/jquery-3.6.0.js"></script>

                <!-- Jquery UI Requirements -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DeZeeKees/HTML-Depend@main/jquery-ui-1.13.1/jquery-ui.min.css" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/gh/DeZeeKees/HTML-Depend@main/jquery-ui-1.13.1/jquery-ui.min.js"></script>
        <?php
    }

    function dbh()
        {
            $dbh = new PDO("mysql:host=127.0.0.1;dbname=87043_myportfolio", "root" , "");
            $stmt = $dbh->query("SELECT * FROM projects");
            while ($row = $stmt->fetch()) 
            {
            ?>
            <article id="<?php echo $row['projectId']; ?>" class="project">
                <div class="projectText">            
                    <a class="projectTextLink" href="project.php?projectId=<?php echo $row['projectId'] ?>"><?php echo $row['projectTitle']; ?></a>
                </div>
                <img class="projectImg" src="img/projects/<?php echo $row['projectImage']; ?>" alt="Bofuri">
            </article>
            <?php
            }
        }

        function dbh2()
        {
            $dbh = new PDO("mysql:host=127.0.0.1;dbname=87043_myportfolio", "root" , "");
            $stmt = $dbh->query("SELECT * FROM projects WHERE projectId =" . $_GET['projectId']);
            while ($row = $stmt->fetch()) 
            {
            ?>
            <title><?php echo $row['projectTitle']; ?></title>
            </head>
                <body>
                    <article id="<?php echo $row['projectId']; ?>" class="project">
                        <div class="projectText">            
                            <a class="projectTextLink" href="index.php"><?php echo $row['projectTitle']; ?></a>
                        </div>
                        <img class="projectImg" src="img/projects/<?php echo $row['projectImage']; ?>" alt="Bofuri">
                        <h2 class="projectCategory">Category: <?php echo $row['projectCategory']; ?></h2>
                        <p class="projectParagraph"><?php echo $row['projectDescription']; ?></p>
                    </article>
                    <div class="unselectable" id="goBack"><p><</p></div>
                </body>
            </html>
            <script>
                $(document).ready(function(){
                    console.log('click');
                    $('#goBack').click(function(){
                        window.location.href = 'index.php#<?php echo $row['projectId']; ?>';
                    });
                });
            </script>
            <?php
            }
        }
?>  
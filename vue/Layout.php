<!DOCTYPE html>
<!--
This is the web side made for Shanna Kaela by Bryan Boni
-->
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel="icon" href="../ressources/magatama.png" type="image/x-icon"/>
        <link rel = "stylesheet" href = "../vue/main.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap CSS-->
        <link rel = "stylesheet" href="../ressources/css/bootstrap.min.css"/>
        <!--JQuery link-->
        <script src = "../ressources/javascript/jquery-1.12.3.min.js"></script>
        <!--Bootstrap Js-->
        <script src = "../ressources/javascript/bootstrap.min.js"></script>        
        
    </head>
    <body id = "body">
        <a href="#" class="back-to-top hidden-xs">Back to Top</a>
        <div class="container-fluid" id="main">
            <div id = "header" class="col-md-10 col-md-offset-1">
                <nav class="navbar navbar-default" id = "navbar">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../controlleur/Accueil.php" style="font-size: 24px;">Accueil</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Consultation privée / tarifs<span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Voyance par mail</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../controlleur/Contact.php">Contacts</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>

        </div>

        <div  id = "corps" class="container-fluid">
            <div class="col-sm-10 col-sm-offset-1">
                <?php echo $content ?>
            </div>
        </div>
        <div id = "footer"></div>
        <script src="../Model/javascript/backOnTop.js"></script>
    </body>
</html>


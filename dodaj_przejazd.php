<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="body">


    <!-- Content -->
    <div id="content">
        <div class="inner">


            <!-- Sidebar -->
            <div id="sidebar">
                <h1>Witaj, <?php echo $_SESSION['name']; ?></h1>

                <!-- Logo -->
                <h1 id="logo"><a href="#">Twoje przejazdy</a></h1>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="#">Dodaj przejazd</a></li>
                        <li><a href="home.php">Strona główna</a></li>
                        <li><a href="read.php">Moje przejazdy</a></li>



                    </ul>

                    <nav class="home-nav">
                        <a href="change-password.php">Change Password</a>
                        <a href="logout.php">Logout</a>
                    </nav>
                </nav>

            </div>

            <div class="container">
                <form action="php/create.php"
                      method="post">

                    <h4 class="display-4 text-center">Create</h4><hr><br>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="nazwa_pociagu">Nazwa pociągu</label>
                        <input type="nazwa_pociagu"
                               class="form-control"
                               id="nazwa_pociagu"
                               name="nazwa_pociagu"
                               value="<?php if(isset($_GET['nazwa_pociagu']))
                                   echo($_GET['nazwa_pociagu']); ?>"
                               placeholder="Wpisz nazwę swojego pociągu">
                    </div>

                    <div class="form-group">
                        <label for="dzien_odjazdu">Dzień odjazdu</label>
                        <input type="dzien_odjazdu"
                               class="form-control"
                               id="dzien_odjazdu"
                               name="dzien_odjazdu"
                               value="<?php if(isset($_GET['dzien_odjazdu']))
                                   echo($_GET['dzien_odjazdu']); ?>"
                               placeholder="Wprowadź dzień odjazdu">
                    </div>

                    <div class="form-group">
                        <label for="godzina_odjazdu">Godzina odjazdu</label>
                        <input type="godzina_odjazdu"
                               class="form-control"
                               id="godzina_odjazdu"
                               name="godzina_odjazdu"
                               value="<?php if(isset($_GET['godzina_odjazdu']))
                                   echo($_GET['godzina_odjazdu']); ?>"
                               placeholder="Wprowadź godzinę odjazdu">
                    </div>

                    <div class="form-group">
                        <label for="dzien_przyjazdu">Dzień przyjazdu</label>
                        <input type="dzien_przyjazdu"
                               class="form-control"
                               id="dzien_przyjazdu"
                               name="dzien_przyjazdu"
                               value="<?php if(isset($_GET['dzien_przyjazdu']))
                                   echo($_GET['dzien_przyjazdu']); ?>"
                               placeholder="Wprowadź dzień przyjazdu">
                    </div>

                    <div class="form-group">
                        <label for="godzina_przyjazdu">Godzina przyjazdu</label>
                        <input type="godzina_przyjazdu"
                               class="form-control"
                               id="godzina_przyjazdu"
                               name="godzina_przyjazdu"
                               value="<?php if(isset($_GET['godzina_przyjazdu']))
                                   echo($_GET['godzina_przyjazdu']); ?>"
                               placeholder="Wpowadź godzinę przyjazdu">
                    </div>


                    <button type="submit"
                            class="btn btn-primary"
                            name="create">Create</button>
                    <a href="home.php" class="link-primary">View</a>
                </form>
            </div>

        </div>
    </div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>


    </body>
    </html>

    <?php
}else{
    header("Location: index.php");
    exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jocelyn Vourron - Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/compiled.min.css" />  
    <link rel="icon" type="image/png" href="rss/mascotte.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    

    <style type="text/css">
        body 
        {
            font-family: 'Montserrat', sans-serif;
            color: white;
        }
        html,
        body,
        header,
        .intro-2 {
          height: 100%;
          
        }

        .input-group .form-control 
        {
            color: white;
        }

        .gradienbg .rgba-gradient {
            background : -webkit-linear-gradient(45deg,#68d0ff,#453cf5 100%);
        }

        .md-form label
        {
            color: white;
        }

        .md-form input[type=text]
        {
            color: white;
        }

        .md-form input[type=text]:focus:not([readonly])
        {
            box-shadow: 0 1px 00 white;
            border-bottom: 1px solid white;
        }

        .md-form input[type=text]:focus:not([readonly])+label
        {
            color: white;
        }

        .md-form input[type=password]
        {
            color: white;
        }

        .md-form input[type=password]:focus:not([readonly])
        {
            box-shadow: 0 1px 00 white;
            border-bottom: 1px solid white;
        }

        .md-form input[type=password]:focus:not([readonly])+label
        {
            color: white;
        }
        
    </style>
</head>

<body class="gradienbg">

<header>
    <section class="view intro-2 rgba-gradient">
        <div class="mask">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row flex-center pt-8 mt-8">
                    <div class="white-text">
                        <div class="col-md-12 col-lg-12 text-center text-md-left margins">
                            <h1>Espace de connexion <i class="fa fa-user" aria-hidden="true"></i></h1>
                            <br><br>
                            <form>
                                <!-- Material input -->
                                <div class="md-form form-group mt-5">
                                    <input type="text" class="form-control" id="nomutilisateur">
                                    <label for="nomutilisateur">Nom d'utilisateur</label>
                                </div>
                                <!-- Material input -->
                                <div class="md-form form-group mt-5">
                                    <input type="password" class="form-control" id="mdputilisateur">
                                    <label for="mdputilisateur">Mot de passe</label>
                                </div>
                                <br>
                                <center><button class="btn blue-gradient"><i class="fa fa-magic mr-1"></i> Me connecter</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</header>











<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/compiled.min.js"></script> 
<script>
    //Initialisation de l'animation
    new WOW().init();
</script>
</body>
</html>
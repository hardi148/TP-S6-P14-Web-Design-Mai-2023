<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Tojo va vous aider a decouvrir l'intelligence artificielle : Définition,articles et FAQ">
        <title>L'intelligence artificielle par Tojo - Définition,articles et FAQ</title>
        <link rel="stylesheet" href="assets/Login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/Login/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="assets/Login/css/Ludens-Users---2-Register.css">
        <link rel="stylesheet" href="assets/Login/css/styles.css">
        <style>
            .form-container {
                max-width: 500px;
                margin: auto;
                margin-top:15%;
                text-align: center;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 10px;
                padding: 30px;
                transition: all .3s ease-in-out;
            }
            .form-container:hover {
                box-shadow: 0px 0px 10px #ddd;
                transform: translateY(-10px);
            }
        </style>
    </head>
<body>

    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;<?php echo asset('assets/Login/img/RH.jpg');?>&quot;);"></div>
            <form action="{{url('/log_admin')}}" method="post" autocomplete="off">
    {{ csrf_field() }}
                <h2 class="text-center"><strong>Bienvenue Admin</strong></h2>
                <div class="form-group mb-3"><input class="form-control" type="text" name="mail" value="hardi" required placeholder="Email"></div>
                <div class="form-group mb-3"><input class="form-control" type="password" id="password" name="mdp" value="hardi" placeholder="Mot de passe"></div>

                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage" class="text-danger" style="font-size:13px;"></span></div>
                <div class="form-group mb-3"><button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background: var(--bs-gray);font-weight: bold;">SE CONNECTER</button></div>
                @IF (isset($erreur))
                <div class="alert alert-success flash animated" role="alert" style="background: rgb(255,255,255);text-align: center;border-style:none;"><span style="color: var(--bs-red);"><i class="fas fa-exclamation"></i><strong>&nbsp;</strong>{{$erreur}}</span></div>
                @ENDIF
            </form>        
        </div>
    </section>
    <script src="assets/Login/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Login/js/bs-init.js"></script>

</body>
</html>

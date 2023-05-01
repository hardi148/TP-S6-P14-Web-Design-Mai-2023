
<html>
    <head>
        <title>Connexion administrateur</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo asset('assets/Login/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo asset('assets/Login/fonts/fontawesome-all.min.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="<?php echo asset('assets/Login/css/Ludens-Users---2-Register.css')?>">
        <link rel="stylesheet" href="<?php echo asset('assets/Login/css/styles.css')?>">
    </head>
<body>

<section class="register-photo" style="background-color: transparent;">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;<?php echo asset('assets/Login/img/RH.jpg');?>&quot;);"></div>
         
            <a href="{{ url('/') }}">Back Office</a>
            <form action="{{url('/log_user')}}" method="post" style="height: 525px;">
            {{ csrf_field() }}
                <h2 class="text-center" style="margin-top: 25%;"><strong>Bienvenue User</strong></h2>
                <div class="form-group mb-3"><input class="form-control" type="text" name="mail" value="tojo" required placeholder="Email"></div>
                <div class="form-group mb-3"><input class="form-control" type="password" id="password" name="mdp" value="tojo" placeholder="Mot de passe"></div>

                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage" class="text-danger" style="font-size:13px;"></span></div>
                <div class="form-group mb-3"><button class="btn btn-primary d-block w-100" id="submitButton" type="submit" style="color: rgb(255,255,255);background: var(--bs-gray);font-weight: bold;">SE CONNECTER</button></div>
                @IF (isset($erreur))
                <div class="alert alert-success flash animated" role="alert" style="background: rgb(255,255,255);text-align: center;border-style:none;"><span style="color: var(--bs-red);"><i class="fas fa-exclamation"></i><strong>&nbsp;</strong>{{$erreur}}</span></div>
                @ENDIF
            </form>
        </div>
    </section>
    <script src="<?php echo asset('assets/Login/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset('assets/Login/js/bs-init.js');?>"></script>

</body>
</html>

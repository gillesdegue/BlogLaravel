<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css"><link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="shortcut icon" type="image/x-icon" href="/storage/app/public/imagesArticles/analytics.png" />
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ route('home') }}">Administration</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="padding-left: 68%;" class="collapse navbar-collapse " id="navbarSupportedContent">
                      <!--
                                             <li><a href="{{ route('login') }}">Login</a></li>
                                         -->
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Deconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                       <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('home') }}"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Tableau De Bord </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ajout') }}"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="m-r-10 mdi mdi-message-draw"></i>ajout d'article</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('htags') }}"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-hashtag"></i>Htags</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories') }}"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-bars"></i>Categories</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('profil') }}"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-user"></i>profil</a>
                                
                            </li>
                            
                           
                           
                           
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Profile</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="post" action="{{ route('profil') }}" enctype="multipart/form-data">
                                        <!--

                                      tresssssss important

                                     -->
                                        {{ csrf_field() }}
                                     <!-- 

                                        tresssssss important

                                     -->
                                     @if (session('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                                                <label  for="image">image de profil</label><br>
                                                <input  type="file"  style="width: 80%;height: 54%;padding-top: 0.5%;" class="form-group  mb-2" id="image" name="image" />
                                                <button class="btn " type="button" data-toggle="modal" data-target="#popupImage"  style="margin-left: 0.5%;width: 19%;height: 68%;">apercu</button>
                                                <div class="valid-feedback">
                                                     veuillez entrer une image
                                                </div>
                                                @if ($errors->has('image') )
                                        <div class="alert alert-primary" role="alert">
                                          Le fichier doit etre une image
                                        </div>
                                           
                                        @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Nom</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="nom" value="{{ Auth::user()->nom }}" required>
                                                <div class="valid-feedback">
                                                     veuillez saisir votre nom
                                                </div>
                                                @if ($errors->has('nom') )
                                        <div class="alert alert-primary" role="alert">
                                          erreur au niveau du nom
                                        </div>
                                           
                                        @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Prenom</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="prenom" value="{{ Auth::user()->prenom }}"  required>
                                                <div class="valid-feedback">
                                                     veuillez saisir votre prenom
                                                </div>
                                                @if ($errors->has('prenom') )
                                        <div class="alert alert-primary" role="alert">
                                          erreur au niveau du prenom
                                        </div>
                                           
                                        @endif
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername">Nom D'utilisateur</label>
                                                <div class="input-group">
                                                    
                                                    <input type="text" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" name="name" value="{{ Auth::user()->name }}" required>
                                                    <div class="invalid-feedback">
                                                         veuillez saisir un nom d utilisateur
                                                    </div>
                                                </div>
                                                @if ($errors->has('name') )
                                        <div class="alert alert-primary" role="alert">
                                          Le fichier doit etre une image
                                        </div>
                                           
                                        @endif
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomEmail">Email</label>
                                                <div class="input-group">
                                                    
                                                    <input type="text" class="form-control" id="validationCustomEmail"  aria-describedby="inputGroupPrepend" name="email" value="{{ Auth::user()->email }}" required>
                                                    <div class="invalid-feedback">
                                                         veuillez saisir un email correct
                                                    </div>
                                                </div>
                                                @if ($errors->has('email') )
                                        <div class="alert alert-primary" role="alert">
                                          L'email doit etre unique
                                        </div>
                                           
                                        @endif
                                            </div>

                                            
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomOldPassword">Ancien Mot De Passe</label>
                                                <div class="input-group">
                                                    
                                                    <input type="password" class="form-control" id="validationCustomOldPassword"  aria-describedby="inputGroupPrepend" name="oldPassword" placeholder="mettez votre ancien mot de passe" >
                                                    <div class="invalid-feedback">
                                                        veuillez saisir le mot de passe
                                                    </div>
                                                </div>
                                                @if ($errors->has('oldPassword') )
                                        <div class="alert alert-primary" role="alert">
                                          erreur au niveau de l'ancien mot de passe
                                        </div>
                                           
                                        @endif
                                            </div>
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomNewPassword">Nouveau De Mot De Passe</label>
                                                <div class="input-group">
                                                    
                                                    <input type="password" class="form-control" id="validationCustomNewPassword" name="password" aria-describedby="inputGroupPrepend" >
                                                    <div class="invalid-feedback">
                                                        veuillez saisir le mot de passe
                                                    </div>
                                                </div>
                                                @if ($errors->has('password') )
                                        <div class="alert alert-primary" role="alert">
                                          les mots de passes doivent etres conformes
                                        </div>
                                           
                                        @endif
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomNewPasswordConfirmation">Confirmation Nouveau Mot De Passe</label>
                                                <div class="input-group">
                                                    
                                                    <input type="password" class="form-control" id="validationCustomNewPasswordConfirmation"  name="password_confirmation" aria-describedby="inputGroupPrepend" >
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomAboutMe">A Propos de toi</label>
                                                <div class="form-group">
                                                <textarea class="form-control"  id="summernote" name="apropos" >{{ Auth::user()->apropos }}</textarea>
                                                </div>
                                                    
                                                 @if ($errors->has('contenu') )
                                        <div class="alert alert-primary" role="alert">
                                          Erreur au niveau du contenu
                                        </div>
                                           
                                        @endif   
                                            </div>


                                        <div class="col-md-12 ">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Modifier</button>
                                    <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Annuler</button>
                                </div>
                            </div>
                                        </div>

                <!-- ****************************************************************    
                pop up 
                -->
                 
                    <div class="modal fade" id="popupImage" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                    <h4 class="modal-title">Fermer</h4>
                    </div>
                    <div class="modal-body">
                     
                        <img style="margin-left: 10%;width: 80%;" src="/storage/app/public/{{ Auth::user()->image }}">

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">close</button>
                    </div>
                    </div>
                    </div>
                </div>

<!--   *************************************************************************************   -->
                                            
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
           
            </div>
            
        </div>
    </div>

    <div class="footer" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="padding-left: 19%">
                             Copyright © 2019 
                        </div>
                        
                    </div>
                </div>
            </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
       <script src="../assets/vendor/select2/js/select2.min.js"></script>
    <script src="../assets/vendor/summernote/js/summernote-bs4.js"></script>
    <script src="../assets/vendor/bootbox/bootbox.all.js"></script>
     <script src="../assets/vendor/bootbox/bootbox.all.min.js"></script>
      <script src="../assets/vendor/bootbox/bootbox.js"></script>
       <script src="../assets/vendor/bootbox/bootbox.locales.js"></script>
        <script src="../assets/vendor/bootbox/bootbox.locales.min.js"></script>
         <script src="../assets/vendor/bootbox/bootbox.min.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

    <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({ tags: true });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300

        });

    });
    </script>
</body>
 
</html>
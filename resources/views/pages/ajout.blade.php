<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Ajout d'article</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/vendor/select2/css/select2.css">
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
                                <a class="nav-link active" href="{{ route('ajout') }}"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="m-r-10 mdi mdi-message-draw"></i>ajout d'article</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('htags') }}"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-hashtag"></i>Htags</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories') }}"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-bars"></i>Categories</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profil') }}"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-user"></i>profil</a>
                                
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
                            <h2 class="pageheader-title">Ajout d'article</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
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
                                     <form class="needs-validation" novalidate method="post" action="{{ route('ajout') }}" enctype="multipart/form-data">
                                   
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
                                    
                                        @if ($errors->has('image1') || $errors->has('image2') || $errors->has('image3'))
                                        <div class="alert alert-primary" role="alert">
                                          Le fichier doit etre une image
                                        </div>
                                           
                                        @endif

                                        @if ($errors->has('titre'))
                                                    <div class="alert alert-primary" role="alert">
                                                      le titre doit etre unique
                                                    </div>
                                                @endif

                                        @if ($errors->has('contenu'))
                                            <div class="alert alert-primary" role="alert">
                                             erreur au niveau du contenu
                                            </div>
                                        @endif
                                        
                                        <div class="row">
                                            <div  class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="image1">premiere image de l'article</label>
                                                <input type="file" class="form-control" id="image1" name="image1"  >
                                                <div class="invalid-feedback">
                                                    Veuillez entrer une image
                                                </div>
                                               
                                            </div>
                                            <div style="display: none;" id="divImg2Article" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 "  >
                                                <label for="image2">seconde image de l'article</label>
                                                <input type="file" class="form-control-file" id="image2" name="image2"  >
                                                <div class="invalid-feedback">
                                                    Veuillez entrer une image
                                                </div>
                                            </div>



                                            <div style="display: none;" id="divImg3Article" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " >
                                                <label for="image3">troisieme image de l'article</label>
                                                <input type="file" class="form-control-file" id="image3" name="image3"  >
                                                <div class="invalid-feedback">
                                                    Veuillez entrer une image
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername">categorie </label>
                                                <div class="input-group">
                                                    
                                                   <select id="selectcategorie" name="selectcategorie" class="form-control">
                                                @foreach ($categories as $categorie)
                                                 <option value="{{$categorie->id}}" >{{$categorie->libelle}}</option>    
                                                @endforeach
                                                >
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Veuillez entrer un titre.
                                                    </div>
                                                </div>
                                                
                                            </div>

                                             <div id="divSouscategorie" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername">Sous categorie </label>
                                                <div class="input-group">
                                                    
                                                   <select id="selectsouscategorie" name="selectsouscategorie" class="form-control">
                                               
                                                 <option value="" >none</option>    
                                                >
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Veuillez entrer un titre.
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername">Titre </label>
                                                <div class="input-group">
                                                    
                                                    <input type="text" class="form-control" id="validationCustomUsername" name="titre"  aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Veuillez entrer un titre.
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="select" >Htags:</label>
                                            <select id="select" name="selectHtags[]" class="js-example-basic-multiple" multiple="multiple">
                                                @foreach ($htags as $htag)
                                                 <option value="{{$htag->id}}" >{{$htag->libelle}}</option>   
                                                @endforeach
                                                >
                                            </select>
                                        </div>
                                            

                                            

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="contenu">Contenu de l'article</label>
                                                <div class="form-group">
                                                <textarea class="form-control"  id="summernote" name="contenu"  ></textarea>
                                                </div>
                                                    
                                                    
                                            </div>
                                            


                                        <div class="col-md-12 ">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Ajouter</button>
                                    <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Annuler</button>
                                </div>
                            </div>
                                        </div>


                                       
                                            
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

     <script>
        //ici on gere les hode show et toggle
    $(document).ready(function() {

        //si le premier input est renseigner le second apparait
         $("#image1").on('input', function() {
         $('#divImg2Article').toggle(500); 

            });
         $("#image2").on('input', function() {
         $('#divImg3Article').toggle(500);  
                 
            });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
});

// afficher les sous categories au chargement de la page
subcat();

//quand on change de valeur je recupere la valeure de de la categorie et j affiche ses sous sous categories
 $('#selectcategorie').on('change', function(event){

  $('#selectsouscategorie').empty();
subcat();
   

//
    });
//function qui verifie si le json est vide ou pas
  function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}


  //function quiajoute les valeurs a sous categorie
  function subcat() {
    var id= $('#selectcategorie').val();
  // alert(id)
  $.get('rechercheSousCategorie',function(data){
    console.log(data);
  });

  $.post('rechercheSousCategorie',{id:id},function(data){
    var obj = JSON.parse(data);
    if(!isEmpty(obj)){
   console.log(obj[0].id);
    $('#divSouscategorie').show(500);  
   $.each (obj ,function(index,souscategorie){

    $('#selectsouscategorie').append('<option value = '+souscategorie.id+'>'+souscategorie.libelle+'</option');

   });
}else{$('#divSouscategorie').hide(500);  }

    
  });
}
  });
    </script>

</body>
 
</html>
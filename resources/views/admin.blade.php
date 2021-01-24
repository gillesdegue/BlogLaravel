<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
     <link rel="shortcut icon" type="image/x-icon" href="/storage/app/public/imagesArticles/analytics.png" />
    <title>Administration</title>
    <style type="text/css">
        .pagination li
        {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: 0px;
            margin-right: 5px;
            line-height: 1.25;
            color: #71748d;
            background-color: #fff;
            border: 1px solid #e6e6f2;
            border-radius: 3px;
            line-height: 1;
        }
        .pagination li:hover
        {
            z-index: 2;
            color: #fff;
            text-decoration: none;
            background-color: #5969ff;
            border-color: #5969ff;
        }
        .pagination li.active .page-link
        {
            z-index: 1;
            color: #fff;
            background-color: #5969ff;
            border-color: #5969ff;
        }
    </style>
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
                                <a class="nav-link active" href="{{ route('home') }}"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Tableau De Bord </a>
                                
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Tableau De Bord Du Blog </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tableau De Bord</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Nombre d'articles</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$allArticles->count()}}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Nombre de vues totale</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$allArticles->sum('vues')}}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Gestion </h5>
                                        <div class="metric-value d-inline-block" style="width: 100%;height: 100%">
                                            
                                            <a href="{{ route('htags') }}">
                                              <button id="ArticleHtags" style="width: 100%;height: 100%" type="button" class="btn">Htags</button>  
                                              </a> 
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Gestion</h5>
                                        <div class="metric-value d-inline-block" style="width: 100%;height: 100%">
                                            
                                            <a href="{{ route('categories') }}">
                                              <button id="ArticleHtags" style="width: 100%;height: 100%" type="button" class="btn">Categories</button>  
                                              </a> 
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                      
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                    
                            <div id="articles" class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                @if (session('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                <div class="card">
                                    
                                        <h5  class="card-header">Articles</h5>
                                         <div style="margin-left: 50%;width: 50%;">
                                    <form class="needs-validation" novalidate method="post" action="{{ route('rechercheArticle') }}" enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                         <input style="width: 78%;" id="researchA" name="researchA"  class="form-group" type="text" placeholder="Search..">
                                         <button  style="width: 20%;" class="form-group" type="submit">rechercher</button>
                                    </form>
                                  </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Titre</th>
                                                        <th class="border-0">Vues </th>
                                                        <th class="border-0">Date d'ajout</th>
                                                        <th class="border-0">Date de derniere modification</th>
                                                        <th class="border-0">modifier</th>
                                                        <th class="border-0">supprmier</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=0; ?>
                                                 @foreach ($articles as $article)
                                                 <?php $i++; ?>
                                                  <tr>
                                                        <td> <?= $i ?></td>
                                                        <td>
                                                            {{$article->titre}}
                                                        </td>
                                                        <td>{{$article->vues}}</td>
                                                        <td>{{$article->created_at}}</td>
                                                        <td>{{$article->updated_at}}</td>
                                                        <td><a href="{{'/article/'.$article->titre}}">
                                                            <button id="" idr="" class="btn btn-info btn-edit" type="button"   style="width: 70%;">modifier</button>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <button id="suppers" idr="{{$article->id}}" class="btn btn-danger btn-space" class="supers" type="button" style="width: 70%;"data-toggle="modal" data-target="#suppArticles"><i class="fas fa-trash-alt"></i></button>
                                                        
                                                        </td>
                                                       
                                                    </tr>
                                                 @endforeach
                                                   
                                                    <tr>
                                                        <td  colspan="9"><span href="#" class="float-right">{{$articles->links()}}</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--
                                *****************************************************
                            tableau des htags
                            **********************************************************
                              -->
                    
  
               
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            
                        </div>
                        

                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
 		

            <!-- ============================================================== -->
            <!-- *******************************************************
                    pop up modification htag
            ************************************************************ -->
            <!-- ============================================================== --> 
        </div>
       
                  <!-- ============================================================== -->
            <!-- *******************************************************
                    pop up suppresion htag
            ************************************************************ -->
            <!-- ============================================================== --> 
        
     
              <!-- ============================================================== -->
            <!-- *******************************************************
                    pop up suppresion article
            ************************************************************ -->
            <!-- ============================================================== --> 

            <div class="modal fade" id="suppArticles" role="dialog">
                    <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                    <h4 class="modal-title">Fermer</h4>
                    </div>
                    <div class="modal-body">
                        
                        
                        <span style="margin-left: 5%;">vous etes sur de vouloir supprimer cet article?</span><br>
                        <form id="<?= $i ?>" method="post" action="{{ route('suprimerArticle') }}">
                            {{ csrf_field() }}
                      <input type="hidden" name="idSupArticle" id="idSupArticle"> 
                     <button id="btnsupArticle"  class="btn btn-info btn-edit form-group" type="submit"   style="width: 45%;margin-left: 5%;">confirmer</button>
                    
                     <button id="suppers" class="btn btn-danger form-group" class="supers" type="button" style="width: 45%;" data-dismiss="modal">
                       annuler
                     </button>
                    </form>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">close</button>
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
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>

    
    <script>
        //ici on gere les hode show et toggle
    $(document).ready(function() {
//envoi des paramettres du tableau au pop up
$('.btn-edit').click(function(){
    var row_id = $(this).attr("id");
    var row_libelle = $(this).attr("idr");
    $('#id_tags').val(row_id);
    $('#tag_libelle').val(row_libelle);

});
var row_id ;

$('.btn-space').click(function(){
  row_id   = $(this).attr("idr");
  $('#idSupArticle').val( row_id);

});



        
     
    });
    </script>
</body>
 
</html>
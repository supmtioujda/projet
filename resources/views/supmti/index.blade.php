<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Management</title>
    
    <script src="{{ asset ("/assets/lib/angular/angular.js") }}" ></script>
    <script src="{{ asset ("/assets/lib/angular-route/angular-route.js") }}" ></script>
    <script src="{{ URL::asset('assets/lib/app.js') }}"></script>
    <script src="{{ URL::asset('assets/js/ng-file-upload.js') }}" ></script>
    <script src="{{ URL::asset('assets/js/dist/ngMask.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-controllers/StudentController.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-controllers/profsController.js') }}"></script>

    
    <link href="{{ URL::asset('assets/css/form.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  
    <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-table.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('assets/js/lumino.glyphs.js') }}"></script>


    <!--[if lt IE 9]>
    <script src="{{ URL::asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body class="ng-scope" ng-app="sampleApp">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Sup</span>MTI</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                        User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">
                                <svg class="glyph stroked male-user">
                                    <use xlink:href="#stroked-male-user"></use>
                                </svg>
                                Profile</a></li>
                        <li><a href="#">
                                <svg class="glyph stroked gear">
                                    <use xlink:href="#stroked-gear"></use>
                                </svg>
                                Settings</a></li>
                        <li><a href="#">
                                <svg class="glyph stroked cancel">
                                    <use xlink:href="#stroked-cancel"></use>
                                </svg>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="col-lg-offset-1">
        <img src="{{ URL::asset('assets/img/logo.png') }}" class="img-responsive img_logo">
    </div>
    <!--<form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>-->
    <ul class="nav menu">
        <li class="active"><a href="#">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Tableau de Bord</a></li>
        <li><a href="#students" class="clickMenu">
                <svg class="glyph stroked calendar">
                    <use xlink:href="#stroked-calendar"></use>
                </svg>
                Etudiants</a></li>
        <li><a href="#profs" class="clickMenu">
                <svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg>
                Professeurs</a></li>
        <li><a href="#modules" class="clickMenu">
                <svg class="glyph stroked table">
                    <use xlink:href="#stroked-table"></use>
                </svg>
                Modules</a></li>
        <li><a href="#salarier" class="clickMenu">
                <svg class="glyph stroked pencil">
                    <use xlink:href="#stroked-pencil"></use>
                </svg>
                Salarier</a></li>
        <li><a href="#addpanels" class="clickMenu">
                <svg class="glyph stroked app-window">
                    <use xlink:href="#stroked-app-window"></use>
                </svg>
                Unknown </a></li>
        <li><a href="#addicons" class="clickMenu">
                <svg class="glyph stroked star">
                    <use xlink:href="#stroked-star"></use>
                </svg>
                Unknown</a></li>
        <li class="parent ">
            <a href="#">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
                        <use xlink:href="#stroked-chevron-down"></use>
                    </svg></span> Dropdown
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right"></use>
                        </svg>
                        Sub Item 1
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right"></use>
                        </svg>
                        Sub Item 2
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right"></use>
                        </svg>
                        Sub Item 3
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="pages/login.html">
                <svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-male-user"></use>
                </svg>
                Login Page</a></li>
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" ng-view>

</div>
<footer>
    <div class="text-right">
        Realise par les Etudiants <span class="spa1">SUP</span><span class="spa2"> MTI</span> Oujda 2015 - 2016
    </div>
</footer>

<script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-table.js') }}"></script>
<script src="{{ URL::asset('assets/js/chart.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/chart-data.js') }}"></script>
<script src="{{ URL::asset('assets/js/easypiechart.js') }}"></script>
<script src="{{ URL::asset('assets/js/easypiechart-data.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-datepicker.js') }}"></script>


</body>

</html>

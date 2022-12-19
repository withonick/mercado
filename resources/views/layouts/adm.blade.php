<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Панель управление</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{asset('admin/richtexteditor/rte_theme_default.css')}}" />
    <script type="text/javascript" src="{{asset('admin/richtexteditor/rte.js')}}"></script>
    <script type="text/javascript" src='{{asset('admin/richtexteditor/plugins/all_plugins.js')}}'></script>

    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.gstatic.com')}}" rel="preconnect">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('adm.index')}}" class="logo d-flex align-items-center">
            <img src="{{asset('admin/assets/img/logo.png')}}" alt="">
            <span class="d-none d-lg-block">Управление</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

</header><!-- End Header -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('adm.index')}}">
                <i class="bi bi-grid"></i>
                <span>Главная страница</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Управление продуктами</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('adm.products.index')}}">
                        <i class="bi bi-circle"></i><span>Все продукты</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('adm.category.index')}}">
                        <i class="bi bi-circle"></i><span>Категории</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('adm.products.create')}}">
                        <i class="bi bi-circle"></i><span>Добавить продукт</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Управление пользователями</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('adm.users.index')}}">
                        <i class="bi bi-circle"></i><span>Все пользователи</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('adm.roles.index')}}">
                        <i class="bi bi-circle"></i><span>Роли</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('index')}}">
                <i class="bi bi-question-circle"></i>
                <span>Вернуться в сайт</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('adm.coupon.index')}}">
                <i class="bi bi-question-circle"></i>
                <span>Купоны</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('adm.offer.index')}}">
                <i class="bi bi-question-circle"></i>
                <span>Предложение недели</span>
            </a>
        </li>
    </ul>

</aside>


<main id="main" class="main">
    @yield('content')
</main>


<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Mercado</span></strong>. All Rights Reserved
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('admin/assets/js/main.js')}}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Посты</title>
    <!--

    Template 2085 Neuron

    http://www.tooplate.com/view/2085-neuron

    -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
    <div class="sk-spinner sk-spinner-wordpress">
        <span class="sk-inner-circle"></span>
    </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">Neuron</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
                @auth
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li><a href="{{ route('logout') }}">Log Out</a></li>
                @else
                    <li>
                        <a href="{{ route('login') }}"
                           class="
                           font-semibold
                           text-gray-600
                           hover:text-gray-900
                           dark:text-gray-400
                           dark:hover:text-white
                           focus:outline
                           focus:outline-2
                           focus:rounded-sm
                           focus:outline-red-500"
                        >Log in</a></li>
                    <li>
                        <a href="{{ route('register') }}"
                           class="
                           ml-4
                           font-semibold
                           text-gray-600
                           hover:text-gray-900
                           dark:text-gray-400
                           dark:hover:text-white
                           focus:outline
                           focus:outline-2
                           focus:rounded-sm
                           focus:outline-red-500"
                        >Register</a></li>
                @endauth
            </ul>
        </div>

    </div>
</div>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Hello! This is Neuron.</h1>
                <h4>Responsive Blog HTML CSS Website Template</h4>
                <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
            </div>

        </div>
    </div>
</section>

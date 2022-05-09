
<!DOCTYPE HTML>
<html lang="en">

<!-- Ivan/  03:29:43 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/apple-touch-icon-114x114.png') }}">
<title>{{ $first_name[0] }} - Portofolio</title>

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&amp;display=swap" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
</head>
<body>
<div class="animsition">
<div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>

<div class="click-capture"></div>

<div class="menu">
<span class="close-menu icon-cross2 right-boxed"></span>
<ul class="menu-list right-boxed">
<li data-menuanchor="home">
<a href="#home">Home</a>
</li>
<li data-menuanchor="about">
<a href="#about">About</a>
</li>
<li data-menuanchor="resume">
<a href="#resume">Resume</a>
</li>
<li data-menuanchor="clients">
<a href="#clients">Clients</a>
</li>
<li data-menuanchor="projects">
<a href="#projects">Projects</a>
</li>
<li data-menuanchor="contact">
<a href="#contact">Contact</a>
</li>
</ul>
<div class="menu-footer right-boxed">
<div class="social-list">
    <a href={{ $twitter }} class="icon ion-social-twitter"></a>
    <a href={{ $facebook }} class="icon ion-social-facebook"></a>
    <a href={{ $instagram }} class="icon ion-social-instagram"></a>
    <a href={{ $linked }} class="icon ion-social-linkedin"></a>
</div>
</div>
</div>

<header class="navbar boxed">
<div class="navbar-bg"></div>
<a class="brand" href="#">
<img class="brand-img" alt="" src="{{ asset('assets/images/brand.png') }}">
<div class="brand-info">
<div class="brand-name">{{ $first_name[0] }}</div>
<div class="brand-text">personal</div>
</div>
</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="contacts d-none d-md-block">
<div class="contact-item">
<a href="https://wa.me/6282113032503"><span>{{ $phone_number }}</span></a>
</div>
<div class="contact-item spacer">
/
</div>
<div class="contact-item">
<a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><span>{{ $email }}</span></a>
</div>
</div>
</header>
<div class="copy-bottom white boxed">© {{ $name }} {{ $now }}.</div>
<div class="social-list social-list-bottom boxed">
<a href={{ $twitter }} class="icon ion-social-twitter"></a>
<a href={{ $facebook }} class="icon ion-social-facebook"></a>
<a href={{ $instagram }} class="icon ion-social-instagram"></a>
<a href={{ $linked }} class="icon ion-social-linkedin"></a>
</div>
<div class="pagepiling">
<div data-anchor="home" class="pp-scrollable text-white section section-1">
<div class="scroll-wrap">
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/main.jpg') }});"></div>
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title d-none d-lg-block"><span>Welcome</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row">
<div class="col-md-8 col-lg-6">
<p class="subtitle-top">Welcome To<br>My Personal Website</p>
<h1 class="display-2 text-white"><span class="text-primary">Hello</span> I am<br> {{ $name }}</h1>
{{-- <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube icon ion-ios-play"></a> --}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="about" class="pp-scrollable section section-2">
<div class="scroll-wrap">
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title text-white  d-none d-lg-block"><span>what I do</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row align-items-center">
<div class="col-xl-7">
<div class="experience-box pb-5">
<div class="experience-content">
<div class="experience-number text-texture">{{ $exp }}</div><br class="d-block d-sm-none">
<div class="experience-info">Years<br>Experience<br>Working</div>
</div>
</div>
</div>
<div class="col-xl-5">
<h2 class="title-uppercase"> <span class="text-primary">My</span> Skill</h2>
{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates. --}}
@foreach ($skill as $row)
    <div class="progress-bars">
    <div class="clearfix">
    <div class="number float-left">{{ $row->skill_name }}</div>
    <div class="number float-right">{{ $row->percent }}%</div>
    </div>
    <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: {{ $row->percent }}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </div>
@endforeach    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="resume" class="pp-scrollable text-white section section-3">
<div class="scroll-wrap">
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/resume.jpg') }});"></div>
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title d-none d-lg-block"><span>Resume</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row row-resume">
<div class="col-md-6">
<div class="col-resume">
<h4 class="title-uppercase">Education</h4>
<div class="resume-content">
<div class="resume-inner">
@foreach ($education as $row)
    <div class="resume-row">
    <h6 class="resume-type">{{ $row->degree }} {{ $row->program_study }}</h6>
    <p class="resume-study">{{ $row->university }}, {{ $row->address }}</p>
    <p class="resume-date text-primary">{{ $row->from }} - {{ $row->to }}</p>
    <p class="resume-text">{{ $row->description }}</p>
    </div>
@endforeach 
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="col-resume">
<h4 class="title-uppercase">Experience</h4>
<div class="resume-content">
<div class="resume-inner">
@foreach ($experiences as $row)
    <div class="resume-row">
    <h6 class="resume-type">{{ $row->title }}</h6>
    <p class="resume-study">{{ $row->company }}, {{ $row->address }}</p>
    <p class="resume-date text-primary">{{ $row->from }} - {{ $row->to }}</p>
    <p class="resume-text">{{ $row->description }}</p>
    </div>
@endforeach 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="clients" class="pp-scrollable section section-4">
<div class="scroll-wrap">
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title text-white d-none d-lg-block"><span>Partners</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<h2 class="title-uppercase text-white">Trusted from Clients</h2>
<div class="row row-partners">
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/1.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/2.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/3.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/4.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/5.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/6.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/7.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/8.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/9.png') }}"></div>
</div>
<div class="col-sm-6 col-md-4 col-xl-3 col-partner">
<div class="partner-inner"><img alt="" src="{{ asset('assets/images/partners/10.png') }}"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="projects" class="pp-scrollable text-white section section-5">
<div class="scroll-wrap">
<div class="bg-changer">
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/project1.jpg') }});"></div>
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/project2.jpg') }});"></div>
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/project3.jpg') }});"></div>
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/project4.jpg') }});"></div>
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/project5.jpg') }});"></div>
</div>
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title  d-none d-lg-block"><span>my works</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row">
 <div class="col-md-12">
<h2 class="title-uppercase text-white">LATEST PROJECTS</h2>
<div class="row-project-box row">
@foreach ($project as $row)
    <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
    <a href="project-detail.html" class="project-box">
    <div class="project-box-inner">
    <h5>{{ $row->project_name }}</h5>
    <div class="project-category">{{ $row->from }} - {{ $row->to }} / {{ $row->description }}</div>
    </div>
    </a>
    </div>
@endforeach
</div>
<a href="#" class="h5 link-arrow text-white">view all projects <i class="icon icon-chevron-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="contact" class="pp-scrollable section section-7">
<div class="scroll-wrap">
<div class="section-bg" style="background-image:url({{ asset('assets/images/bg/contact.jpg') }});"></div>
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title text-white d-none d-lg-block"><span>contact</span></div>
<div class="boxed">
<div class="container">
<div class="intro overflow-hidden">
<div class="row">
<div class="col-md-6">
<h2 class="title-uppercase"><span class="text-primary">{{ $city }}</span>, {{ $province }}</h2>
<h5 class="text-muted">Jl. Sosial No.8 A</h5>
<section class="contact-address">
<h3><a class="mail" href="https://mail.google.com/mail/u/0/#inbox?compose=new"> <span>{{ $email }}</span></a></h3>
<h3><a href="https://wa.me/6282113032503"><span>{{ $phone_number }}</span></a></h3>
</section>
</div>
<div class="col-md-6">
<div class="contact-info">
<form class="js-form" novalidate="novalidate">
<div class="row">
<div class="form-group col-sm-6">
<input type="text" name="name" required="" placeholder="Name*" aria-required="true">
</div>
<div class="form-group col-sm-6">
<input type="email" required="" name="email" placeholder="Email*">
</div>
<div class="form-group col-sm-12">
<input type="text" name="subject" placeholder="Subject (Optinal)">
 </div>
<div class="form-group col-sm-12">
<textarea name="message" required="" placeholder="Message*"></textarea>
</div>
<div class="form-group form-group-message col-sm-12">
<span id="success" class="text-primary">Thank You, your message is successfully sent!</span>
<span id="error" class="text-primary">Sorry, something went wrong </span>
</div>
<div class="col-sm-12"><button type="submit" class="btn">Contact me</button></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('assets/js/animsition.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.pagepiling.min.js') }}"></script>

<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
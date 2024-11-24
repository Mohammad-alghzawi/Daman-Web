<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/main.css?v=1628755089081') }}">

  <!-- Favicon and Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/daman_logo-removebg-preview (1).png') }}"/>
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/daman_logo-removebg-preview (1).png') }}"/>
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/daman_logo-removebg-preview (1).png')}}" />
  <link rel="mask-icon" href="{{ asset('dashboard/safari-pinned-tab.svg') }}" color="#00b4b6"/>
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css" rel="stylesheet">


  <meta name="description" content="Admin One - free Tailwind dashboard">

  <!-- Open Graph Meta Tags -->
  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="{{ asset('dashboard/images/repository-preview-hi-res.png') }}">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <!-- Twitter Meta Tags -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="{{ asset('dashboard/images/repository-preview-hi-res.png') }}">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>
</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
   
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item dropdown has-divider">
       
        <div class="navbar-dropdown">
          <a href="profile.html" class="navbar-item">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-settings"></i></span>
            <span>Settings</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-email"></i></span>
            <span>Messages</span>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span>John Doe</span></div>
          <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="profile.html" class="navbar-item">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
       
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
     
      
      
    </div>
  </div>
</nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      DAMAN <b class="font-black"></b>
    </div>
  </div>
  <div class="menu is-menu-main">
  
    <ul class="menu-list">
      <li class="{{ request()->is('dashboard-home*') ? 'active' : '' }}" >
        <a href="{{route('dashboard-home.index')}}">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    
    <ul class="menu-list">
      {{-- <li class="--set-active-tables-html">
        <a href="tables.html">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Tables</span>
        </a>
      </li> --}}
      <li class="--set-active-tables-html">
        <a href="{{ route('about-us.index') }}">
            <span class="icon"><i class="mdi mdi-information"></i></span>
            <span class="menu-item-label">About Us</span>
        </a>
    </li>
    
    <li class="--set-active-tables-html">
        <a href="{{ route('gallary.index') }}">
            <span class="icon"><i class="mdi mdi-image-multiple"></i></span>
            <span class="menu-item-label">Gallery</span>
        </a>
    </li>
    
    <li class="--set-active-tables-html">
        <a href="{{ route('employees.index') }}">
            <span class="icon"><i class="mdi mdi-account-group"></i></span>
            <span class="menu-item-label">Employees</span>
        </a>
    </li>
    <li class="--set-active-tables-html">
        <a href="{{ route('certificates.index') }}">
            <span class="icon"><i class="mdi mdi-certificate"></i></span>
            <span class="menu-item-label">Certificates</span>
        </a>
    </li>
    
    <li class="--set-active-tables-html">
        <a href="{{ route('clients.index') }}">
            <span class="icon"><i class="mdi mdi-account-group"></i></span>
            <span class="menu-item-label">Clients</span>
        </a>
    </li>
    
      {{-- <li class="--set-active-forms-html">
        <a href="forms.html">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Forms</span>
        </a>
      </li> --}}
      <li class="--set-active-profile-html">
        <a href="profile.html">
          <span class="icon"><i class="mdi mdi-account-circle"></i></span>
          <span class="menu-item-label">Profile</span>
        </a>
      </li>
      <li class="--set-active-profile-html">
        <a href="{{ route('admin.index') }}">
            <span class="icon"><i class="mdi mdi-shield-account"></i></span>
            <span class="menu-item-label">Admin</span>
        </a>
    </li>    
      <li>
        <a href="login.html">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          <span class="menu-item-label">Login</span>
        </a>
      </li>
      <li>
     
        <ul>
         
         
        </ul>
      </li>
    </ul>
    
  

  </div>
</aside>

<main class="section main-content">
    @yield('content')
</main>


<script type="text/javascript" src="{{ asset('dashboard/js/main.min.js?v=1628755089081') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{ asset('dashboard/js/chart.sample.min.js') }}"></script>

<!-- Facebook Pixel -->
<script>
  !function(f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function() {
      n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>

</body>
</html>
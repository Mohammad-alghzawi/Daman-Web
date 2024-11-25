<!DOCTYPE html>
<html class="no-js">

<head>
  <title>DAMAN</title>

  <!-- meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/daman_logo-removebg-preview (1).png')}}" />

  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


  <!-- google font -->
  <link
    rel="stylesheet"
    href="http://fonts.googleapis.com/css?family=Kreon:300,400,700" />

  <!-- js -->
  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 

  
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="120">

 

  <div
    id="menu"
    class="navbar navbar-inverse navbar-fixed-top"
    role="navigation">
    <div class="container">
      <div class="navbar-header visible-xs">
        <button
          type="button"
          class="navbar-toggle"
          data-toggle="collapse"
          data-target=".navbar-collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <h2>DAMAN</h2>
        </a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <div class="hidden-xs" id="logo">
          <a href="#header">
            <img style="    height: 64px;width:84px;" src="img/daman_logo-removebg-preview (1).png" alt="" />
          </a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about-us">About Us</a></li>
          <li><a href="#gallary">Gallery</a></li>
          <li><a href="#employees">Employees</a></li>
          <li><a href="#certificates">Certificates</a></li>
          <li><a href="#clients">Clients</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
          <li style="display: none"><a href="#"></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- menu -->

  <div id="header">
    
    <div class="bg-overlay"></div>
    <div class="center text-center">
      <div class="banner">
        <h1 class="">DAMAN</h1>
      </div>
      <div class="subtitle">
        <h4>For Food Supply & Meat Trading</h4>
      </div>
    </div>
    <div class="bottom text-center">
      <a id="scrollDownArrow" href="#about-us"><i class="fa fa-chevron-down"></i></a>
    </div>
  </div>
  <!-- /#header -->

  <div id="about-us" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
      <h2 class="section-title text-center">ABOUT US</h2>
      <p class="lead main text-center">A leading company in the field of meat trading since 2014</p>

      
      <div class="row text-center story">
        @foreach($descriptions as $description)
        <div class="col-sm-4">
          <div class="col-wrapper">
            <div class="icon-wrapper"> <i class="fa fa-briefcase"></i> </div>


            <h3>Who We Are</h3>
            <p>{{ $description->who_we_are }}</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-wrapper">
            <div class="icon-wrapper"> <i class="fa fa-handshake"></i> </div>

            <h3>Why Daman</h3>
            <p><p>{{ $description->why_daman }}</p></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-wrapper">
            <div class="icon-wrapper"> <i class="fa fa-lightbulb"></i> </div>
            <h3>Our Vision</h3>
            <p><p>{{ $description->our_vision }}</p></p>
          </div>
        </div>
        @endforeach
      </div>

    </div>

  </div>






  <div id="gallary" class="parallax light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Our Gallary</h2>
        <p style="color: white;" class="lead main text-center">
            Some images represent what we work with
        </p>

        <div class="row">
            @foreach ($images as $item)
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images">
                        <img src="{{ url('/images/' . $item->image) }}" alt="Gallery Image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section class="ss-style-bottom"></section>
</div>

 




  <!-- start empolyess section  -->

  <div id="employees" class=" pricing">
    <div class="container inner">
      <h2 style="color: black;" class="section-title text-center">Our employees</h2>
      <p style="color: black;" class="lead main text-center">
        About the employees of this company
      </p>

      <div class="row text-center chefs">
        @foreach ($employees as $item)
            
       
        <div class="col-sm-4">
          <div class="col-wrapper">
            <div class="icon-wrapper">
              <img src="{{ url('/images/' . $item->image) }}" alt="Gallery Image">
            </div>
            <h3 style="color: black;">{{$item->name}}</h3>
            <p style="color: black;">
              {{$item->description}}
            </p>
          </div>
        </div>
        {{-- <div class="col-sm-4">
          <div class="col-wrapper">
            <div class="icon-wrapper">
              <img src="img/emlopyees/mohimg.jpg" />
            </div>
            <h3 style="color: black;">mohammad alghzawi</h3>
            <p style="color: black;">
              Web-Developer
            </p>
          </div>
        </div> --}}
        {{-- <div class="col-sm-4">
          <div class="col-wrapper">
            <div class="icon-wrapper">
              <img src="img/emlopyees/mohimg.jpg" />
            </div>
            <h3 style="color: black;">asma</h3>
            <p style="color: black;">
              manager
            </p>
          </div>
        </div> --}}
        @endforeach
      </div>
    </div>
  </div>

  <!-- end employess section  -->


  <div id="certificates" class="pricing">
    <div class="container inner">
      <h2 style="color: black;" class="section-title text-center">Our Certificates</h2>
      <p class="lead main text-center">
        Some of our certificates that we have obtained in this field
      </p>

      <div class="row">
        @foreach ($certificates as $item)
            
       
        <div class="col-md-4 col-sm-6">
          <div class="pricing-item">
            <img class="img-responsive img-thumbnail" src="{{ url('/images/' . $item->image) }}" alt="Gallery Image">
          </div>
        </div>
        {{-- <div class="col-md-4 col-sm-6">
          <div class="pricing-item">
            <img class="img-responsive img-thumbnail" src="img/certifica/c2.jpg" alt="" />
          </div>
        </div> --}}
        {{-- <div class="col-md-4 col-sm-6">
          <div class="pricing-item">
            <img class="img-responsive img-thumbnail" src="img/certifica/c3.jpg" alt="" />
          </div>
        </div> --}}
        {{-- <div class="col-md-4 col-sm-6">
          <div class="pricing-item">
            <img class="img-responsive img-thumbnail" src="img/certifica/c2.jpg" alt="" />
          </div>
        </div> --}}

        {{-- <div class="col-md-4 col-sm-6">
          <div class="pricing-item">
            <img class="img-responsive img-thumbnail" src="img/certifica/c3.jpg" alt="" />
          </div>
        </div> --}}

        {{-- <div class="col-md-4 col-sm-6">
          <div class="pricing-item">
            <img class="img-responsive img-thumbnail" src="img/certifica/c1.jpg" alt="" />
          </div>
        </div> --}}
        @endforeach
      </div>
    </div>
  </div>











  <!-- start clients section -->

  <div id="clients" class="parallax parallax2 facts">
    <div class="container inner">
      <h2 class="section-title text-center">Our Clients</h2>
      <p style="color: white;" class="lead main text-center">We are so proud to work with you</p>

      <div class="row text-center services-3">
        @foreach ($Cimages as $item)
            
       
        <div class="col-sm-3">
          <div class="col-wrapper">
            <img class="icon-border bm10" src="{{ url('/images/' . $item->image) }}" alt="Gallery Image">
          </div>
        </div>
        {{-- <div class="col-sm-3">
          <div class="col-wrapper">
            <div class="icon-border bm10"><img src="img/clien/client1.png" alt=""></i></div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="col-wrapper">
            <div class="icon-border bm10"><img src="img/clien/client3.png" alt=""></i></div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="col-wrapper">
            <div class="icon-border bm10"><img src="img/clien/client1.png" alt=""></i></div>
          </div>
        </div> --}}

        @endforeach
      </div>
    </div>
  </div>

  <!-- end clients section -->



  <!--start contact us section -->
  <div id="contact-us" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
      <h2 class="section-title text-center">Contact Us</h2>
      <p class="lead main text-center"></p>
      <div class="row">
        <div class="col-md-6">
          <form class="form form-table" method="post" action="{{ route('contact.send') }}">
            @csrf
            <div class="form-group">
              <h4>We will be so happy to communicate with you.</h4>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="name">Name</label>
                <input
                  class="form-control hint"
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Name"
                  required />
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="email">Email</label>
                <input
                  class="form-control hint"
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Email"
                  required />
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="phone">Phone</label>
                <input
                  class="form-control hint"
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="Phone"
                  required />
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="subject">Subject</label>
                <input
                  class="form-control hint"
                  type="text"
                  id="subject"
                  name="subject"
                  placeholder="Subject"
                  required />
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12 form-group">
                <label class="sr-only" for="contacts_details">Contacts Details</label>
                <textarea
                  class="form-control hint"
                  id="contacts_details"
                  name="contacts_details"
                  placeholder="Enter your letter here!"
                  required
                  rows="5"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12">
                <button type="submit" class="btn btn-lg btn-custom">Submit</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-5 col-md-offset-1">
          <h3><i class="fa fa-clock-o fa-fw icin-hov"></i>Hours</h3>
          <p>Saturday to Thursday: 8:00 AM - 4:00 PM</p>

          <h3><i class="fa fa-map-marker fa-fw icin-hov"></i>Directions</h3>
          <p>Huwwarah, Irbid, Jordan.</p>

          <h3><i class="fa fa-mobile fa-fw icin-hov"></i>Contacts</h3>
          <p>Email: damantrading.est@gmail.com</p>
          <p>Phone: +962 79600 8333</p>
        </div>
      </div>
    </div>
    <section class="ss-style-bottom"></section>
  </div>

  <div class="volunteer-form">
    @if (Session::has('status'))
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          Swal.fire({
            title: "{{ Session::get('status') == 'Your message has been sent successfully!' ? 'Success' : 'Error' }}",
            text: "{{ Session::get('status') }}",
            icon: "{{ Session::get('status') == 'Your message has been sent successfully!' ? 'success' : 'error' }}",
            showConfirmButton: true,
            confirmButtonText: "OK",
          });
        });
      </script>
    @endif
  </div>
  <!-- contact us end section -->




  <!-- start footer section -->

  <footer id="footer" class="dark-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
      <div class="footer-grid">
        <!-- About Us Section -->
        <div class="footer-section about-us">
          <h2 style="font-weight: bolder; font-size: 25px">About Us</h2>
          <p class="hovv" style="font-size: 13px">
            DAMAN.EST For Food Supply & Meat Trading, a subsidiary of Al Saadi
            Group, is a premier organization specializing in the trade of food
            products and meats. Founded in Jordan in 2014, our establishment
            takes pride in distributing and supplying high-quality chilled and
            frozen meats in Amman and the northern regions of Jordan.
          </p>
        </div>

        <!-- Get in Touch Section -->
        <div class="footer-section get-in-touch">
          <h2 style="font-weight: bolder; font-size: 25px">Get in Touch</h2>
          <ul class="hov" style="font-size: 13px; padding: 5px">
            <li style="margin-bottom: 10px">
              <i class="fas fa-envelope" style="margin-right: 5px"></i>damantrading.est@gmail.com
            </li>
            <li style="margin-bottom: 10px">
              <i class="fas fa-map-marker-alt" style="margin-right: 5px"></i>Huwwarah, Irbid, Jordan.
            </li>
            <li style="margin-bottom: 10px">
              <i class="fas fa-phone" style="margin-right: 5px"></i>+962 7
              9600 8333
            </li>
          </ul>
        </div>

        <!-- Logo/Image Section -->
        <div class="footer-section logo">
          <img
            src="img/daman_logo-removebg-preview (1).png"
            alt="Company Logo" />
        </div>
      </div>

      <!-- Social Media and Copyright Section -->
      <div class="footer-bottom">
        <div class="hovv" class="col-sm-6">
          &copy;2024 Daman.EST . All rights reserved.
        </div>
        <div class="col-sm-6">
          <div class="social-bar">
            <a
              href="https://www.instagram.com/daman.est?igsh=a2M5dXBmdHl3Yjdy"
              class="fab fa-instagram tooltipped"
              title="Instagram"></a>
            <a
              href="https://www.facebook.com/profile.php?id=100090060789751&mibextid=kFxxJD"
              class="fab fa-facebook-square tooltipped"
              title="Facebook"></a>
            <a
              href="https://www.linkedin.com/company/daman-for-food-supply-and-meat-trading/?viewAsMember=true"
              class="fab fa-linkedin tooltipped"
              title="LinkedIn"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer section -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
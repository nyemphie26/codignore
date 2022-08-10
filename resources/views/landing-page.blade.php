
<!--
=========================================================
 Paper Kit 2 - v2.2.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-kit-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-kit-2/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ setting('site.title') }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />
  <link href="../css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ env('APP_URL') }}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
          {{ setting('site.title') }}
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a href="../index.html" class="nav-link"><i class="nc-icon nc-layout-11"></i> Components</a>
          </li>
          <li class="nav-item">
            <a href="https://demos.creative-tim.com/paper-kit-2/docs/1.0/getting-started/introduction.html" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> Documentation</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fa fa-twitter"></i>
              <p class="d-lg-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header" data-parallax="true" style="background-image: url('{{ asset('storage/img/daniel-olahh.jpg') }}');">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="motto text-center">
          <h1>CODIGNORE</h1>
          <h3>You can (never) ignore your code</h3>
          <br />
          <a href="#firstSection" class="btn btn-outline-neutral btn-round">My Projects</a> &nbsp;
          <a href="#secondSection" class="btn btn-outline-neutral btn-round">About Me</a>
        </div>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('{{ asset('storage/img/clouds.png') }}'); "></div>
  </div>
  <div class="main">
    <div class="section text-center" id="firstSection">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">The Portfolio</h2>
            <h5 class="description">Who's need oldschool brochure?. Yes, this is my brochure in another way. Some of my project which made by me.</h5>
            <br>
            <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>
          </div>
        </div>
        <br/>
        <br/>
        <div class="row justify-content-center">
          @foreach ($categories as $item)
            <div class="col-md-3">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="{{ $item->icon }}"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ $item->title }}</h4>
                  <p class="description">{{ $item->desc }}</p>
                  <a href="{{ route('blog.browse',[$item->slug]) }}" class="btn btn-link btn-danger">See more</a>
                </div>
              </div>
            </div>
          @endforeach
          {{-- <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-bulb-63"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Web Blog</h4>
                <p>Simple yet More intuitive web page, contains CRUD page.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-chart-bar-32"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Web App Page</h4>
                <p>Larger. More complex project.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-sun-fog-29"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Delightful design</h4>
                <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">See more</a>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="section section-dark text-center" id="secondSection">
      <div class="container">
        <h2 class="title">Let's talk about me</h2>
        <div class="row justify-content-md-center">
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="{{ asset('storage/img/faces/clem-onojeghuo-3.jpg') }}" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Syarif Hidayatullah</h4>
                    <h6 class="card-category">Freelance Web Developer</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  Fullstack Developer since 2017.<br>Artisan Web Developer w/ Laravel framework <br>Fluent with HTML, CSS, JAVASCRIPT, MYSQL, POSTGRESQL.
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="{{ asset('storage/img/faces/joe-gardner-2.jpg') }}" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Sophie West</h4>
                    <h6 class="card-category">Designer</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#avatar">
                  <img src="{{ asset('storage/img/faces/erik-lucatero-2.jpg') }}" alt="...">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Robert Orben</h4>
                    <h6 class="card-category">Developer</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
                </p>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="section landing-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center">Keep in touch?</h2>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <label>Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <label>Message</label>
              <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                  <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer   footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
          </span>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../js/core/jquery.min.js" type="text/javascript">
  </script>
  <script src="../js/core/popper.min.js" type="text/javascript"></script>
  <script src="../js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../js/plugins/moment.min.js"></script>
  <script src="../js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="../js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script>
    $(document).ready(function() {
      $("a[href*=#]").click(function(event){     
          event.preventDefault();
          $('html, body').animate({scrollTop: $(this.hash).offset().top}, 0);
      });
      // document ready  
    });
    </script>
</body>

</html>

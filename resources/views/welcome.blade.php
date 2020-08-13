
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OpottoTechy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/page.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/font.css') }}" rel="stylesheet">

    </head>
    <body>
          <!-- Header -->
    <header class="header text-white h-fullscreen bg-fixed" data-scrim-top="8" style="background-image: url({{asset('theme/img/banner.png')}})">
        <div class="overlay opacity-10" style="background-color: #563d7c"></div>

        <div class="container text-center">

          <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">

            <p><img src="{{asset('theme/logo/bootstrap.png')}}" alt="logo"></p>
            <h1 class="display-4 fw-500">Built For <span class="fw-400 pl-2" data-typing="Startups, Entrepreneurs, All Businesses" data-type-speed="80"></span></h1>
            <p class="lead mt-5 mb-3 mb-md-9 w-80 ml-8"><strong>OpottoTechy</strong> All you need is your idea and we will handle the rest.</p>
              {{-- <h1 class="display-4 my-6"><strong>TheSaaS</strong></h1>
              <p class="lead-3">The <b>most popular</b> HTML, CSS, and JS <b>framework</b> in the world for building responsive, mobile-first projects <b>on the web</b>.</p> --}}

              <hr class="w-80px">

              <p>
                <a class="btn btn-xl btn-round btn-outline-light w-250" href="#">View our services</a>
                <br>
                <span class="opacity-60 small-3"></span>
              </p>

            </div>
          </div>

        </div>
      </header><!-- /.header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark " data-navbar="sticky">
        <div class="container">

            <div class="navbar-right">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
                <img class="logo-dark" src="{{asset('theme/logo/logo-dark.png')}}" alt="logo">
                <img class="logo-light" src="{{asset('theme/logo/logo-light.png')}}" alt="logo">
            </a>
            </div>

            <section class="navbar-mobile">
            <nav class="nav nav-navbar ml-auto">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Services</a>
                <a class="nav-link" href="#">Inquiry</a>
                <a class="nav-link" href="#contact">Contact</a>
                <a class="nav-link" href="{{route('services.create')}}">Admin</a>
            </nav>
            </section>

        </div>
        </nav><!-- /.navbar -->

<!-- Main Content -->
<main class="main-content">

    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Features
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section id="section-features" class=" mt-lg-8 ">
        <header class="section-header">
            <small>Services</small>
                <h2>All In One</h2>
                <hr>
                <p class=" lead">Below are some of the services our team offers.</p>
        </header>
    </section>
    @foreach ($services as $service)
    <span class=" invisible ">{{$number = $loop->iteration}}</span>

    @if ($number % 2 == 0)
    <section class="section overflow-hidden">
        <div class="container-fluid">
          <div class="row gap-y align-items-center">

            <div class="col-md-4 mx-auto text-center">
              <img class="border shadow-7" src="{{asset($service->image)}}" alt="..." data-aos="fade-left">
            </div>


            <div class="col-md-4 mx-auto order-md-first">
              <h3>{{$service->title}}</h3>
              <p>{{$service->description}}</p>
            </div>

          </div>
        </div>
      </section>
    @else

    <section class="section bg-gray overflow-hidden">
        <div class="container-fluid">
          <div class="row gap-y align-items-center">

            <div class="col-md-4 mx-auto text-center">
            <img class="border shadow-7" src="{{asset($service->image)}}" alt="..." data-aos="fade-right">
            </div>


            <div class="col-md-4 mx-auto">
              <h3>{{$service->title}}</h3>
              <p>{{$service->description}}</p>
            </div>

          </div>
        </div>
      </section>

    @endif


    @endforeach

    <div class="container text-center ">
        <a class="btn btn-lg btn-primary btn-primary shadow-3 mb-2" href="#">View all services</a>

    </div>



     <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Inquiry Form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section text-white mt-5 bg-fixed " style="background-image: url({{asset('theme/img/bg2.png')}})" data-overlay="3" >
        <div class="container">
            <header class="section-header">
                <small>Inquiry</small>
                <h2>Let's Talk</h2>
                <hr>
                <p class=" lead">Let our team know more about what you would like.</p>
            </header>


          <div class="row">
            <div class="col-md-10 mx-auto">

                <form action="{{route('inquiry.store')}}" class=" input-transparent" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" placeholder="eg: John Doe" id="name" class=" form-control {{$errors->has('name') ? 'is-invalid' : ''}}">

                         @if ($errors->has('name'))
                             <div class="invalid-feedback">
                                         <strong>{{$errors->first('name')}}</strong>
                                     </div>
                         @endif
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="eg: joe@rem.com" class=" form-control {{$errors->has('email') ? 'is-invalid' : ''}}">
                        @if ($errors->has('email'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('email')}}</strong>
                                </div>
                    @endif
                      </div>

                      <div class="form-group">
                        <label for="telephoneNumber">Telephone number</label>
                        <input type="number" name="telephoneNumber" id="telephoneNumber" value="{{old('telephoneNumber')}}" placeholder="eg: 07######## (Optional)" class=" form-control {{$errors->has('telephoneNumber') ? 'is-invalid' : ''}}">
                        @if ($errors->has('telephoneNumber'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('telephoneNumber')}}</strong>
                                </div>
                        @endif
                      </div>


                      <div class="form-group">
                        <label for="service">Service Category</label>
                        <select class=" form-control {{$errors->has('service') ? 'is-invalid' : ''}}" name="service" id="service">
                              @foreach ($services as $service)
                        <option class=" mt-3 " data-toggle="tooltip" data-placement="bottom" title="{{$service->description}}" value="{{$service->title}}">{{$service->title}}</option>
                              @endforeach
                          </select>
                          @if ($errors->has('service'))
                             <div class="invalid-feedback">
                                         <strong>{{$errors->first('service')}}</strong>
                                     </div>
                         @endif
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                    <textarea name="description" value="{{old('description')}}" placeholder="Describe the service that you would want. (optional)" id="description" cols="5" rows="5" class=" form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}</textarea>

                        @if ($errors->has('description'))
                            <div class="invalid-feedback">
                                        <strong>{{$errors->first('description')}}</strong>
                                    </div>
                        @endif
                    </div>


                      <div class="form-group">
                        <label for="budget">Budget</label>
                        <select class=" form-control {{$errors->has('budget') ? 'is-invalid' : ''}}"name="budget" id="budget">
                              <option class=" mt-3 ">Budget</option>
                              <option class=" mt-3 " value="ksh1 To ksh1000">Between ksh1 to ksh1000</option>
                              <option class=" mt-3 " value="ksh1000 To ksh5000">Between ksh1000 to ksh5000</option>
                              <option class=" mt-3 " value="ksh5000 To ksh20,000">Between ksh5000 to ksh20,000</option>
                              <option class=" mt-3 " value="ksh20,000 To ksh50,000">Between ksh20,000 to ksh50,000</option>
                              <option class=" mt-3 " value="Above Ksh50,000">Above ksh50,000</option>
                          </select>
                          @if ($errors->has('budget'))
                             <div class="invalid-feedback">
                                         <strong>{{$errors->first('budget')}}</strong>
                                     </div>
                         @endif
                      </div>

                      <div class="form-group text-center">
                          <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                      </div>

                </form>
            </div>
          </div>


        </div>
      </section>


       <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Contact us
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->

      <section class=" contact section bg-gray">
        <div class="container">

          <div class="row gap-y">
            <div class="col-lg-6">
              <h3>Poke Us</h3>
              <p>Give us a call or stop by our door anytime, we try to answer all enquiries within 24 hours on business days.</p>
              <br>
              <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contactname">Name</label>
                        <input placeholder="Name" type="text" name="contactname" id="tellNo" value="{{old('contactname')}}"  class="form-control {{$errors->has('contactname') ? 'is-invalid' : ''}}">
                        @if ($errors->has('contactname'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('contactname')}}</strong>
                                </div>
                        @endif
                      </div>
                      <div class="form-group col-md-6">
                        <label for="contactemail">Email</label>
                        <input type="email" name="contactemail" id="contactemail" value="{{old('contactemail')}}" placeholder="Email" class=" form-control {{$errors->has('contactemail') ? 'is-invalid' : ''}}">
                        @if ($errors->has('contactemail'))
                        <div class="invalid-feedback">
                                    <strong>{{$errors->first('contactemail')}}</strong>
                                </div>
                    @endif
                      </div>
                </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                    <textarea name="message" value="{{old('message')}}" placeholder="Write your message here." id="message"  rows="5" class=" form-control {{$errors->has('message') ? 'is-invalid' : ''}}">{{old('message')}}</textarea>

                        @if ($errors->has('message'))
                            <div class="invalid-feedback">
                                        <strong>{{$errors->first('message')}}</strong>
                                    </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Submit Message</button>
                    </div>

            </form>


            </div>


            <div class="col-lg-5 ml-auto text-center text-lg-left">
              <hr class="d-lg-none">
              <h3>Find Us</h3>
              <br>
              <p>Nakuru CBD</p>
              <p>+254 #########</p>
              <p>opottotechyspace@gmai.com</p>
              <div class="fw-400">Follow Us</div>
              <div class="social social-sm social-inline">
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </div>

        </div>

      </section>

  </main>

    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('theme/js/page.min.js') }}"></script>
    <script src="{{ asset('theme/js/script.js') }}"></script>

    <!-- -------------------------------Smooth scroll------------------ -->
    <script src="{{ asset("theme/js/smooth-scroll.js") }}"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
  </script>


    @yield('scripts')
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-daterangepicker/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-timepicker/compiled/timepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datetimepicker/datertimepicker.css')}}" />
      <link href="{{asset('lib/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('lib/chart-master/Chart.js')}}"></script>



    <title>GDOCTOR</title>
</head>
<body>
    <body>
        <section id="container">
          <!-- **********************************************************************************************************************************************************
              TOP BAR CONTENT & NOTIFICATIONS
              *********************************************************************************************************************************************************** -->
          <!--header start-->
          <header class="header black-bg">
            <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-theme">4</span>
                    </a>
                  <ul class="dropdown-menu extended tasks-bar">
                    <div class="notify-arrow notify-arrow-green"></div>
                    <li>
                      <p class="green">You have 4 pending tasks</p>
                    </li>
                    <li>
                      <a href="index.html#">
                        <div class="task-info">
                          <div class="desc">Dashio Admin Panel</div>
                          <div class="percent">40%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <div class="task-info">
                          <div class="desc">Product Development</div>
                          <div class="percent">80%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <div class="task-info">
                          <div class="desc">Payments Sent</div>
                          <div class="percent">70%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Complete (Important)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="external">
                      <a href="#">See All Tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-theme">5</span>
                    </a>
                  <ul class="dropdown-menu extended inbox">
                    <div class="notify-arrow notify-arrow-green"></div>
                    <li>
                      <p class="green">You have 5 new messages</p>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                        <span class="subject">
                        <span class="from">Zac Snider</span>
                        <span class="time">Just now</span>
                        </span>
                        <span class="message">
                        Hi mate, how is everything?
                        </span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                        <span class="subject">
                        <span class="from">Divya Manian</span>
                        <span class="time">40 mins.</span>
                        </span>
                        <span class="message">
                        Hi, I need your help with this.
                        </span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                        <span class="subject">
                        <span class="from">Dan Rogers</span>
                        <span class="time">2 hrs.</span>
                        </span>
                        <span class="message">
                        Love your new Dashboard.
                        </span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                        <span class="subject">
                        <span class="from">Dj Sherman</span>
                        <span class="time">4 hrs.</span>
                        </span>
                        <span class="message">
                        Please, answer asap.
                        </span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">See all messages</a>
                    </li>
                  </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">7</span>
                    </a>
                  <ul class="dropdown-menu extended notification">
                    <div class="notify-arrow notify-arrow-yellow"></div>
                    <li>
                      <p class="yellow">You have 7 new notifications</p>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                        Server Overloaded.
                        <span class="small italic">4 mins.</span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="label label-warning"><i class="fa fa-bell"></i></span>
                        Memory #2 Not Responding.
                        <span class="small italic">30 mins.</span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                        Disk Space Reached 85%.
                        <span class="small italic">2 hrs.</span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">
                        <span class="label label-success"><i class="fa fa-plus"></i></span>
                        New User Registered.
                        <span class="small italic">3 hrs.</span>
                        </a>
                    </li>
                    <li>
                      <a href="index.html#">See all notifications</a>
                    </li>
                  </ul>
                </li>
                <!-- notification dropdown end -->
              </ul>
              <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">

                  <li>

                          <a  class="logout" href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>



              </ul>
            </div>
          </header>
          <!--header end-->
          <!-- **********************************************************************************************************************************************************
              MAIN SIDEBAR MENU
              *********************************************************************************************************************************************************** -->
          <!--sidebar start-->
          <aside>
            <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="{{url('profile')}}"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                <h5 class="centered"> </h5>
                <li class="mt">
                  <a class="active" href="{{url('home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                </li>

                  @can('isAdmin')

                  <li>
                  <a href="{{url('allmedecin')}} ">
                    <i class="fa fa-envelope"></i>
                    <span>Chercher médecin </span>
                    <span class="label label-theme pull-right mail-info">2</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('GDOCTOR/listSpecial')}}">
                      <i class="fa fa-map-marker"></i>
                      <span>Gérer les spécialités </span>
                      </a>
                </li>
                <li>
                <a href="{{url('listprofile')}}">
                    <i class="fa fa-map-marker"></i>
                    <span>Gérer le profil </span>
                    </a>
                </li>
                  @endcan



                  @can('isDoc', Model::class)
                <li class="sub-menu">
                  <a href="{{url('fiche/index')}}">
                    <i class="fa fa-desktop"></i>
                    <span>Gérer Fiche_rendez_vous</span>
                    </a>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Consulter les statistiques</span>
                    </a>
                </li>
                <li class="sub-menu">
                  <a href=" {{url ('jour/index')}} ">
                    <i class="fa fa-book"></i>
                    <span>Gérer l’horaire de travail</span>
                    </a>
                </li>
                <li class="sub-menu">
                  <a href="{{url('index')}}">
                    <i class="fa fa-tasks"></i>
                    <span>Gérer les dossiers patients</span>
                    </a>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Consulter l’historique des rendez-vous</span>
                    </a>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;">
                    <i class="fa fa-comments-o"></i>
                    <span>Prendre un rendez-vous</span>
                    </a>
                </li>
                <li>
                  <a href="{{url('appointements/index')}}">
                    <i class="fa fa-map-marker"></i>
                    <span>Consulter l’état des RDV </span>
                    </a>
                </li>
                @endcan


                  <li>
                    <a href="{{url('doctor/show')}}">
                      <i class="fa fa-map-marker"></i>
                      <span>Chercher les médecins </span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
            </div>
          </aside>

@yield('content')


<footer class="site-footer">
  <div class="text-center">
    <p>
      &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
    </p>
    <div class="credits">
      <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
        Licensing information: https://templatemag.com/license/
      -->
      Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
    <a href="advanced_form_components.html#" class="go-top">
      <i class="fa fa-angle-up"></i>
      </a>
  </div>
</footer>
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/jquery.sparkline.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('lib/common-scripts.js')}}"></script>
<script src="{{asset('lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
<!--script for this page-->
<script src="{{asset('lib/sparkline-chart.js')}}"></script>
<script src="{{asset('lib/zabuto_calendar.js')}}"></script>

<script src="{{asset('lib/fullcalendar/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/date.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
  <script src="{{asset('lib/calendar-conf-events.js')}}"></script>

<script src="{{asset('lib/advanced-form-components.js')}}"></script>

</html>

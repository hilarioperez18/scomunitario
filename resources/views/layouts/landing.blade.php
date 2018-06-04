<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>SISCO 1.0</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>SISCO 1.0</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                <li><a href="#desc" class="smoothScroll">Ubicación</a></li>
                <li><a href="#showcase" class="smoothScroll">Reseña</a></li>
                <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>Sistema <b>Comunal <h3>ver 1.0</h3></b></h1>
                <h3><a><b>Consejo Comunal Pedro Pérez Delgado Ámbito B, Comunidad José Gregorio Hernández I</b></a></h3>
                <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">Ingresar</a></h3>
            </div>
  <!--         <div class="col-lg-2">
                <h5>{{ trans('adminlte_lang::message.amazing') }}</h5>
                <p>{{ trans('adminlte_lang::message.basedadminlte') }}</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/img/app-bg.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                <h5>{{ trans('adminlte_lang::message.awesomepackaged') }}</h5>
                <p>... {{ trans('adminlte_lang::message.by') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a> {{ trans('adminlte_lang::message.at') }} <a href="http://acacha.org">acacha.org</a> {{ trans('adminlte_lang::message.readytouse') }}</p>
            </div> --> 
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>Localización Geográfica de la comunidad José Gregorio Hernández I del Consejo Comunal Pedro Pérez Delgado Ámbito B</h1>
            <br>
            <br>
            <div class="col-lg-6">                
                <p>Se encuentra ubicada en el Estado Lara, Municipio Iribarren, Parroquia Juan de Villegas, denominada Comunidad José Gregorio Hernández I Ámbito B, constituida en un ámbito geográfico comprendido por: 11 manzanas, desde la vereda 17 hasta la vereda 20 y desde la calle 1 hasta la calle 3.</p>
            </div>

        </div>
    </div>
</div><!--/ #intro wrap -->
<!-- FEATURES WRAP --> 
    <div class="container">
        <div class="row"></div>            
            <div class="col-lg-6"></div>
                <h4><b>Limita por:</b></h4>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac" id="accordion2"></div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#norte">
                                Norte:
                            </a>
                        </div><!-- /accordion-heading -->
                        <div id="norte" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>Vereda 17, límite con el cono de seguridad y comunidad Ruiz Pineda II.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#sur">
                                Sur:
                            </a>
                        </div>
                        <div id="sur" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Comunidad La Lucha II y comunidad 5 de Julio.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#este">
                                Este:
                            </a>
                        </div>
                        <div id="este" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>José Gregorio Hernández II.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#oeste">
                                Oeste:
                            </a>
                        </div>
                        <div id="oeste" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Comunidad Cerritos Blancos II..</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group   ACOMODAR ESTOS FIN DE LOS DIV --> 
                    <br>
                </div><!-- Accordion -->
            </div>
        </div>
    </div><!--/ .container -->
<!--/ #features -->




<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered"><b>Reseña Histórica de la Comunidad</b></h1>
            <br>
            <div class="col-lg-6" style="color: #ffffff">                
                <p><b>La comunidad tuvo sus inicios en el año 1972 cuando un grupo de personas de otros sectores comenzaron a llegar al lugar que para ese entonces era una zona despoblada que solo la habitaban animales de monte, cardones y cujíes, e hicieron viviendas improvisadas, a medida que fueron llegando más familias comenzaron a dividir los terrenos y ordenar las parcelas. Luego de esto, apareció un señor reclamando los terrenos ya que eran de su propiedad y quería desalojarlos, por tal motivo las personas que hacían vida allí comenzaron a organizarse y le colocaron por nombre al barrio “Luis Herrera Campins” en honor al presidente que gobernaba en ese entonces, esperanzados a que abogara por ellos en la visita que haría a Barquisimeto pero este se negó a brindarles la ayuda, puesto que los terrenos pertenecen al aeropuerto.<br>Al pasar los años conformaron una nueva junta de vecinos donde postularon varios nombres hasta que llegaron al acuerdo de que se llamara José Gregorio Hernández, en la que reubicaron algunas familias hacia la parte sur y se dejó libre un espacio al que se le llamo cono de seguridad del aeropuerto, de esta manera ciertos personajes lograron beneficios para la comunidad como lo fue el servicio de agua, luz, cloacas, entre otros. Actualmente consta de José Gregorio Hernández I y II, de cual el primero se encuentra dividida en dos ámbitos (A y B) debido a la gran cantidad de casas y familias que allí habitan, el ámbito B cuenta con 700 habitantes para un total de 230 familias y 11 manzanas según la información brindada por el Consejo Comunal Pedro Pérez Delgado Ámbito B</b></p>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5 centered">
            <h3><b>Contacto con el Consejo Comunal</b></h3></div>
            <br>
            <div class="col-lg-5">
            <p>
                <b>Ermelinda Castillo</b>, <a>Vocera de Alimentación</a><br/>
                <b>Carlos Rodiguez</b>, <a>Representante UBCH</a><br/>
                <b>Abimael Jaraba</b>, <a>Coordinador UBCH</a><br/>
                <b>Luis Piña</b>, <a>Lider Comunal</a><br/>
                <b>Nayibe Méndez</b>, <a>Vocera UNAMUJER</a><br/>
                <b>Reina Morán</b>, <a>Activador Productivo</a><br/>
                <b>Maryelis Rodriguez</b>, <a>Frente Francisco de Miranda</a><br/>
                <b>Carmen Alvarado</b>, <a>Miembro Comunicador</a><br/>
                <b>Ángel Rodriguez</b>, <a>Coordinador CLAP</a><br/>
            </p>
        </div>
        

        <div class="col-lg-5">            
            <br>
            <p>
                <b>CORREO:</b>
                <a>pedroperezdelgado@gmail.com</a>
            </p>
        </div>

        
    </div>
</div>
<div id="c">
    <div class="container">
        <p>            
            <strong>Copyright &copy; 2018 <a>SISCO 1.0</a>.</strong><!-- {{ trans('adminlte_lang::message.createdby') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. {{ trans('adminlte_lang::message.seecode') }} <a href="https://github.com/acacha/adminlte-laravel">Github</a>  -->         
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>

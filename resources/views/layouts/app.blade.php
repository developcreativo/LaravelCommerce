<!DOCTYPE html>
<html>
<head>
<title>LaravelCommerce | programArte</title>
<!-- 
{!! Html::style('css/default.css') !!}
{!! Html::script('js/tabs.js') !!}
 -->

 {!! Html::style('css/bootstrap.css') !!}
<!-- Custom Theme files -->
<!--theme-style-->
{!! Html::style('css/style.css') !!}
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
{!! Html::style('css/style4.css') !!}
<!--//theme-style-->
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/parallax.min.js') !!}
{!! Html::style('bootstrap-table/bootstrap-table.css') !!}
{!! Html::script('bootstrap-table/bootstrap-table.js') !!}
{!! Html::script('bootstrap-table/locale/bootstrap-table-es-SP.js') !!}
<!--- start-rate---->
{!! Html::script('js/jstarbox.js') !!}
{!! Html::script('js/jstarbox.js') !!}
{!! Html::style('css/jstarbox.css') !!}
{!! Html::style('css/flexslider.css') !!}
{!! Html::style('css/form.css') !!}
{!! Html::script('js/imagezoom.js') !!}
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>
<!-- //End-rate ---->
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
        <div class="head">
            <div class=" logo">
                <a href="{!! url('/') !!}">{!! HTML::image('images/logo.png', '') !!}</a> 
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
        <div class="col-sm-5 col-md-offset-2  header-login">
                    <ul >
                    @if(Auth::guest())
                        <li><a href="{!! url('/auth/login') !!}">Entrar</a></li>
                        <li><a href="{!! url('/auth/register') !!}">Registrar</a></li>
                    @else
                        <li><a href="{!! url('/productos') !!}">{{ Auth::user()->nombre }}</a></li>
                        <li><a href="{!! url('auth/logout') !!}">Salir</a></li>
                    @endif
                    </ul>
                </div>
                
            <div class="col-sm-5 header-social">        
                    <ul >
                        <li><a href="#"><i></i></a></li>
                        <li><a href="#"><i class="ic1"></i></a></li>
                        <li><a href="#"><i class="ic2"></i></a></li>
                        <li><a href="#"><i class="ic3"></i></a></li>
                        <li><a href="#"><i class="ic4"></i></a></li>
                    </ul>
                    
            </div>
                <div class="clearfix"> </div>
        </div>
        </div>
        
        <div class="container">
        
            <div class="head-top">
            
         <div class="col-sm-8 col-md-offset-2 h_menu4">
                <nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.html">Inicio</a></li>
            
            <li class="dropdown mega-dropdown active">
                <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Mujer<span class="caret"></span></a>              
                <div class="dropdown-menu ">
                    <div class="menu-top">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu1</h4>
                                    <ul>
                                        <li><a href="{{ url('products') }}">Accesorios</a></li>
                                        <li><a href="{{ url('products') }}">Pantalones</a></li>
                                        <li><a href="{{ url('products') }}">Capas y sombreros</a></li>
                                        <li><a href="{{ url('products') }}">Ropa deportiva</a></li>
                                        
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu2</h4>
                                <ul>
                                        <li><a href="{{ url('products') }}">Camperas</a></li>
                                        <li><a href="{{ url('products') }}">Jeans</a></li>
                                        <li><a href="{{ url('products') }}">Joyeria</a></li>
                                        <li><a href="{{ url('products') }}">Jumpers y Cardigans</a></li>
                                        <li><a href="{{ url('products') }}">Camperas de cuero</a></li>
                                        <li><a href="{{ url('products') }}">Camisetas manga larga</a></li>
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu3</h4>
                                    <ul>
                                        <li><a href="{{ url('products') }}">Camisas</a></li>
                                        <li><a href="{{ url('products') }}">Zapatos, botas y championes</a></li>
                                        <li><a href="{{ url('products') }}">Lentes de sol</a></li>
                                        <li><a href="{{ url('products') }}">Ropa interior</a></li>
                                        <li><a href="{{ url('products') }}">Trajes de ba&ntilde;o</a></li>                                        
                                    </ul>   
                                
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu4</h4>
                                <ul>
                                    <li><a href="{{ url('products') }}">Camisetas</a></li>
                                    <li><a href="{{ url('products') }}">Ropa interior y calcetines</a></li>
                                    <li><a href="{{ url('products') }}">Chalecos</a></li>
                                    <li><a href="{{ url('products') }}">Camperas y abrigos</a></li>
                                    <li><a href="{{ url('products') }}">Jeans</a></li>
                                    <li><a href="{{ url('products') }}">Joyer&iacute;a</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1 col5">
                        {!! HTML::image('images/me.png', '', ['class' => 'img-responsive']) !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>                  
                </div>              
            </li>
            <li class="dropdown mega-dropdown active">
                <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Hombres<span class="caret"></span></a>                
                <div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu1</h4>
                                    <ul>
                                        <li><a href="{{ url('products') }}">Accesorios</a></li>
                                        <li><a href="{{ url('products') }}">Pantalones</a></li>
                                        <li><a href="{{ url('products') }}">Capas y sombreros</a></li>
                                        <li><a href="{{ url('products') }}">Ropa deportiva</a></li>
                                        
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu2</h4>
                                <ul>
                                        <li><a href="{{ url('products') }}">Camperas</a></li>
                                        <li><a href="{{ url('products') }}">Jeans</a></li>
                                        <li><a href="{{ url('products') }}">Joyeria</a></li>
                                        <li><a href="{{ url('products') }}">Jumpers y Cardigans</a></li>
                                        <li><a href="{{ url('products') }}">Camperas de cuero</a></li>
                                        <li><a href="{{ url('products') }}">Camisetas manga larga</a></li>
                                    </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu3</h4>
                                    <ul>
                                        <li><a href="{{ url('products') }}">Camisas</a></li>
                                        <li><a href="{{ url('products') }}">Zapatos, botas y championes</a></li>
                                        <li><a href="{{ url('products') }}">Lentes de sol</a></li>
                                        <li><a href="{{ url('products') }}">Ropa interior</a></li>
                                        <li><a href="{{ url('products') }}">Trajes de ba&ntilde;o</a></li>                                        
                                    </ul>   
                                
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Submenu4</h4>
                                <ul>
                                    <li><a href="{{ url('products') }}">Camisetas</a></li>
                                    <li><a href="{{ url('products') }}">Ropa interior y calcetines</a></li>
                                    <li><a href="{{ url('products') }}">Chalecos</a></li>
                                    <li><a href="{{ url('products') }}">Camperas y abrigos</a></li>
                                    <li><a href="{{ url('products') }}">Jeans</a></li>
                                    <li><a href="{{ url('products') }}">Joyer&iacute;a</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1 col5">
                        {!! HTML::image('images/me1.png', '', ['class' => 'img-responsive']) !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>                  
                </div>              
            </li>
            <li><a class="color3" href="{{ url('products') }}">Sale</a></li>
            <li><a class="color4" href="404.html">Nosotros</a></li>
            <li ><a class="color6" href="contact.html">Contacto</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->
</nav>
</div>
            <div class="col-sm-2 search-right">
                <ul class="heart">
                <li>
                <a href="wishlist.html" >
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                </a></li>
                <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
                    </ul>
                    <div class="cart box_1">
                        <a href="{{url('checkout')}}">
                        <h3> <div class="total">
                            <span class="simpleCart_total"></span></div>
                            {!! HTML::image('images/cart.png', '') !!}</h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Vaciar carro</a></p>

                    </div>
                    <div class="clearfix"> </div>
                    
                        <!----->

                        <!---pop-up-box---->   
            {!! Html::style('css/popuo-box.css') !!}                   
            {!! Html::script('js/jquery.magnific-popup.js') !!}
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <div class="login-search">
                    <div class="login">
                        <input type="submit" value="">
                        <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">       
                    </div>
                    <p>Shopin</p>
                </div>              
            </div>
         <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });                                                                          
            });
        </script>       
            </div>
            <div class="clearfix"></div>
        </div>  
    </div>  
</div>
           
@yield('content')

<!--//footer-->
<div class="footer">
<div class="footer-middle">
            <div class="container">
                <div class="col-md-3 footer-middle-in">
                    <a href="index.html">{!! HTML::image('images/log.png', '') !!}</a>
                    <p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
                </div>
                
                <div class="col-md-3 footer-middle-in">
                    <h6>Información</h6>
                    <ul class=" in">
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Contactenos</a></li>
                        <li><a href="#">Volver</a></li>
                        <li><a href="contact.html">Mapa del Sitio</a></li>
                    </ul>
                    <ul class="in in1">
                        <li><a href="#">Historial de compras</a></li>
                        <li><a href="#">Lista de deseos</a></li>
                        <li><a href="{{url('/auth/login')}}">Login</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 footer-middle-in">
                    <h6>Tags</h6>
                    <ul class="tag-in">
                        <li><a href="#">Ropa</a></li>
                        <li><a href="#">camisas</a></li>
                        <li><a href="#">pantalon</a></li>
                        <li><a href="#">falda</a></li>
                        <li><a href="#">perfumes</a></li>
                        <li><a href="#">producto</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-middle-in">
                    <h6>Boletín de noticias</h6>
                    <span>Registrate en nuestro boletín de noticias</span>
                        <form>
                            <input type="text" value="Ingrese su Correo" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Ingrese su Correo';}">
                            <input type="submit" value="Suscribirse"> 
                        </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <ul class="footer-bottom-top">
                    <li><a href="#">{!! HTML::image('images/f1.png', '', ['class' => 'img-responsive']) !!}</a></li>
                    <li><a href="#">{!! HTML::image('images/f2.png', '', ['class' => 'img-responsive']) !!}</a></li>
                    <li><a href="#">{!! HTML::image('images/f3.png', '', ['class' => 'img-responsive']) !!}</a></li>
                </ul>
                <p class="footer-class">&copy; 2016 LaravelCommerce. Todos los Derechos Reservados | Dise&ntilde;o por <a href="#" target="_blank">Programarte</a> </p>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! Html::script('js/simpleCart.min.js') !!}
<!-- slide -->
{!! Html::script('js/bootstrap.min.js') !!}
<!--light-box-files -->
{!! Html::script('js/jquery.chocolat.js') !!}

{!! HTML::script('js/jquery.flexslider.js') !!}
        <!--light-box-files -->
        <script type="text/javascript" charset="utf-8">
        $(function() {
            $('a.picture').Chocolat();
        });
        </script>

@yield('scripts')

</body>
</html>
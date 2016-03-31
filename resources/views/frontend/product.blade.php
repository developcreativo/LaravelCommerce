@extends('layouts.app')
@section('content')
<!-- Baner Top -->
<div class="banner-top">
	<div class="container">
		<h1>Productos</h1>
		<em></em>
		<h2><a href="index.html">Inicio</a><label>/</label>Productos</h2>
	</div>
</div>

	<!--content-->
<div class="product">
	<div class="container">
		<!-- Productos -->
		<div class="col-md-9">
			<div class="mid-popular">
			@foreach($productos as $producto)
				<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
						<div class="pro-img">
							<img src="{{ $producto->fotos->first()->ruta_miniatura }}" class="img-responsive" alt="">
							<div class="zoom-icon ">
								<a href="{{ url('/productos/' . $producto->id) }}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
							</div>
						</div>
						<div class="mid-1">
							<div class="women">
								<div class="women-top">
									<span>{{ $producto->categoria->nombre_es }}</span>
									<h6><a href="{{ url('/productos/' . $producto->id) }}">{{ str_limit($producto->titulo_es, 20) }}</a></h6>
								</div>
								<div class="img item_add">
									<a href="#"><img src="/images/ca.png" alt=""></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price">{{ $producto->precioFormateado }}</em></p>
							  	<div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
				<div class="clearfix"></div>
				{!! $productos->render() !!}
			</div>
		</div>

		<!-- slider -->
		<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Categor&iacute;s</h4>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Hombre </a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem2"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem3"><a href="product.html">Sub categor&iacute;a</a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Mujer</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem2"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem3"><a href="product.html">Sub categor&iacute;a</a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Ni&ntilde;os</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem2"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem3"><a href="product.html">Sub categor&iacute;a</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accesorios</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem2"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem3"><a href="product.html">Sub categor&iacute;a</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Zapatos</a>
								<ul class="cute">
									<li class="subitem1"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem2"><a href="product.html">Sub categor&iacute;a</a></li>
									<li class="subitem3"><a href="product.html">Sub categor&iacute;a</a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>

<!--//menu-->
 <section  class="sky-form">
	<h4 class="cate">Descuentos</h4>
	 <div class="row row1 scroll-pane">
		 <div class="col col-4">
				<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Arriba de - 10% (20)</label>
		 </div>
		 <div class="col col-4">
				<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
				<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
				<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
				<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Otros(50)</label>
		 </div>
	 </div>
 </section> 				 				 
				 
					
					 <!---->
					 <section  class="sky-form">
						<h4 class="cate">Tipos</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Carteras  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capas y sombreros (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Camperas y abrigos  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jeans  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Camisas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lentes de sol  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Salidas de ba&ntilde;o  (30)</label>
								</div>
							</div>
				   </section>
				   		<section  class="sky-form">
						<h4 class="cate">Marcas</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Levis</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Persol</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Edwin</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>New Balance</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Paul Smith</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ray-Ban</label>
								</div>
							</div>
				   </section>		
		</div>
			</div class="clearfix"></div>
				<!--products-->
			
			<!--//products-->
		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			</div>
			
		</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="banner-top">
	<div class="container">
		<h1>{{ $producto->categoria->nombre_es }}</h1>
		<em></em>
		<h2><a href="{{ url('/') }}">Inicio</a><label>/</label>Producto</h2>
	</div>
</div>

<div class="single">
	<div class="container">
		<div class="col-md-9">
			<div class="col-md-5 grid">		
				<div class="flexslider">
					<ul class="slides">
						@foreach($producto->fotos as $foto)
							<li data-thumb="{{ $foto->ruta }}">
								<div class="thumb-image"> <img src="{{ $foto->ruta }}" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>	
			<div class="col-md-7 single-top-in">
				<div class="span_2_of_a1 simpleCart_shelfItem">
					<h3>{{ $producto->titulo_es }}</h3>
					<p class="in-para"></p>
		    		<div class="price_single">
			  			<span class="reducedfrom item_price">{{ $producto->precioFormateado }}</span>
			 			<a href="#"> </a>
			 			<div class="clearfix"></div>
					</div>
					<h4 class="quick">Breve resumen:</h4>
					<p class="quick_desc">{!! $producto->descripcion_es !!}</p>
			    	<div class="wish-list">
					 	<ul>
					 		<li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Agregar a lista</a></li>
					 	    <!--<li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>-->
					 	</ul>
				 	</div>
				 	<div class="quantity"> 
						<div class="quantity-select">                           
							<div class="entry value-minus">&nbsp;</div>
							<div class="entry value"><span>1</span></div>
							<div class="entry value-plus active">&nbsp;</div>
						</div>
					</div>
					<!--quantity-->
					<script>
				    $('.value-plus').on('click', function(){
				    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				    	divUpd.text(newVal);
				    });

				    $('.value-minus').on('click', function(){
				    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				    	if(newVal>=1) divUpd.text(newVal);
				    });
					</script>
					<!--quantity-->
			    	<a href="#" class="add-to item_add hvr-skew-backward">Agregar a Carrito</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>

			<div class="tab-head">
				<nav class="nav-sidebar">
					<ul class="nav tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Descripción del Producto</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Product description</a></li> 
						<li class=""><a href="#tab3" data-toggle="tab">Descrição do produto</a></li>  
					</ul>
				</nav>
				<div class="tab-content one">
					<div class="tab-pane active text-style" id="tab1">
 						<div class="facts">
						  	{!! $producto->descripcion_es !!}
				        </div>
					</div>
					<div class="tab-pane text-style" id="tab2">
						<div class="facts">									
							{!! $producto->descripcion_en !!}
				        </div>	
				    </div>
					<div class="tab-pane text-style" id="tab3">
						<div class="facts">
						  	{!! $producto->descripcion_br !!}    
					     </div>	
 					</div>
  				</div>
  				<div class="clearfix"></div>
  			</div>
		</div>
		<!-- Aside -->
		<div class="col-md-3 product-bottom product-at">
		<!-- Aside content -->
		</div>
		<!-- end aside -->
		<div class="clearfix"> </div>
	</div>

	<div class="container">
		<div class="brand">
			<div class="col-xs-12 col-md-3 brand-grid">
				<img src="/images/ic.png" class="img-responsive" alt="">
			</div>
			<div class="col-xs-12 col-md-3 brand-grid">
				<img src="/images/ic1.png" class="img-responsive" alt="">
			</div>
			<div class="col-xs-12 col-md-3 brand-grid">
				<img src="/images/ic2.png" class="img-responsive" alt="">
			</div>
			<div class="col-xs-12 col-md-3 brand-grid">
				<img src="/images/ic3.png" class="img-responsive" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script>
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });
	});
</script>
@endsection
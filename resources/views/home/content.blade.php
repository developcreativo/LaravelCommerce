<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="col-md-6 col-md">
				<div class="col-1">
					<a href="{{url('front/products')}}" class="b-link-stroke b-animate-go  thickbox">
   					<img src="images/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">De Moda</h3></div></a>
				</div>
				<div class="col-2">
					<span>Hot Deal</span>
					<h2><a href="{{url('front/products')}}">&Uacute;ltima Moda</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex placeat eligendi, tempore sunt ipsam cumque quidem illum voluptates, doloremque aliquam, explicabo obcaecati maiores autem saepe molestiae adipisci omnis architecto iusto!</p>
					<a href="{{url('front/products')}}" class="buy-now">Compre Ahora</a>
				</div>
			</div>
			<div class="col-md-6 col-md1">
				<div class="col-3">
					<a href="{{url('front/products')}}"><img src="images/pi1.jpg" class="img-responsive" alt="">
					<div class="col-pic">
						<p>Lorem Ipsum</p>
						<label></label>
						<h5>Hombres</h5>
					</div></a>
				</div>
				<div class="col-3">
					<a href="{{url('front/products')}}"><img src="images/pi2.jpg" class="img-responsive" alt="">
					<div class="col-pic">
						<p>Lorem Ipsum</p>
						<label></label>
						<h5>Ni&ntilde;os</h5>
					</div></a>
				</div>
				<div class="col-3">
					<a href="{{url('front/products')}}"><img src="images/pi3.jpg" class="img-responsive" alt="">
					<div class="col-pic">
						<p>Lorem Ipsum</p>
						<label></label>
						<h5>Damas</h5>
					</div></a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
						<!--products-->
		<div class="content-mid">
			<h3>Ultimos Items</h3>
			<label class="line"></label>
			@foreach($productos->chunk(4) as $set)
				<div class="mid-popular">
				@foreach($set as $producto)
					<div class="col-md-3 item-grid simpleCart_shelfItem">
						<div class=" mid-pop">
							<div class="pro-img">
								<img src="{{ $producto->fotos->first()->ruta }}" class="img-responsive" alt="">
								<div class="zoom-icon ">
								
								<a href="{{ url('/front/products/' . $producto->url) }}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
								</div>
							</div>
							<div class="mid-1">
							<div class="women">
							<div class="women-top">
								<span>{{ $producto->categoria->nombre_es }}</span>
								<h6><a href="{{ url('/productos/' . $producto->id) }}">{{ $producto->titulo_es }}</a></h6>
								</div>
								<div class="img item_add">
									<a href="#"><img src="images/ca.png" alt=""></a>
								</div>
								<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									<p ><em class="item_price">{{ $producto->precioFormateado }}</em></p>
									<div class="block">
										<!-- <div class="starbox small ghosting"> </div> -->
									</div>
									
									<div class="clearfix"></div>
								</div>
								
							</div>
						</div>
					</div>

				@endforeach	
				</div>
					
				<div class="clearfix"></div>
			@endforeach
		</div>
		<!--//products-->
		@include('home.brand')
		</div>
		
	</div>
	<!--//content-->
@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')

	<div class="header">
	<div class="top-header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt="" /> </a>
			<p> Movie Theater</p>
		</div>
		
		<div class="search v-search">
			<form>
				<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
				<input type="submit" value="">
			</form>
		</div>	
		<div class="clearfix"></div>	
		
	</div>		
		

	<div class="header-info">
		<h1> BIG HERO 6 </h1>
		{!! Form::open(['route'=>'log.store','method'=>'POST']) !!}
			<div class="form-group">
			 	{!! Form::label('correo','Correo:') !!}
			 	{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo']) !!}
			</div>
			
			<div class="form-group">
			 	{!! Form::label('contrasena','Contraseña:') !!}
			 	{!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']) !!}
			</div>
		{!! Form::submit('Iniciar',['class'=>'btn btn-primary']) !!}
		{!! Form::close() !!}
		{!!link_to('password/email', $title = 'Olvidaste tu contraseña?'
			,$attributes = null, $secure = null)!!}
	</div>
	</div>	

		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});

		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>		
		
	</div>
	<div class="clearfix"></div>
	</div>
		

	@stop
@extends('layouts.principal')
@section('content')	
	<div class="review-content">

			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>

				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>

				<div class="clearfix"></div>
			</div>


			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
					<div class="col-md-9 reviews-grids">
					
<!--AQUI EMPIEZAN LOS Reviews-->

					@foreach($movies as $movie)
							<div class="review">
							<div class="movie-pic">
							<img src="movies/{{$movie->path}}" alt="" />
							</div>




							<div class="review-info">
								<a class="span" href="single.html"> 
								<i>{{$movie->name}}</i></a>
								<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>								
								<p class="ratingview">Critic's Rating:</p>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<p class="ratingview">
								&nbsp;3.5/5  
								</p>
								<div class="clearfix"></div>
								<p class="ratingview c-rating">Avg Readers' Rating:</p>
								<div class="rating c-rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div> 	
								<p class="ratingview c-rating">								
								&nbsp; 3.3/5</p>
								<div class="clearfix"></div>
								<div class="yrw">
									<div class="dropdown-button">           			
										<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
										<option value="0">Your rating</option>	
										<option value="1">1.Poor</option>
										<option value="2">1.5(Below average)</option>
										<option value="3">2.Average</option>
										<option value="4">2.5(Above average)</option>
										<option value="5">3.Watchable</option>
										<option value="6">3.5(Good)</option>
										<option value="7">4.5(Very good)</option>
										<option value="8">5.Outstanding</option>
									  </select>
									</div>
									<div class="rtm text-center">
										<a href="#">REVIEW THIS MOVIE</a>
									</div>
									<div class="wt text-center">
										<a href="#">WATCH THIS TRAILER</a>
									</div>
									<div class="clearfix"></div>
								</div>


								
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									{{$movie->cast}}</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;
									{{$movie->direction}}</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									{{$movie->genre}}</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 
									{{$movie->duration}}</p>
							</div>
							<div class="clearfix"></div>
						</div>
					@endforeach
		
		@stop
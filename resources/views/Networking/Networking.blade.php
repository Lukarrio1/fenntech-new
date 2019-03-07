@extends('layouts.networking')
{{-- the title of the page goes in this section of the code  --}}
@section('title')
Networking
@endsection
{{-- the main part of the web page goes here --}}
@section('content')<main>
		

	<main>
		<section id="home">
			<!--Mask-->
			<div class="view primary-color">
				<div class="full-bg-img flex-center">
					<ul>
						<li>
							<h1 class="h1-responsive title">Hello.</h1></li>
						<li>
							<p>Scroll down and read more</p>
						</li>
					</ul>
				</div>
			</div>
			<!--/.Mask-->
		</section>

		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 m-t-3 m-b-5">
						<h1 class="h1-responsive">Services</h1>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut ad consequuntur eaque, nemo quidem dolor dicta! Possimus temporibus sequi ab iusto, dignissimos quas sunt laborum, ex natus, <span class="text-primary"><strong>architecto laudantium</strong></span>!</p>
						<div class="row m-t-2">
							<div class="col-md-4 text-xs-center">
								<p class="green-text"><i class="fa fa-bar-chart-o fa-5x" aria-hidden="true"></i></p>
								<h4 class="h4-responsive"><strong>Analytics</strong></h4>
							</div>
							<div class="col-md-4 text-xs-center">
								<p class="purple-text"><i class="fa fa-users fa-5x" aria-hidden="true"></i></p>
								<h4 class="h4-responsive"><strong>Multiple user accounts</strong></h4>
							</div>
							<div class="col-md-4 text-xs-center">
								<p class="red-text"><i class="fa fa-support fa-5x" aria-hidden="true"></i></p>
								<h4 class="h4-responsive"><strong>Full-time support</strong></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="works" class="grey lighten-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12 m-t-3 m-b-3">
						<h1 class="h1-responsive">Works</h1>
						<p class="lead">Atque aut ad consequuntur eaque, nemo quidem dolor dicta! Possimus temporibus sequi ab iusto, <span class="text-primary"><strong>dignissimos quas sunt laborum</strong></span>, ex natus, architecto laudantium!</p>
	
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="view overlay hm-black-light m-b-2">
									<img src="https://mdbootstrap.com/images/regular/nature/img%20(1).jpg" class="img-fluid " alt="">
									<div class="mask flex-center">
										<a href="#!" class="btn btn-info">Learn more</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="view overlay hm-black-light m-b-2">
									<img src="https://mdbootstrap.com/images/regular/nature/img%20(2).jpg" class="img-fluid " alt="">
									<div class="mask flex-center">
										<a href="#!" class="btn btn-info">Learn more</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="view overlay hm-black-light m-b-2">
									<img src="https://mdbootstrap.com/images/regular/nature/img%20(3).jpg" class="img-fluid " alt="">
									<div class="mask flex-center">
										<a href="#!" class="btn btn-info">Learn more</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="view overlay hm-black-light m-b-2">
									<img src="https://mdbootstrap.com/images/regular/nature/img%20(4).jpg" class="img-fluid " alt="">
									<div class="mask flex-center">
										<a href="#!" class="btn btn-info">Learn more</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="view overlay hm-black-light m-b-2">
									<img src="https://mdbootstrap.com/images/regular/nature/img%20(5).jpg" class="img-fluid " alt="">
									<div class="mask flex-center">
										<a href="#!" class="btn btn-info">Learn more</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="view overlay hm-black-light m-b-2">
									<img src="https://mdbootstrap.com/images/regular/nature/img%20(6).jpg" class="img-fluid " alt="">
									<div class="mask flex-center">
										<a href="#!" class="btn btn-info">Learn more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Fixed bg -->

		<div class="fixed-bg"></div>

		<!-- /.Fixed bg -->

		<section id="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 m-t-3 m-b-3">
						<h1 class="h1-responsive">Team</h1>
						<div class="row m-t-2">
							<div class="col-md-3">
								<!--Card-->
								<div class="card m-b-r">
									<!--Card image-->
									<img class="img-fluid" src="https://mdbootstrap.com/images/regular/people/img%20(67).jpg" alt="Card image cap">
									<!--/.Card image-->

									<!--Card content-->
									<div class="card-block text-xs-center">
										<!--Title-->
										<h4 class="card-title">Jane Doe</h4>
										<!--Text-->
										<p class="card-text red-text">Designer</p>
									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							</div>
							<div class="col-md-3">
								<!--Card-->
								<div class="card m-b-r">
									<!--Card image-->
									<img class="img-fluid" src="https://mdbootstrap.com/images/regular/people/img%20(53).jpg" alt="Card image cap">
									<!--/.Card image-->

									<!--Card content-->
									<div class="card-block text-xs-center">
										<!--Title-->
										<h4 class="card-title">John Doe</h4>
										<!--Text-->
										<p class="card-text blue-text">Frontend developer</p>
									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							</div>
							<div class="col-md-3">
								<!--Card-->
								<div class="card m-b-r">
									<!--Card image-->
									<img class="img-fluid" src="https://mdbootstrap.com/images/regular/people/img%20(57).jpg" alt="Card image cap">
									<!--/.Card image-->

									<!--Card content-->
									<div class="card-block text-xs-center">
										<!--Title-->
										<h4 class="card-title">Caren Doe</h4>
										<!--Text-->
										<p class="card-text purple-text">Marketing</p>
									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							</div>
							<div class="col-md-3">
								<!--Card-->
								<div class="card m-b-r">
									<!--Card image-->
									<img class="img-fluid" src="https://mdbootstrap.com/images/regular/people/img%20(68).jpg" alt="Card image cap">
									<!--/.Card image-->

									<!--Card content-->
									<div class="card-block text-xs-center">
										<!--Title-->
										<h4 class="card-title">Chris Doe</h4>
										<!--Text-->
										<p class="card-text green-text">Backend developer</p>
									</div>
									<!--/.Card content-->

								</div>
								<!--/.Card-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="grey lighten-3">
			<div class="container">
				<div class="row">
					<div class="col-md-12 m-t-3 m-b-3">
						<h1 class="h1-responsive">Contact</h1>
						<div class="row m-t-2">
							<div class="col-md-5">
								
								<!--Naked Form-->
								<div class="card-block">

									<!--Body-->
									<div class="md-form">
										<i class="fa fa-user prefix"></i>
										<input type="text" id="form1" class="form-control">
										<label for="form1">Your name</label>
									</div>

									<div class="md-form">
										<i class="fa fa-envelope prefix"></i>
										<input type="text" id="form2" class="form-control">
										<label for="form2">Your email</label>
									</div>

									<div class="md-form">
										<i class="fa fa-pencil prefix"></i>
										<textarea type="text" id="form3" class="md-textarea"></textarea>
										<label for="form3">Your message</label>
									</div>

									<div class="text-xs-center">
										<button class="btn btn-primary"><i class="fa fa-send" aria-hidden="true"></i> Send</button>
									</div>

								</div>
								<!--Naked Form-->

							</div>
							<div class="col-md-7 hidden-sm-down">
								<img src="https://mdbootstrap.com/images/regular/work/img%20(6).jpg" class="img-fluid z-depth-2">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!--Footer-->
	<footer class="page-footer primary-color center-on-small-only">

		<!--Footer Links-->
		<div class="container-fluid">
			<div class="row">

				<!--First column-->
				<div class="col-md-4 offset-md-1">
					<h5 class="title">About us</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, laudantium accusamus suscipit natus voluptates possimus aliquid molestiae, eos iure reprehenderit architecto sed magni eveniet quibusdam, officiis! Iure modi, repellendus tenetur.</p>
				</div>
				<!--/.First column-->

				<!--Second column-->
				<div class="col-md-2">
					<h5 class="title">Links</h5>
					<ul>
						<li><a href="#!">Link 1</a></li>
						<li><a href="#!">Link 2</a></li>
						<li><a href="#!">Link 3</a></li>
						<li><a href="#!">Link 4</a></li>
					</ul>
				</div>
				<!--/.Second column-->

				<!--Third column-->
				<div class="col-md-2">
					<h5 class="title">More links</h5>
					<ul>
						<li><a href="#!">Link 1</a></li>
						<li><a href="#!">Link 2</a></li>
						<li><a href="#!">Link 3</a></li>
						<li><a href="#!">Link 4</a></li>
					</ul>
				</div>
				<!--/.Third column-->

				<!--Fourth column-->
				<div class="col-md-2">
					<h1 class="h1-responsive m-t-2">Your Logo</h1>
				</div>
				<!--/.Fourth column-->
			</div>
		</div>
		<!--/.Footer Links-->

		<!--Copyright-->
		<div class="footer-copyright">
			<div class="container-fluid">
				&copy; 2016 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

			</div>
		</div>
		<!--/.Copyright-->

	</footer>
	<!--/.Footer-->

    <!-- Outro -->
	<section id="outro">
		<div class="container">
			<div class="row text-xs-center p-t-1 p-b-4">
				<div class="col-md-12">
					<br>
					<h3>Built with Material Design for Bootstrap</h3>
					<br>
					<p>Powerful and free Material Design UI KIT</p>
					<p><strong>400+</strong> material UI elements, <strong>600+</strong> material icons, <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more. </p>
					<a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary btn-lg"><i class="fa fa-download left"></i> Free download</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /.Outro -->
@endsection
<nav class="gtco-nav" role="navigation">
			<div class="container" >
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="{{route('home')}}">Aesthetic <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="@yield('Home_avtive')"><a href="{{route('home')}}">Home</a></li>
							<li class="has-dropdown @yield('Service_avtive')">
								<a href="{{route('service')}}" class="">Services</a>
								<ul class="dropdown">
									<li><a href="#">Register for New License</a></li>
									{{-- <li><a href="{{ route('renew') }}">Renew License</a></li>
									<li><a href="{{ route('book_test') }}">Book Driving Test</a></li>
									<li><a href="{{ route('check_status') }}">Check Application Status</a></li>
									<li><a href="{{ route('download_docs') }}">Download Documents</a></li> --}}
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							
							<li class="has-dropdown">
								<a href="#">Dropdown</a>
								<ul class="dropdown">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Sass</a></li>
									<li><a href="#">jQuery</a></li>
								</ul>
							</li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="contact.html">Contact</a></li>

							<li>
							<a href="{{route('login')}}">
								<i class="fas fa-user"></i> Login
							</a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
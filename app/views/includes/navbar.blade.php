	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand">Order Management App</span>
			</div>

			<div class="navbar-collapse collapse">

				<?php $route_name = Route::currentRouteName(); ?>

				<ul class="nav navbar-nav">
					@if (Auth::check())
						@if (strpos($route_name,'customer') !== false)
							<li class="active">
						@else
							<li>
						@endif
							{{ link_to_route('customers_path', 'Customers') }}
						</li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>
						{{ link_to_route('customers_path', 'About') }}
					</li>

					@if (Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi {{ Auth::user()->email }}<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>{{ link_to_route('logout_path', 'Log out') }}</li>
							</ul>
						</li>
					@else
						@if (strpos($route_name,'login') !== false)
							<li class="active">
						@else
							<li>
						@endif
							{{ link_to_route('login_path', 'Login') }}
						</li>
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

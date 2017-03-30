<header id="top_header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-2">
					<a href="{{ route('dashboard') }}" class="logo_main" title="Ebro Admin Template:"><img src="{{ URL::to('img/logo_main.png') }}" alt=""></a>
				</div>
				<div class="col-sm-push-4 col-sm-3 text-right hidden-xs">
					<div class="notification_dropdown dropdown">
						<a href="#" class="notification_icon dropdown-toggle" data-toggle="dropdown">
							<span class="label label-danger">8</span>
							<i class="icon-comment-alt icon-2x"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="dropdown_heading">Comments</div>
								<div class="dropdown_content">
									<ul class="dropdown_items">
										<li>
											<h3><span class="small_info">12:43</span><a href="#">Lorem ipsum dolor&hellip;</a></h3>
											<p>Lorem ipsum dolor sit amet&hellip;</p>
										</li>
										<li>
											<h3><span class="small_info">Today</span><a href="#">Lorem ipsum dolor&hellip;</a></h3>
											<p>Lorem ipsum dolor sit amet&hellip;</p>
										</li>
										<li>
											<h3><span class="small_info">14 Aug</span><a href="#">Lorem ipsum dolor&hellip;</a></h3>
											<p>Lorem ipsum dolor sit amet&hellip;</p>
										</li>
									</ul>
								</div>
								<div class="dropdown_footer"><a href="#" class="btn btn-sm btn-default">Show all</a></div>
							</li>
						</ul>
					</div>
					<div class="notification_separator"></div>
					<div class="notification_dropdown dropdown">
						<a href="#" class="notification_icon dropdown-toggle" data-toggle="dropdown">
							<span class="label label-danger">12</span>
								<i class="icon-envelope-alt icon-2x"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-wide">
							<li>
								<div class="dropdown_heading">Messages</div>
								<div class="dropdown_content">
									<ul class="dropdown_items">
										<li>
											<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
											<p class="large_info">Sean Walter, 24.05.2014</p>
											<i class="icon-exclamation-sign indicator"></i>
										</li>
										<li>
											<h3><a href="#">Lorem ipsum dolor&hellip;</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aliquam assumenda&hellip;</p>
											<p class="large_info">Sean Walter, 24.05.2014</p>
										</li>
										<li>
											<h3><a href="#">Lorem ipsum dolor&hellip;</a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur&hellip;</p>
											<p class="large_info">Sean Walter, 24.05.2014</p>
											<i class="icon-exclamation-sign indicator"></i>
										</li>
									</ul>
								</div>
								<div class="dropdown_footer">
									<a href="#" class="btn btn-sm btn-default">Show all</a>
									<div class="pull-right dropdown_actions">
										<a href="#"><i class="icon-refresh"></i></a>
										<a href="#"><i class="icon-cog"></i></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-push-4 col-sm-3">
					<div class="pull-right dropdown">
						<a href="#" class="user_info dropdown-toggle" title="Jonathan Hay" data-toggle="dropdown">
							{{ $user->name }}
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="user_profile.html">Profile</a></li>
							<li><a href="javascript:void(0)">Another action</a></li>
							<li><a href="{{ route('logout') }}">Log Out</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-pull-6 col-sm-4">
					<form class="main_search">
						<input type="text" id="search_query" name="search_query" class="typeahead form-control">
						<button type="submit" class="btn btn-primary btn-xs"><i class="icon-search icon-white"></i></button>
					</form> 
				</div>
			</div>
		</div>
	</header>
	<nav id="mobile_navigation"></nav>
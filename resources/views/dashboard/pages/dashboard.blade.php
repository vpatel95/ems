@extends('dashboard.layouts.master')

@section('title', 'Dashboard - EMS')

@section('header_top')
	<header id="top_header">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-2">
					<a href="dashboard1.html" class="logo_main" title="Ebro Admin Template:"><img src="img/logo_main.png" alt=""></a>
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
@endsection

@section('breadcrumbs')
	<section id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Ebro Admin</a></li>
				<li><span>Dashboard</span></li>						
			</ul>
		</div>
	</section>
@endsection

@section('main_content')
	<section class="container clearfix main_section">
		<div id="main_content_outer" class="clearfix">
			<div id="main_content">
				
				<!-- main content -->
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="box_stat box_ico">
							<span class="stat_ico stat_ico_1"><i class="li_vallet"></i></span>
							<h4>Events</h4>
							<small>123 Events</small>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_stat box_ico">
							<span class="stat_ico stat_ico_2"><i class="li_user"></i></span>
							<h4>Members</h4>
							<small>1234 Members</small>
						</div>
					</div>
					@if ($role == 2)
						<div class="col-lg-3 col-md-6">
							<a href="{{ route('hod.event') }}">
								<div class="box_stat box_ico">
									<span class="stat_ico stat_ico_3"><i class="li_banknote"></i></span>
									<h4>Create Event</h4>
									<small></small>
								</div>
							</a>
						</div>
					@elseif ($role == 1)
						<div class="col-lg-3 col-md-6">
							<a href="#">
								<div class="box_stat box_ico">
									<span class="stat_ico stat_ico_3"><i class="li_banknote"></i></span>
									<h4>Edit Event</h4>
									<small></small>
								</div>
							</a>
						</div>
					@endif
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Latest Images</h4>
							</div>
							<div class="panel-body panel-body-narrow">
								<div class="photo-carousel">
									<a class="item gal_lightbox" href="gallery/Image01.jpg"><img src="gallery/ex_width/Image01_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image02.jpg"><img src="gallery/ex_width/Image02_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image03.jpg"><img src="gallery/ex_width/Image03_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image04.jpg"><img src="gallery/ex_width/Image04_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image05.jpg"><img src="gallery/ex_width/Image05_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image06.jpg"><img src="gallery/ex_width/Image06_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image07.jpg"><img src="gallery/ex_width/Image07_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image08.jpg"><img src="gallery/ex_width/Image08_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image09.jpg"><img src="gallery/ex_width/Image09_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image10.jpg"><img src="gallery/ex_width/Image10_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image11.jpg"><img src="gallery/ex_width/Image11_tn.jpg" alt=""></a>
									<a class="item gal_lightbox" href="gallery/Image12.jpg"><img src="gallery/ex_width/Image12_tn.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Social Networks (7 days)</h4>
							</div>
							<div class="panel-body">
								<div class="chart_wrapper">
									<div id="flot_social" class="chart_b">
										<script>
											data_twitter = [
												[new Date('08/02/2012').getTime(),48],
												[new Date('08/03/2012').getTime(),63],
												[new Date('08/04/2012').getTime(),94],
												[new Date('08/05/2012').getTime(),49],
												[new Date('08/06/2012').getTime(),82],
												[new Date('08/07/2012').getTime(),54],
												[new Date('08/08/2012').getTime(),33]
											];
											data_google = [
												[new Date('08/02/2012').getTime(),32],
												[new Date('08/03/2012').getTime(),26],
												[new Date('08/04/2012').getTime(),51],
												[new Date('08/05/2012').getTime(),49],
												[new Date('08/06/2012').getTime(),72],
												[new Date('08/07/2012').getTime(),40],
												[new Date('08/08/2012').getTime(),49]
											];
											data_linkedin = [
												[new Date('08/02/2012').getTime(),22],
												[new Date('08/03/2012').getTime(),26],
												[new Date('08/04/2012').getTime(),41],
												[new Date('08/05/2012').getTime(),38],
												[new Date('08/06/2012').getTime(),16],
												[new Date('08/07/2012').getTime(),19],
												[new Date('08/08/2012').getTime(),47]
											];
											data_facebook = [
												[new Date('08/02/2012').getTime(),14],
												[new Date('08/03/2012').getTime(),17],
												[new Date('08/04/2012').getTime(),9],
												[new Date('08/05/2012').getTime(),26],
												[new Date('08/06/2012').getTime(),4],
												[new Date('08/07/2012').getTime(),31],
												[new Date('08/08/2012').getTime(),12]
											];
										</script>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Featured Video</h4>
							</div>
							<div class="panel-body panel-body-narrow">
								<div class="fit_vid sepH_a">
									<iframe src="http://player.vimeo.com/video/53914149?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=808080" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
								<a href="http://vimeo.com/53914149" class="text-muted"><small>Cheetahs on the Edge--Director's Cut</small></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-7">
						<div class="panel panel-default">
							<div class="panel-heading"></div>
							<div id="ebro_cal"></div>
						</div>
					</div>
					
					<div class="col-sm-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Browsers</h4>
							</div>
							<div class="panel-body">
								<div class="chart_wrapper">
									<div class="chart_b" id="flot_browsers">
										<script>
											data_browsers = [
												{ label: "Firefox",  data: 1428},
												{ label: "Chrome",  data: 858},
												{ label: "Safari",  data: 647},
												{ label: "IE",  data: 433},
												{ label: "Opera",  data: 141}
											];  
										</script>
									</div>
								</div>
							</div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Browser</th>
										<th class="col_small col_center">Visits</th>
										<th class="col_small col_center">% visits</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#">Firefox</a></td>
										<td class="col_center">1428</td>
										<td class="col_center">54%</td>
									</tr>
									<tr>
										<td><a href="#">Chrome</a></td>
										<td class="col_center">858</td>
										<td class="col_center">21%</td>
									</tr>
									<tr>
										<td><a href="#">Safari</a></td>
										<td class="col_center">647</td>
										<td class="col_center">11%</td>
									</tr>
									<tr>
										<td><a href="#">Internet Explorer</a></td>
										<td class="col_center">433</td>
										<td class="col_center">6%</td>
									</tr>
									<tr>
										<td><a href="#">Opera</a></td>
										<td class="col_center">141</td>
										<td class="col_center">2%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="panel_alt">
							<div class="panel_alt_body">
                                <p class="panel_alt_title">
                                    <i class="li_mail"></i>
									<span>Mailbox</span>
                                </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In amet obcaecati sequi! Ipsum dolores adipisci inventore placeat&hellip;</p>
								<a href="#" class="btn btn-primary btn-sm">Read More&hellip;</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel_alt">
							<div class="panel_alt_body">
                                <p class="panel_alt_title">
                                    <i class="li_bulb"></i>
									<span>Help Center</span>
                                </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In amet obcaecati sequi! Ipsum dolores adipisci&hellip;</p>
								<a href="#" class="btn btn-primary btn-sm">Read More&hellip;</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel_alt">
							<div class="panel_alt_body">
                                <p class="panel_alt_title">
                                    <i class="li_banknote"></i>
									<span>Invoices</span>
                                </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In amet obcaecati sequi! Ipsum dolores adipisci inventore placeat delectus nulla&hellip;</p>
								<a href="#" class="btn btn-primary btn-sm">Read More&hellip;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('footer')
	<div id="footer_space"></div>
	<footer id="footer">
           <div class="container">
               <div class="row">
                   <div class="col-sm-3">
                       &copy; 2013 Your Company
                   </div>
                   <div class="col-sm-8">
                       <ul>
                           <li><a href="#">Dashboard</a></li>
                           <li>&middot;</li>
                           <li><a href="#">Terms of Service</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-1 text-right">
                        <small class="text-muted">v1.3</small>
                    </div>
                </div>
            </div>
    </footer>
        	
	<nav id="side_fixed_nav">
			<div class="slim_scroll">
				<div class="side_nav_actions">
					<a href="javascript:void(0)" id="side_fixed_nav_toggle"><span class="icon-align-justify"></span></a>
					<div id="toogle_nav_visible" class="make-switch switch-mini" data-on="success" data-on-label="<i class='icon-lock'></i>" data-off-label="<i class='icon-unlock-alt'></i>">
						<input id="nav_visible_input" type="checkbox">
					</div>
				</div>
				<ul id="text_nav_side_fixed">
					<li>
						<a href="javascript:void(0)"><span class="icon-dashboard"></span>Dashboard</a>
						<ul>
							<li class="link_active"><a href="dashboard.html">Dashboard</a></li>
							<li><a href="dashboard_drag_drop.html">Drag & Drop Dashboard</a></li>
							<li>
								<a href="javascript:void(0)">Navigations</a>
								<ul>
									<li><a href="nav_side_accordion.html">Accordion Navigation</a></li>
									<li><a href="nav_side_icons.html">Icon Navigation</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon-th-list"></span>Forms</a>
						<ul>
							<li><a href="form_regular_elements.html">Regular elements</a></li>
							<li><a href="form_extended_elements.html">Extended elements</a></li>
							<li><a href="form_multiupload.html">Multiupload</a></li>
							<li><a href="form_validation.html">Form validation</a></li>
							<li><a href="wizard.html">Wizard</a></li>
							<li><a href="wysiwg.html">WYSIWG Editor</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon-puzzle-piece"></span>Components</a>
						<ul>
							<li><a href="calendar.html">Calendar</a></li>
							<li><a href="charts.html">Charts</a></li>
							<li><a href="contact_list.html">Contact List</a></li>
							<li><a href="editable_elements.html">Editable Elements</a></li>
							<li><a href="file_manager.html">File manager</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="gmaps.html">Google Maps</a></li>
							<li>
								<a href="javascript:void(0)">Tables</a>
								<ul>
									<li><a href="datatables.html">Datatables</a></li>
									<li><a href="regular_tables.html">Regular</a></li>
									<li><a href="slick_grid.html">Slick Grid</a></li>
									<li><a href="table_responsive.html">Responsive Table</a></li>
								</ul>
							</li>
							<li><a href="tree_plugin.html">Tree Plugin</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon-beaker"></span>UI Elements</a>
						<ul>
							<li><a href="alerts_buttons.html">Alerts, Buttons</a></li>
							<li><a href="grid.html">Grid</a></li>
							<li><a href="icons.html">Icons</a></li>
							<li><a href="notifications.html">Notifications</a></li>
							<li><a href="panels.html">Panels</a></li>
							<li><a href="tabs_accordions.html">Tabs, Accordions</a></li>
							<li><a href="tooltips_popovers.html">Tooltips, Popovers</a></li>
							<li><a href="typography.html">Typography</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon-leaf"></span>Other Pages</a>
						<ul>
							<li><a href="blank.html">Blank page</a></li>
							<li><a href="chat.html">Chat</a></li>
							<li><a href="contact_page.html">Contact Page</a></li>
							<li><a href="error_404.html">Error 404</a></li>
							<li><a href="help_faq.html">Help/Faq</a></li>
							<li><a href="invoices.html">Invoices</a></li>
							<li><a href="landing_page.html">Landing Page</a></li>
							<li><a href="login_page.html">Login Page</a></li>
							<li><a href="mailbox.html">Mailbox</a></li>
							<li><a href="pricing_table.html">Pricing Table</a></li>
							<li><a href="search_page.html">Search Page</a></li>
							<li><a href="settings.html">Site Settings</a></li>
							<li><a href="user_profile.html">User profile</a></li>
						</ul>
					</li>				
				</ul>
			</div>
	</nav>
@endsection
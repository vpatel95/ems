@extends('event.layouts.master')

@section('title', 'Dashboard - EMS')

@section('header_top')
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
				<li><a href="#">Forms</a></li>
				<li><span>Regular Form Elements</span></li>					
			</ul>
		</div>
	</section>
@endsection

@section('main_content')
	<section class="container clearfix main_section">
		<div id="main_content_outer" class="clearfix">
			<div id="main_content">
						
				<!-- main content -->
				<form action="{{ route('hod.event.submit') }}" method="POST">
					<div class="row">
						<div class="col-sm-12">
							<fieldset>
	                            <legend><span><h3>Event Creation Form</h3></span></legend>
	                        </fieldset>
						</div>
					</div>
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="panel panel-default">
	                            <div class="panel-heading">
	                                <h4 class="panel-title">Basic Information</h4>
	                            </div>
	                            <div class="panel-body">
	                                <div class="row">
	                                    <div class="col-sm-6">
	                                        <div class="form-group">
												<label for="event_name">Name</label>
												<input type="text" id="event_name" name="event_name" class="form-control">
											</div>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                	<div class="col-sm-6">
	                                		<div class="form-group">
												<label for="event_description">Brief Description</label>
												<textarea name="event_description" id="event_description" cols="10" rows="4" class="form-control"></textarea>
											</div>
	                                	</div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-sm-6">
											<div class="form-group">	
												<label for="event_type">Type</label>
												<select id="event_type" name="event_type" class="form-control">
													<option>--Select Type--</option>
													<option>National</option>
													<option>International</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
	                                        <div class="form-group">
												<label for="event_sub_type">Sub Type</label>
												<select id="event_sub_type" name="event_sub_type" class="form-control">
													<option>--Select Sub-Type--</option>
													<option>Conference</option>
												</select>
											</div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="panel panel-default">
	                            <div class="panel-heading">
	                                <h4 class="panel-title">Coordinator &amp; Members</h4>
	                            </div>
	                            <div class="panel-body">
	                            	<div class="row">
	                                    <div class="col-sm-6">
											<div class="form-group">	
												<label for="event_coordinator">Coordinator</label>
												<select id="event_coordinator" name="event_coordinator" class="form-control">
													<option>--Select Coordinator--</option>
													@foreach ($members as $member)
														<option value="{{ $member->m_id }}">{{ $member->name }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
	                                <div class="row">
	                                   	<div class="col-sm-6">
	                                        <div class="form-group">
	                                        	<label for="2col_searchable">Event Members</label>
	                                        	<select id="2col_searchable" name="event_members[]" multiple>
													@foreach ($members as $member)
														<option value="{{ $member->m_id }}">{{ $member->name }}</option>
													@endforeach
												</select>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="panel panel-default">
	                            <div class="panel-heading">
	                                <h4 class="panel-title">Location &amp; Dates</h4>
	                            </div>
	                            <div class="panel-body">
	                            	<div class="row">
	                            		<div class="col-sm-12">
		                            		<div class="form-group">
			                            		<label>Location</label>
			                                    <div class="col-sm-4">
													<select id="chn_country" name="country" class="form-control">
														<option value="">- Country -</option>
														<option value="chn_brazil">Brazil</option>
														<option value="chn_canada">Canada</option>
														<option value="chn_usa">USA</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select id="chn_state" name="state" class="form-control">
														<option value="">- State -</option>
														<option value="chn_canada_alberta" class="chn_canada">Alberta</option>
														<option value="chn_canada_ontario" class="chn_canada">Ontario</option>
														<option value="chn_canada_quebec" class="chn_canada">Quebec</option>
														<option value="chn_brazil_saoPaulo" class="chn_brazil">Sao Paulo</option>
														<option value="chn_brazil_minasGerais" class="chn_brazil">Minas Gerais</option>
														<option value="chn_brazil_rioDeJaneiro" class="chn_brazil">Rio de Janeiro</option>
														<option value="chn_usa_california" class="chn_usa">California</option>
														<option value="chn_usa_texas" class="chn_usa">Texas</option>
														<option value="chn_usa_newYork" class="chn_usa">New York</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select id="chn_city" name="city" class="form-control">
														<option value="">- City -</option>
														<option value="chn_brazil_saoPaulo_saoPaulo" class="chn_brazil_saoPaulo">Sao Paulo</option>
														<option value="chn_brazil_saoPaulo_guarulhos" class="chn_brazil_saoPaulo">Guarulhos</option>
														<option value="chn_brazil_saoPaulo_campinas" class="chn_brazil_saoPaulo">Campinas</option>
														<option value="chn_brazil_saoPaulo_saoBernardoDoCampo" class="chn_brazil_saoPaulo">Sao Bernardo do Campo</option>
														<option value="chn_brazil_saoPaulo_santoAndre" class="chn_brazil_saoPaulo">Santo Andre</option>
														<option value="chn_brazil_minasGerais_beloHorizonte" class="chn_brazil_minasGerais">Belo Horizonte</option>
														<option value="chn_brazil_minasGerais_contagem" class="chn_brazil_minasGerais">Contagem</option>
														<option value="chn_brazil_minasGerais_uberlandia" class="chn_brazil_minasGerais">Uberlandia</option>
														<option value="chn_brazil_minasGerais_juizDeFora" class="chn_brazil_minasGerais">Juiz de Fora</option>
														<option value="chn_brazil_minasGerais_betim" class="chn_brazil_minasGerais">Betim</option>
																			
														<option value="chn_brazil_rioDeJaneiro_rioDeJaneiro" class="chn_brazil_rioDeJaneiro">Rio de Janeiro</option>
														<option value="chn_brazil_rioDeJaneiro_saoGoncalo" class="chn_brazil_rioDeJaneiro">Sao Goncalo</option>
														<option value="chn_brazil_rioDeJaneiro_duqueDeCaxias" class="chn_brazil_rioDeJaneiro">Duque de Caxias</option>
														<option value="chn_brazil_rioDeJaneiro_novaIguacu" class="chn_brazil_rioDeJaneiro">Nova Iguacu</option>
														<option value="chn_brazil_rioDeJaneiro_niteroi" class="chn_brazil_rioDeJaneiro">Niteroi</option>
																			
														<option value="chn_canada_alberta_calgary" class="chn_canada_alberta">Calgary</option>
														<option value="chn_canada_alberta_edmonton" class="chn_canada_alberta">Edmonton</option>
														<option value="chn_canada_alberta_strathcona" class="chn_canada_alberta">Strathcona County</option>
														<option value="chn_canada_alberta_redDeer" class="chn_canada_alberta">Red Deer</option>
														<option value="chn_canada_alberta_lethbridge" class="chn_canada_alberta">Lethbridge</option>
																		  
														<option value="chn_canada_ontario_toronto" class="chn_canada_ontario">Toronto</option>
														<option value="chn_canada_ontario_ottawa" class="chn_canada_ontario">Ottawa</option>
														<option value="chn_canada_ontario_mississauga" class="chn_canada_ontario">Mississauga</option>
														<option value="chn_canada_ontario_brampton" class="chn_canada_ontario">Brampton</option>
														<option value="chn_canada_ontario_hamilton" class="chn_canada_ontario">Hamilton</option>
																			
														<option value="chn_canada_quebec_montreal" class="chn_canada_quebec">Montreal</option>
														<option value="chn_canada_quebec_quebec" class="chn_canada_quebec">Quebec</option>
														<option value="chn_canada_quebec_laval" class="chn_canada_quebec">Laval</option>
														<option value="chn_canada_quebec_gatineau" class="chn_canada_quebec">Gatineau</option>
														<option value="chn_canada_quebec_longueuil" class="chn_canada_quebec">Longueuil</option>
																			
														<option value="chn_usa_california_losAngeles" class="chn_usa_california">Los Angeles</option>
														<option value="chn_usa_california_sanDiego" class="chn_usa_california">San Diego</option>
														<option value="chn_usa_california_sanJose" class="chn_usa_california">San Jose</option>
														<option value="chn_usa_california_sanFrancisco" class="chn_usa_california">San Francisco</option>
														<option value="chn_usa_california_fresno" class="chn_usa_california">Fresno</option>
																			
														<option value="chn_usa_texas_houston" class="chn_usa_texas">Houston</option>
														<option value="chn_usa_texas_sanAntonio" class="chn_usa_texas">San Antonio</option>
														<option value="chn_usa_texas_dallas" class="chn_usa_texas">Dallas</option>
														<option value="chn_usa_texas_austin" class="chn_usa_texas">Austin</option>
														<option value="chn_usa_texas_fortWorth" class="chn_usa_texas">Fort Worth</option>
																			
														<option value="chn_usa_newYork_newYork" class="chn_usa_newYork">New York</option>
														<option value="chn_usa_newYork_buffalo" class="chn_usa_newYork">Buffalo</option>
														<option value="chn_usa_newYork_rochester" class="chn_usa_newYork">Rochester</option>
														<option value="chn_usa_newYork_yonkers" class="chn_usa_newYork">Yonkers</option>
														<option value="chn_usa_newYork_syracuse" class="chn_usa_newYork">Syracuse</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
	                            		<div class="col-sm-12">
		                            		<div class="form-group">
			                            		<label>Dates</label>
			                                    <div class="col-sm-6">
													<input class="form-control" type="text" placeholder="Start date" id="dpStart" data-date-format="yyyy-mm-dd" data-date-autoclose="true" name="event_start_date">
												</div>
	                                            <div class="col-sm-6">
													<input class="form-control" type="text" placeholder="End date" id="dpEnd" data-date-format="yyyy-mm-dd" data-date-autoclose="true" name="event_end_date">
												</div>
											</div>
										</div>
									</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                	<center><button type="submit" class="btn btn-default btn-lg btn-block">Create Event</button></center>
	                	<input type="hidden" name="_token" value="{{ Session::token() }}">
	                </div>
				</form>
				
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

			
			
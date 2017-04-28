@extends('event.layouts.master')

@section('title', 'Dashboard - EMS')

@section('breadcrumbs')
	<section id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Hod</a></li>
				<li><span>Create Event</span></li>					
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
													@foreach ($coordinators as $coordinator)
														<option value="{{ $coordinator->c_id }}">{{ $coordinator->name }}</option>
													@endforeach
													@foreach ($memcord as $member)
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
		                            		<div class="form-group input-daterange">
			                            		<label>Dates</label>
			                            		<div class="col-sm-6">
			                            			<input class="form-control actual_range" type="text" placeholder="Start date" id="dpStart" data-date-format="yyyy-mm-dd" data-date-autoclose="true" name="event_start_date">
			                            		</div>
			                            		<div class="col-sm-6">
			                            			<input class="form-control actual_range" type="text" placeholder="End date" id="dpEnd" data-date-format="yyyy-mm-dd" data-date-autoclose="true" name="event_end_date">
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

@push('styles')
	<!-- 2col multiselect -->
	<link rel="stylesheet" href="{{ URL::to('js/lib/multi-select/css/multi-select.css') }}">
	<link rel="stylesheet" href="{{ URL::to('js/lib/multi-select/css/ebro_multi-select.css') }}">
	<!-- datepicker -->
	<link rel="stylesheet" href="{{ URL::to('js/lib/datepicker/css/datepicker.css') }}">
			
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
		<script src="js/ie/html5shiv.js"></script>
		<script src="js/ie/respond.min.js"></script>
		<script src="js/ie/excanvas.min.js"></script>
	<![endif]-->

	<!-- custom fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,700&amp;subset=latin,latin-ext" rel='stylesheet' type='text/css'>
@endpush
			
@push('scripts')
	<!-- 2col multiselect -->
	<script src="{{ URL::to('js/lib/multi-select/js/jquery.multi-select.js') }}"></script>
	<script src="{{ URL::to('js/jquery.quicksearch.js') }}"></script>
	<!-- select2 -->
	<!-- <script src="{{ URL::to('js/lib/select2/select2.min.js') }}"></script> -->
	<!-- chained selects -->
	<script src="{{ URL::to('js/lib/chained/jquery.chained.min.js') }}"></script>
	<script src="{{ URL::to('js/lib/chained/jquery.chained.remote.min.js') }}"></script>
	<!-- masked inputs -->
	<script src="{{ URL::to('js/lib/jquery.inputmask/jquery.inputmask.bundle.min.js') }}"></script>
	<!-- datepicker -->
	<script src="{{ URL::to('js/lib/datepicker/js/bootstrap-datepicker.js') }}"></script>
				
	<script src="{{ URL::to('js/pages/ebro_form_extended.js') }}"></script>

	<!--[if lte IE 9]>
		<script src="{{ URL::to('js/ie/jquery.placeholder.js') }}"></script>
		<script>
			$(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<script type="text/javascript">
		$(document).ready(function() {
			$('.input-daterange').datepicker({
			    inputs: $('.actual_range')
			});
		});
	</script>

@endpush			
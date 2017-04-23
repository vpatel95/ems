@extends('event.layouts.master')

@section('title', 'Dashboard - EMS')

@section('breadcrumbs')
	<section id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Coordinator</a></li>
				<li><span>Edit Event</span></li>					
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
							<div class="col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title pull-left">Contact List</h4>
										<input type="text" class="pull-right input-small form-control" placeholder="Find..." id="contact_search">
										<select name="contact_list_filter" id="contact_list_filter" class="pull-right input-small form-control">
											<option value="filter_all">-- All --</option>
										</select>
									</div>
									<div id="contact_list" class="contact_list">
										<ul>
											@foreach($events as $event)
												<li> 
													<h4 data-contact-filter="company_1">{{ $event->name }}</h4>
													<ul>
														<li>
															<div class="media">
																<div class="media-body">
																	<p class="contact_list_username"><a href="javascript:void(0)">Description</a></p>
																	<p class="contact_list_info">{{ $event->description }}</p>
																</div>
															</div>
														</li>
														<li>
															<div class="media">
																<div class="media-body">
																	<p class="contact_list_username"><a href="javascript:void(0)">Type &amp; Sub-Type</a></p>
																	<p class="contact_list_info"><span class="muted">Type : </span>{{ $event->type }}</p>
																	<p class="contact_list_info"><span class="muted">Sub-Type : </span>{{ $event->sub_type }}</p>
																</div>
															</div>
														</li>
														<li>
															<div class="media">
																<div class="media-body">
																	<p class="contact_list_username"><a href="javascript:void(0)">Dates</a></p>
																	<p class="contact_list_info"><span class="muted">Start Date : </span>{{ $event->start_date }}</p>
																	<p class="contact_list_info"><span class="muted">End Date : </span>{{ $event->end_date }}</p>
																</div>
															</div>
														</li>
														<li>
															<div class="media">
																<div class="media-body">
																	<p class="contact_list_username"><a href="javascript:void(0)">Location</a></p>
																	<p class="contact_list_info"><span class="muted">City : </span>{{ $event->city }}</p>
																	<p class="contact_list_info"><span class="muted">State : </span>{{ $event->state }}</p>
																	<p class="contact_list_info"><span class="muted">Country:</span>{{ $event->country }}</p>
																</div>
															</div>
														</li>
														<li>
															<div class="media">
																<div class="media-body">
																	@if($role ==2)
																		<p class="contact_list_username"><a href="{{ route('edit.event.hod', $event->id) }}"><b>EDIT EVENT</b></a></p>
																	@elseif($role ==1)
																		<p class="contact_list_username"><a href="{{ route('edit.event', $event->id) }}"><b>EDIT EVENT</b></a></p>
																	@endif
																</div>
															</div>
														</li>
													</ul>
												</li>
											@endforeach
										</ul>
									</div>
									<div class="contact_list_no_result">
										<div class="alert alert-error text-center">
											No contacts to display.
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
@endsection

@push('styles')
	<style type="text/css">
		#footer {
			position: fixed;
			bottom: 0;
			width: 100%;
		}
	</style>
@endpush

@push('scripts')
	<script src="{{ URL::to('js/jquery.quicksearch.js') }}"></script>
	<script src="{{ URL::to('js/pages/ebro_contact_list.js') }}"></script>
@endpush
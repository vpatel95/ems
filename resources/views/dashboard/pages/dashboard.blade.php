@extends('dashboard.layouts.master')

@section('title', 'Dashboard - EMS')

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
						<div class="col-lg-3 col-md-6">
							<a href="{{ route('view.event.hod') }}">
								<div class="box_stat box_ico">
									<span class="stat_ico stat_ico_3"><i class="li_banknote"></i></span>
									<h4>View Events</h4>
									<small></small>
								</div>
							</a>
						</div>
					@elseif ($role == 1)
						<div class="col-lg-3 col-md-6">
							<a href="{{ route('view.event') }}">
								<div class="box_stat box_ico">
									<span class="stat_ico stat_ico_3"><i class="li_banknote"></i></span>
									<h4>View Events</h4>
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

@push('scripts')
	<script type="text/javascript">
		Echo.private('admin')
		    .listen('UserCreated', (e) => {
		        console.log(e);
		        alert(e);
		    });
	</script>
@endpush

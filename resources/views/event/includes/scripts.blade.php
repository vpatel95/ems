<!-- jQuery -->
<script src="{{ URL::to('js/jquery.min.js') }}"></script>
<!-- bootstrap framework -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jQuery resize event -->
<script src="{{ URL::to('js/jquery.ba-resize.min.js') }}"></script>
<!-- jquery cookie -->
<script src="{{ URL::to('js/jquery_cookie.min.js') }}"></script>
<!-- retina ready -->
<script src="{{ URL::to('js/retina.min.js') }}"></script>
<!-- typeahead -->
<script src="{{ URL::to('js/lib/typeahead.js/typeahead.min.js') }}"></script>
<script src="{{ URL::to('js/lib/typeahead.js/hogan-2.0.0.js') }}"></script>

<!-- tinyNav -->
<script src="{{ URL::to('js/tinynav.js') }}"></script>
<!-- slimscroll -->
<script src="{{ URL::to('js/lib/jQuery-slimScroll/jquery.slimscroll.min.js') }}"></script>

<!-- bootstrap switch -->
<script src="{{ URL::to('js/lib/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

<!-- touchSwipe -->
<script src="{{ URL::to('js/lib/TouchSwipe/jquery.touchSwipe.min.js') }}"></script>
		
<!-- Navgoco -->
<script src="{{ URL::to('js/lib/navgoco/jquery.navgoco.min.js') }}"></script>
		
<!-- ebro common scripts/functions -->
<script src="{{ URL::to('js/ebro_common.js') }}"></script>

<!-- 2col multiselect -->
<script src="{{ URL::to('js/lib/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ URL::to('js/jquery.quicksearch.js') }}"></script>
<!-- select2 -->
<script src="{{ URL::to('js/lib/select2/select2.min.js') }}"></script>
<!-- chained selects -->
<script src="{{ URL::to('js/lib/chained/jquery.chained.min.js') }}"></script>
<script src="{{ URL::to('js/lib/chained/jquery.chained.remote.min.js') }}"></script>
<!-- combobox -->
<script src="{{ URL::to('js/lib/fuelUx/combobox.js') }}"></script>
<!-- masked inputs -->
<script src="{{ URL::to('js/lib/jquery.inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<!-- password strength meter -->
<script src="{{ URL::to('js/lib/complexify/jquery.complexify.min.js') }}"></script>
<script src="{{ URL::to('js/lib/complexify/jquery.complexify.banlist.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::to('js/lib/datepicker/js/bootstrap-datepicker.js') }}"></script>
<!-- timepicker -->
<script src="{{ URL::to('js/lib/timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<!-- colorpicker -->
<script src="{{ URL::to('js/lib/colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::to('js/lib/iCheck/jquery.icheck.min.js') }}"></script>
<!-- noUI slider -->
<script src="{{ URL::to('js/lib/noUiSlider/jquery.nouislider.min.js') }}"></script>
<!-- Ion rangeSlider -->
<script src="{{ URL::to('js/lib/ion_rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
<!-- autosize -->
<script src="{{ URL::to('js/lib/autosize/jquery.autosize-min.js') }}"></script>
<!-- textarea counter -->
<script src="{{ URL::to('js/lib/jquery_textarea_counter/jquery.textareaCounter.plugin.js') }}"></script>
<!-- fileupload widgets -->
<script src="{{ URL::to('js/lib/jasny_plugins/bootstrap-fileupload.js') }}"></script>
			
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
	$('.input-daterange input').each(function() {
	    $(this).datepicker('clearDates');
	});
</script>
	

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65389704-1', 'auto');
  ga('send', 'pageview');
</script>

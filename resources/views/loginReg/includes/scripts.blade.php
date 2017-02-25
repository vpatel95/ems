<script src="{{ URL::to('js/jquery.min.js') }}"></script>
<!-- jquery cookie -->
<script src="{{ URL::to('js/jquery_cookie.min.js') }}"></script>
<script src="{{ URL::to('js/lib/parsley/parsley.min.js') }}"></script>
<script>
	$(function() {		
		//* validation
		$('#login_form').parsley({
			errors: {
				classHandler: function ( elem, isRadioOrCheckbox ) {
					if(isRadioOrCheckbox) {
						return $(elem).closest('.form_sep');
					}
				},
				container: function (element, isRadioOrCheckbox) {
					if(isRadioOrCheckbox) {
						return element.closest('.form_sep');
					}
				}
			}
		});
		//* change form
		$('.form_toggle').on('click',function(e){
			$('.login_panel').slideToggle(function() {
				if($('.log_section').is(':visible')) {
					$('.login_toggle').closest('li').addClass('active').siblings('li').removeClass('active');
				} else {
					$('.register_toggle').closest('li').addClass('active').siblings('li').removeClass('active');
				}
			});
			e.preventDefault();
		});
		$('.login_toggle').on('click',function(e){
			if($('.log_section').is(':hidden')) {
				$('.reg_section').slideUp();
				$('.log_section').slideDown();
				$(this).closest('li').addClass('active').siblings('li').removeClass('active');
			}
			e.preventDefault();
		});
		$('.register_toggle').on('click',function(e){
			if($('.reg_section').is(':hidden')) {
				$('.log_section').slideUp();
				$('.reg_section').slideDown();
				$(this).closest('li').addClass('active').siblings('li').removeClass('active');
			}
			e.preventDefault();
		});
			
		// set theme from cookie
		if($.cookie('ebro_color') != undefined) {
			$('#theme').attr('href','css/theme/'+$.cookie('ebro_color')+'.css');
		}
			
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
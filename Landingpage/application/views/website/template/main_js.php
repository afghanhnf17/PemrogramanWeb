<script>
    $(document).ready(function(){
    $(".preloader").delay(1500).fadeOut();
    })
</script>

<!-- COMMON SCRIPTS -->
		<script src="<?php echo base_url('');?>assets-web/js/common_scripts.min.js"></script>
		<script src="<?php echo base_url('');?>assets-web/js/slider.js"></script>
		<script src="<?php echo base_url('');?>assets-web/js/common_func.js"></script>
		<script src="<?php echo base_url('');?>assets-web/assets/validate.js"></script>
        <script src="<?php echo base_url('');?>assets-web/js/specific_detail.js"></script>
        <script src="https://kit.fontawesome.com/a2e38f24ba.js" crossorigin="anonymous"></script>

        	<!-- Datatable -->
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"> -->
	<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap4.min.css" rel="stylesheet">
    
		<!-- SPECIFIC SCRIPTS -->
		<script src="<?php echo base_url('');?>assets-web/js/sticky_sidebar.min.js"></script>
		<script src="<?php echo base_url('');?>assets-web/js/specific_listing.js"></script>
		<script src="<?php echo base_url('');?>assets-web/js/isotope.min.js"></script>
		<script>
			$(window).on("load",function(){
			var $container = $('#wrapperr');
			$container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
			});
			$('.switch-field').on( 'click', 'input', 'change', function(){
			var selector = $(this).attr('data-filter');
			$('#wrapper').isotope({ filter: selector });
			});
		</script>

        <script type="text/javascript">
        document.onkeydown = function(e) {
                if (e.ctrlKey && 
                    (e.keyCode === 67 || 
                    e.keyCode === 86 || 
                    e.keyCode === 85 || 
                    e.keyCode === 117)) {
                    
                    return false;
                } else {
                    return true;
                }
        };
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

		<!-- BANNER -->
		<!-- ==== Owl Carousel Plugin ==== -->
		<script src="<?php echo base_url('');?>assets-web/banner/js/owl.carousel.min.js"></script>
		<!-- ==== Main JavaScript ==== -->
		<script src="<?php echo base_url('');?>assets-web/banner/js/main1.js"></script>

        <script type="text/javascript" src="<?php echo base_url('assets-web/js/hijri.js');?>"></script>

        <!-- JS code -->
        <!-- <script src="//releases.flowplayer.org/7.0.4/commercial/flowplayer.min.js"></script>
        <script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>  -->

        <!-- <link rel="stylesheet" href="//releases.flowplayer.org/7.0.4/commercial/skin/skin.css">
        <script src="//releases.flowplayer.org/7.0.4/commercial/flowplayer.min.js"></script>
        <script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>  -->

		<script>
			$(document).ready(function () {
				$("#preloader").delay(800).fadeOut();
			})
		</script>

        <script type="text/javascript">
            $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
        </script>

        <script type="text/javascript">
            $('#tanggalHijriah').html(writeIslamicDate(0));
            $(document).ready(function() {
                $('#example').DataTable();
                $('[data-toggle="popover"]').popover(); 
            });
        </script>

    



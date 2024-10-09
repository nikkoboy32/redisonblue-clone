<?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?>
<?php if ( is_front_page() ) { get_includes('middle'); }?>


	
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title">Why You Should <span>Stay Here</span></h1>
				<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
			</main>

			<!-- <aside class="sidebar">
				<div class="side_box1">
					<ul>
						<li><a href="javascript:;"></a></li>
						<li><a href="javascript:;"></a></li>
						<li><a href="javascript:;"></a></li>
					</ul>
				</div>
			</aside> -->
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<?php get_includes('bottom'); ?>

<?php get_includes('footer'); ?>


<!-- End Footer -->

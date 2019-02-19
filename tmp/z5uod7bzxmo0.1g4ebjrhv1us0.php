
<body>
<!-- banner -->
<?php echo $this->render($header_menu,NULL,get_defined_vars(),0); ?>
<!-- banner -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Germinate
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<div class="modal-body">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
					<p>Ut enim ad minima veniam, quis nostrum
						exercitationem ullam corporis suscipit laboriosam,
						nisi ut aliquid ex ea commodi consequatur? Quis autem
						vel eum iure reprehenderit qui in ea voluptate velit
						esse quam nihil molestiae consequatur, vel illum qui
						dolorem eum fugiat quo voluptas nulla pariatur.
						<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
							esse quam nihil molestiae consequatur.</i></p>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- //bootstrap-pop-up -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="w3layouts_breadcrumbs_left">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= ($BASE) ?>/">Home</a><span>/</span></li>
				<li><i class="fa fa-info-circle" aria-hidden="true"></i>About</li>
			</ul>
		</div>
		<div class="w3layouts_breadcrumbs_right">
			<h2>About Us</h2>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- about -->
<div class="welcome">
	<div class="container">
		<h3 class="agileits_w3layouts_head">Why <span>Choose</span> Us</h3>
		<div class="w3_agile_image">
			<img src="assets/images/1.png" alt=" " class="img-responsive" />
		</div>
		<p class="agile_para">Did you know that the country’s current post-harvest loss rates of perishable crops is up to 60 per cent?</p>
		<div class="w3ls_news_grids">
			<div class="col-md-6 w3_agile_about_grid_left">
				<h3>Farm produce distribution system to enhance access to farm produce in Nigeria </h3>
				<p><i>Farm Express connects farmers, and consumers. It incorporates the service of agents, that carry out the distribution. This also offers
				employment opportunities to those who are interested in Agribusiness.</i>  </p>
			</div>
			<div class="col-md-6 w3_agile_about_grid_right">
				<div class="skillbar" data-percent="78">
					<span class="skillbar-title" style="background: #f1703a;">Livestock</span>
					<p class="skillbar-bar" style="background: #f88c5e;"></p>
					<span class="skill-bar-percent"></span>
				</div>
				<!-- End Skill Bar -->

				<div class="skillbar" data-percent="54">
					<span class="skillbar-title" style="background: #2980b9;">Fishery</span>
					<p class="skillbar-bar" style="background: #3498db;"></p>
					<span class="skill-bar-percent"></span>
				</div>
				<!-- End Skill Bar -->

				<div class="skillbar" data-percent="76">
					<span class="skillbar-title" style="background: #a0d034;">Vegetables</span>
					<p class="skillbar-bar" style="background: #b2ec2f;"></p>
					<span class="skill-bar-percent"></span>
				</div>
				<!-- End Skill Bar -->

				<div class="skillbar" data-percent="80">
					<span class="skillbar-title" style="background: #e7cc2c;">Tubers</span>
					<p class="skillbar-bar" style="background: #f5d410;"></p>
					<span class="skill-bar-percent"></span>
				</div>
				<!-- End Skill Bar -->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- skills -->
<script src="assets/js/skill.bars.jquery.js"></script>
<script>
    $(document).ready(function(){

        $('.skillbar').skillBars({
            from: 0,
            speed: 4000,
            interval: 100,
            decimals: 0,
        });

    });
</script>
<!-- //skills -->
<!-- about-bottom -->
<div class="about-bottom">
	<div class="container">
		<h3><span>Agriculture</span> not only gives riches to a nation, but the
			only riches she can call her own</h3>

	</div>
</div>
<!-- //about-bottom -->
<!-- team -->
<div class="welcome">
	<div class="container">
		<h3 class="agileits_w3layouts_head">Meet Our <span>Amazing</span> Team</h3>
		<div class="w3_agile_image">
			<img src="assets/images/1.png" alt=" " class="img-responsive" />
		</div>
		<p class="agile_para"></p>
		<div class="w3ls_news_grids w3_agileits_team_grids">
			<div class="col-md-3 w3_agileits_team_grid">
				<div class="w3layouts_news_grid">
					<img src="assets/images/dy.jpg" alt=" " class="img-responsive" />
					<div class="w3layouts_news_grid_pos">
						<div class="wthree_text agileinfo_about_text">
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<h4>Adedayo Oyinlola</h4>
				<p>Project manager</p>
			</div>

		</div>
	</div>
</div>
<!-- //team -->
<!-- footer -->
<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
<!-- //footer -->
<!-- menu -->
</html>
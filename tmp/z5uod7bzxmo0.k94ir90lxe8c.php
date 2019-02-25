
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
                <li><i class="fa fa-info-circle" aria-hidden="true"></i>Farms</li>
            </ul>
        </div>
        <div class="w3layouts_breadcrumbs_right">
            <h2>Farms</h2>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- about -->

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

<!-- //about-bottom -->
<!-- team -->
<div class="welcome">
    <div class="container">
        <h3 class="agileits_w3layouts_head">Registered <span>Farms</span></h3>
        <div class="w3_agile_image">
            <img src="assets/images/1.png" alt=" " class="img-responsive" />
        </div>
        <p class="agile_para"></p>
        <div class="w3ls_news_grids w3_agileits_team_grids">
            <div class="col-md-3 w3_agileits_team_grid">
                <div class="w3layouts_news_grid">
                    <img src="assets/images/banner2.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text agileinfo_about_text">
                            <ul class="agileits_social_list">
                                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><br>
              <p>Obafemi Awolowo University Farm</p><br>
                <a href="<?= ($BASE) ?>/locate_farm" style="color: #2b542c"><button>Locate Farm</button></a>
                <a href="<?= ($BASE) ?>/produce_view" style="color: #2b542c"><button>View produce</button></a>
            </div>
            <div class="col-md-3 w3_agileits_team_grid">
                <div class="w3layouts_news_grid">
                    <img src="assets/images/farm_image.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text agileinfo_about_text">
                            <ul class="agileits_social_list">
                                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><br>
                <p>Akinwale Farms</p><br>
                <a href="<?= ($BASE) ?>/locate_farm1" style="color: #2b542c"><button>Locate Farm</button></a>
                <a href="<?= ($BASE) ?>/produce_view1" style="color: #2b542c"><button>View produce</button></a>
            </div>
            <div class="col-md-3 w3_agileits_team_grid">
                <div class="w3layouts_news_grid">
                    <img src="assets/images/farm_image2.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text agileinfo_about_text">
                            <ul class="agileits_social_list">
                                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><br>
                <p>Araromi Farms</p><br>
                <a href="<?= ($BASE) ?>/locate_farm2" style="color: #2b542c"><button>Locate Farm</button></a>
                <a href="<?= ($BASE) ?>/produce_view2" style="color: #2b542c"><button>View produce</button></a>
            </div>
            <div class="col-md-3 w3_agileits_team_grid">
                <div class="w3layouts_news_grid">
                    <img src="assets/images/poultry.jpg" alt=" " class="img-responsive" />
                    <div class="w3layouts_news_grid_pos">
                        <div class="wthree_text agileinfo_about_text">
                            <ul class="agileits_social_list">
                                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><br>
                <p>Adeife Farms</p><br>
                <a href="<?= ($BASE) ?>/locate_farm3" style="color: #2b542c"><button>Locate Farm</button></a>
                <a href="<?= ($BASE) ?>/produce_view3" style="color: #2b542c"><button>View produce</button></a>
            </div>

        </div>

    </div><br><br>
    <div class="container">
        <div class="col-md-3 w3_agileits_team_grid">
            <div class="w3layouts_news_grid">
                <img src="assets/images/poultry.jpg" alt=" " class="img-responsive" />
                <div class="w3layouts_news_grid_pos">
                    <div class="wthree_text agileinfo_about_text">
                        <ul class="agileits_social_list">
                            <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <p>Abbanik Farms</p><br>
            <a href="<?= ($BASE) ?>/locate_farm4" style="color: #2b542c"><button>Locate Farm</button></a>
            <a href="<?= ($BASE) ?>/produce_view4" style="color: #2b542c"><button>View produce</button></a>
        </div>
    </div>
</div>
<!-- //team -->
<!-- footer -->
<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
<!-- //footer -->
<!-- menu -->
</html>

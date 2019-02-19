<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="agileits_header">

    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="<?= ($BASE) ?>/checkout" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="View your cart" class="button" />
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="<?= ($BASE) ?>/login">Login</a></li>
                            <li><a href="<?= ($BASE) ?>/users_reg">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!---->
    <div class="clearfix"> </div>
</div><div class="w3l_header_right1">-->
    <!--<h2><a href="mail.html">Contact Us</a></h2>-->
    <!--</div>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3_agile_logo">
            <h1><a href="<?= ($BASE) ?>/"><img src="assets/images/logo1.png" alt="Logo"><i></i></a></h1>
        </div>
        <!--<div class="w3ls_logo_products_left1">-->
            <!--<ul class="special_items">-->
                <!--<li><a href="events.html">Events</a><i>/</i></li>-->
                <!--<li><a href="about.html">About Us</a><i>/</i></li>-->
                <!--<li><a href="products.html">Best Deals</a><i>/</i></li>-->
                <!--<li><a href="services.html">Services</a></li>-->
            <!--</ul>-->
        <!--</div>-->
        <!--<div class="w3ls_logo_products_left1">-->
            <!--<ul class="phone_email">-->
                <!--<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>-->
                <!--<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>-->
            <!--</ul>-->
        <!--</div>-->
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a href="<?= ($BASE) ?>/livestock">Livestock</a></li>
                    <!--<li><a href="household.html">Poultry</a></li>-->
                    <!--<li class="dropdown mega-dropdown active">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Vegetables<span class="caret"></span></a>-->
                        <!--<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">-->
                            <!--<div class="w3ls_vegetables">-->
                                <!--<ul>-->
                                    <!--<li><a href="vegetables.html">Vegetables</a></li>-->
                                    <!--<li><a href="vegetables.html">Fruits</a></li>-->
                                <!--</ul>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</li>-->
                    <li><a href="<?= ($BASE) ?>/vegetables">Vegetables</a></li>
                    <li><a href="<?= ($BASE) ?>/fruits">Fruits</a></li>
                    <!--<li class="dropdown">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>-->
                        <!--<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">-->
                            <!--<div class="w3ls_vegetables">-->
                                <!--<ul>-->
                                    <!--<li><a href="drinks.html">Soft Drinks</a></li>-->
                                    <!--<li><a href="drinks.html">Juices</a></li>-->
                                <!--</ul>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</li>-->
                    <li><a href="<?= ($BASE) ?>/fishery">Fishery</a></li>

                    <li><a href="<?= ($BASE) ?>/tubers">Tubers</a></li>
                    <li><a href="<?= ($BASE) ?>/grain">Grain</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Get your <span>farm produce</span> at your doorstep.</h3>
                            <div class="more">
                                <a href="<?= ($BASE) ?>/livestock" class="button--saqui button--round-l button--text-thick" data-text="Order now">Order now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3>Get your <span>farm produce</span> at your doorstep.</h3>
                            <div class="more">
                                <a href="<?= ($BASE) ?>/livestock" class="button--saqui button--round-l button--text-thick" data-text="Order now">Order now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Get your <span>farm produce</span> at your doorstep.</h3>
                            <div class="more">
                                <a href="<?= ($BASE) ?>/vegetables" class="button--saqui button--round-l button--text-thick" data-text="Order now">Order now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="assets/ecommerce/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="assets/ecommerce/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
</body>
</html>
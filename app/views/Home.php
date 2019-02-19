<?php

class Home extends Controller {
	function index(Base $f3) {
		$f3->set('pageTitle', 'Farm Express');
		$f3->set('header_menu', 'templates/header_menu.html');
		$f3->set('footer', 'templates/footer.html');
		$f3->set('content', 'index.html');
	}
	function about(Base $f3) {
		$f3->set('pageTitle', 'About us');
		$f3->set('header_menu', 'templates/header_menu1.html');
		$f3->set('footer', 'templates/footer.html');
		$f3->set('content', 'about.html');
	}
	function services(Base $f3) {
		$f3->set('pageTitle', 'Our Services');
		$f3->set('header_menu', 'templates/header_menu1.html');
		$f3->set('footer', 'templates/footer.html');
		$f3->set('content', 'services.html');
	}
    function contact(Base $f3) {
        $f3->set('pageTitle', 'Contact Us');
        $f3->set('header_menu', 'templates/header_menu1.html');
        $f3->set('footer', 'templates/footer.html');
        $f3->set('content', 'contact.html');
    }
    function view_farms(Base $f3) {
        $f3->set('pageTitle', 'View Farms');
        $f3->set('header_menu', 'templates/header_menu1.html');
        $f3->set('footer', 'templates/footer.html');
        $f3->set('content', 'view_farms.html');
    }
    function login(Base $f3) {
        $f3->set('pageTitle', 'Login');
//        $f3->set('header_menu', 'templates/header_menu1.html');
//        $f3->set('footer', 'templates/footer.html');
        $f3->set('content', 'login.html');
    }
    function users_reg(Base $f3) {
        $f3->set('pageTitle', 'Registration');
//        $f3->set('header_menu', 'templates/header_menu1.html');
//        $f3->set('footer', 'templates/footer.html');
        $f3->set('content', 'users_reg.html');
    }
    function agents_reg(Base $f3) {
        $f3->set('pageTitle', 'Registration');
//        $f3->set('header_menu', 'templates/header_menu1.html');
//        $f3->set('footer', 'templates/footer.html');
        $f3->set('content', 'agents_reg.html');
    }
    function farmers_reg(Base $f3) {
        $f3->set('pageTitle', 'Registration');
//        $f3->set('header_menu', 'templates/header_menu1.html');
//        $f3->set('footer', 'templates/footer.html');
        $f3->set('content', 'farmers_reg.html');
    }
}

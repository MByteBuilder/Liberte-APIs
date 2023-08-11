<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
$routes->get('/', 'Home::index');



$routes->group('api', function ($routes) {
    $routes->group('v1', function ($routes) {
		$routes->get('country-list', 'Api\v1\Settings::country_list');
		$routes->get('kyc-document-list', 'Api\v1\Settings::kyc_document_list');
		$routes->get('member-relation-list', 'Api\v1\Settings::member_relation');
		$routes->get('weather-mode', 'Api\v1\Settings::weather_mode');
		
		$routes->post('check-email-phone', 'Api\v1\Users::check_email_phone');
		$routes->post('login', 'Api\v1\Users::login');
		$routes->post('registration', 'Api\v1\Users::registration');
		$routes->post('email-verification', 'Api\v1\Users::email_verification');
		$routes->post('resend-otp', 'Api\v1\Users::resend_otp');
		$routes->post('user-email-verification-send', 'Api\v1\Users::send_user_email_oto');
		
		$routes->get('user-dashboard', 'Api\v1\Users::user_dashboard');


		$routes->post('forgot-password', 'Api\v1\Users::forgot_password');
		$routes->post('forgot-password-otp-verification', 'Api\v1\Users::forgot_password_otp_verification');
		$routes->post('forgot-password-change-password', 'Api\v1\Users::forgot_password_change_password');
		$routes->post('change-password', 'Api\v1\Users::change_password');

		$routes->post('verify-phone', 'Api\v1\Users::verify_phone');
		
		$routes->post('add-family-member', 'Api\v1\Users::add_family_member');
		$routes->get('family-members', 'Api\v1\Users::family_members');


		$routes->get('user-profile', 'Api\v1\Users::user_profile');
		$routes->post('update-user-profile', 'Api\v1\Users::edit_profile');
		$routes->post('update-kyc', 'Api\v1\Users::upload_kyc');
		$routes->get('user-wallet-history', 'Api\v1\Users::wallet_history');
		

		
		$routes->post('add-beneficiary', 'Api\v1\Insurance::add_beneficiary');
		$routes->get('beneficiaries', 'Api\v1\Insurance::beneficiary_list');
		$routes->post('beneficiary-share-update', 'Api\v1\Insurance::edit_beneficiary_share');
		$routes->post('beneficiary-share-update-raw', 'Api\v1\Insurance::edit_beneficiary_share_raw');

		$routes->post('update-health-details', 'Api\v1\Walknearn::update_user_health_details');
		$routes->post('start-waling', 'Api\v1\Walknearn::start_walking');
		$routes->post('end-walking', 'Api\v1\Walknearn::end_walking');
		$routes->post('update-walking', 'Api\v1\Walknearn::update_walking');
		$routes->get('walking-activity', 'Api\v1\Walknearn::walking_history');
		


		$routes->get('view-kycs', 'Api\v1\Kyc::kycs');
		$routes->post('verify-kyc', 'Api\v1\Kyc::verify_kyc');
		
		
		$routes->post('drinking-water-set-goal', 'Api\v1\Drinkingwater::set_goal');
		$routes->get('drinking-water-goal-activity', 'Api\v1\Drinkingwater::goal_activity');
		$routes->post('add-drinking-water-activity', 'Api\v1\Drinkingwater::add_drinking_water_activity');
		$routes->get('drinking-water-activity', 'Api\v1\Drinkingwater::drinking_water_activity_history');
		$routes->post('drinking-water-edit-goal', 'Api\v1\Drinkingwater::edit_goal');
		
		
		$routes->get('services', 'Api\v1\Services::service_list');
		$routes->get('feature-list', 'Api\v1\Services::feature_list');
		
		
	});
});


 

// $routes->add('/users', 'API/v1/Users::user_listing');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

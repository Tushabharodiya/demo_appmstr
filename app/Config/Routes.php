<?php

use CodeIgniter\Router\RouteCollection;

// Common Settings
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::login');

$routes->get('confirmOTP', 'ConfirmOTP::index');
$routes->post('confirmOTP', 'ConfirmOTP::confirmOTP');

$routes->get('logout', 'Logout::index');

$routes->get('error', 'Error::index');

$routes->get('/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index');

$routes->get('is-theme', 'Dashboard::theme');

$routes->match(['get', 'post'], 'dynamic-chart', 'DynamicChart::index');

$routes->get('remove-session', 'Session::removeSession');

// User Functions
$routes->get('user-profile', 'User::userProfile');

// Android Application Functions
$routes->match(['get', 'post'], 'new-app', 'App::appNew');
$routes->get('demo-app', 'App::appDemo');
$routes->match(['get', 'post'], 'view-app', 'App::appView');
$routes->get('info-app/(:any)', 'App::appInfo/$1');
$routes->match(['get', 'post'], 'edit-app/(:any)', 'App::appEdit/$1');
$routes->get('delete-app/(:any)', 'App::appDelete/$1');

// Android Version Functions
$routes->match(['get', 'post'], 'new-version/(:any)', 'Version::versionNew/$1');
$routes->get('info-version/(:any)', 'Version::versionInfo/$1');
$routes->match(['get', 'post'], 'edit-version/(:any)', 'Version::versionEdit/$1');
$routes->get('delete-version/(:any)', 'Version::versionDelete/$1');

// Android Subscription Functions
$routes->match(['get', 'post'], 'new-subscription/(:any)', 'Subscription::subscriptionNew/$1');
$routes->get('info-subscription/(:any)', 'Subscription::subscriptionInfo/$1');
$routes->match(['get', 'post'], 'edit-subscription/(:any)', 'Subscription::subscriptionEdit/$1');
$routes->get('delete-subscription/(:any)', 'Subscription::subscriptionDelete/$1');

// Android Roi Functions
$routes->match(['get', 'post'], 'new-roi/(:any)', 'Roi::roiNew/$1');
$routes->match(['get', 'post'], 'view-roi/(:any)', 'Roi::roiView/$1');
$routes->match(['get', 'post'], 'more-roi/(:any)', 'Roi::moreRoi/$1');
$routes->match(['get', 'post'], 'edit-roi/(:any)', 'Roi::roiEdit/$1');
$routes->get('delete-roi/(:any)', 'Roi::roiDelete/$1');

// Android Privacy Functions
$routes->match(['get', 'post'], 'edit-privacy/(:any)', 'Privacy::privacyEdit/$1');

// Android Json Functions
$routes->match(['get', 'post'], 'edit-json/(:any)', 'Json::jsonEdit/$1');

// Android Developer Functions
$routes->match(['get', 'post'], 'new-developer', 'Developer::developerNew');
$routes->match(['get', 'post'], 'view-developer', 'Developer::developerView');
$routes->match(['get', 'post'], 'info-developer/(:any)', 'Developer::developerInfo/$1');
$routes->match(['get', 'post'], 'edit-developer/(:any)', 'Developer::developerEdit/$1');
$routes->get('developer-status/(:any)', 'Developer::developerStatus/$1');

// Android Concept Functions
$routes->match(['get', 'post'], 'new-concept', 'Concept::conceptNew');
$routes->match(['get', 'post'], 'view-concept', 'Concept::conceptView');
$routes->match(['get', 'post'], 'info-concept/(:any)', 'Concept::conceptInfo/$1');
$routes->match(['get', 'post'], 'edit-concept/(:any)', 'Concept::conceptEdit/$1');
$routes->match(['get', 'post'], 'concept-status/(:any)', 'Concept::conceptStatus/$1');

// Android Banner Functions
$routes->match(['get', 'post'], 'new-banner', 'Banner::bannerNew');
$routes->match(['get', 'post'], 'view-banner', 'Banner::bannerView');
$routes->match(['get', 'post'], 'edit-banner/(:any)', 'Banner::bannerEdit/$1');
$routes->get('delete-banner/(:any)', 'Banner::bannerDelete/$1');

// Android Common Json Functions
$routes->match(['get', 'post'], 'new-common-json', 'CommonJson::commonJsonNew');
$routes->get('view-common-json', 'CommonJson::commonJsonView');
$routes->match(['get', 'post'], 'edit-common-json/(:any)', 'CommonJson::commonJsonEdit/$1');

// Android Device Functions
$routes->match(['get', 'post'], 'new-device', 'Device::deviceNew');
$routes->match(['get', 'post'], 'view-device', 'Device::deviceView');
$routes->match(['get', 'post'], 'edit-device/(:any)', 'Device::deviceEdit/$1');
$routes->get('delete-device/(:any)', 'Device::deviceDelete/$1');

// Android Ip Functions
$routes->match(['get', 'post'], 'new-ip', 'Ip::ipNew');
$routes->match(['get', 'post'], 'view-ip', 'Ip::ipView');
$routes->match(['get', 'post'], 'edit-ip/(:any)', 'Ip::ipEdit/$1');
$routes->get('delete-ip/(:any)', 'Ip::ipDelete/$1');

// Android Gmail Functions
$routes->match(['get', 'post'], 'new-gmail', 'Gmail::gmailNew');
$routes->match(['get', 'post'], 'view-gmail', 'Gmail::gmailView');
$routes->get('info-gmail/(:any)', 'Gmail::gmailInfo/$1');
$routes->match(['get', 'post'], 'edit-gmail/(:any)', 'Gmail::gmailEdit/$1');
$routes->match(['get', 'post'], 'gmail-status/(:any)', 'Gmail::gmailStatus/$1');

// Android Facebook Functions
$routes->match(['get', 'post'], 'new-facebook', 'Facebook::facebookNew');
$routes->match(['get', 'post'], 'view-facebook', 'Facebook::facebookView');
$routes->get('info-facebook/(:any)', 'Facebook::facebookInfo/$1');
$routes->match(['get', 'post'], 'edit-facebook/(:any)', 'Facebook::facebookEdit/$1');
$routes->match(['get', 'post'], 'facebook-status/(:any)', 'Facebook::facebookStatus/$1');

// Android Simcard Functions
$routes->match(['get', 'post'], 'new-simcard', 'Simcard::simcardNew');
$routes->match(['get', 'post'], 'view-simcard', 'Simcard::simcardView');
$routes->match(['get', 'post'], 'edit-simcard/(:any)', 'Simcard::simcardEdit/$1');
$routes->get('delete-simcard/(:any)', 'Simcard::simcardDelete/$1');

// Android Feedback Functions
$routes->match(['get', 'post'], 'view-feedback', 'Feedback::feedbackView');
$routes->match(['get', 'post'], 'feedback-status/(:any)', 'Feedback::feedbackStatus/$1');
$routes->get('delete-feedback/(:any)', 'Feedback::feedbackDelete/$1');

// Android Facebook Api Functions
$routes->post('facebook-view-data', 'Facebook::facebookViewData');
$routes->post('facebook-view-data/(:any)', 'Facebook::facebookViewData/$1');
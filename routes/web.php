<?php



$router->get('/ChartData', 'ChartDataController@onAllSelect');
$router->get('/ClientReview','ClientReviewController@onAllSelect');
$router->post('/ContactData','ContactController@onContactSend');

$router->get('/CourseHome','CourseContoller@onSelectFour');
$router->get('/CourseAll','CourseContoller@onSelectAll');
$router->post('/CourseDetails','CourseContoller@onSelectDetails');

$router->get('/footerDetails','FooterController@onSelectAll');
$router->get('/serviceDetails','ServiceController@onSelectAllService');

$router->get('/project3','ProjectController@onSelect3');
$router->get('/projectSelectAll','ProjectController@onSelectAll');
$router->post('/projectDetails','ProjectController@onSelectDetails');

$router->get('/videoHome','HomeController@onVideotAll');
$router->get('/totalProjectClient','HomeController@onSelectClientProject');
$router->get('/tectDesc','HomeController@onSelectTechDesc');
$router->get('/homeTitle','HomeController@onSelectHomeTitle');
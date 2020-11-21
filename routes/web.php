<?php



$router->get('/ChartData', 'ChartDataController@onAllSelect');
$router->get('/ClientReview','ClientReviewController@onAllSelect');
$router->post('/ContactData','ContactController@onContactSend');

$router->get('/CourseHome','CourseContoller@onSelectFour');
$router->get('/CourseAll','CourseContoller@onSelectAll');
$router->post('/CourseDetails','CourseContoller@onSelectDetails');

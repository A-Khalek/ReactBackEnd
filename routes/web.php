<?php



$router->get('/ChartData', 'ChartDataController@onAllSelect');
$router->get('/ClientReview','ClientReviewController@onAllSelect');
$router->post('/ContactData','ContactController@onContactSend');
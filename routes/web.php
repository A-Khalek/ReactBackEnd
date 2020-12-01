<?php

$router->get('/ChartData', ['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);
$router->get('/ClientReview',['middleware'=>'auth','uses'=>'ClientReviewController@onAllSelect']);
$router->post('/ContactSend',['middleware'=>'auth','uses'=>'ContactController@onContactSend']);
$router->get('/CourseHome',['middleware'=>'auth','uses'=>'CourseContoller@onSelectFour']);
$router->get('/CourseAll',['middleware'=>'auth','uses'=>'CourseContoller@onSelectAll']);
$router->get('/CourseDetails/{CourseID}',['middleware'=>'auth','uses'=>'CourseContoller@onSelectDetails']);
$router->get('/footerDetails',['middleware'=>'auth','uses'=>'FooterController@onSelectAll']);
$router->get('/serviceDetails',['middleware'=>'auth','uses'=>'ServiceController@onSelectAllService']);
$router->get('/project3',['middleware'=>'auth','uses'=>'ProjectController@onSelect3']);
$router->get('/projectSelectAll',['middleware'=>'auth','uses'=>'ProjectController@onSelectAll']);
$router->get('/projectDetails/{projectId}',['middleware'=>'auth','uses'=>'ProjectController@onSelectDetails']);
$router->get('/videoHome',['middleware'=>'auth','uses'=>'HomeController@onVideotAll']);
$router->get('/totalProjectClient',['middleware'=>'auth','uses'=>'HomeController@onSelectClientProject']);
$router->get('/tectDesc',['middleware'=>'auth','uses'=>'HomeController@onSelectTechDesc']);
$router->get('/homeTitle',['middleware'=>'auth','uses'=>'HomeController@onSelectHomeTitle']);
$router->get('/information',['middleware'=>'auth','uses'=>'InfromationController@onAllSelect']);

$router->get('/about',['middleware'=>'auth','uses'=>'AboutController@onAllSelect']);
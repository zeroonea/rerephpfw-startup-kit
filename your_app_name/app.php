<?php

function app_controller($user, $request, $response){
	if(empty($request['router'])){
		echo $response['twig']->render('404.html.twig', $response['data']);
		die();
	}
}event::add('authentication', 'app_controller'); 
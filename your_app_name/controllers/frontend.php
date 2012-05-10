<?php

function fe_after_response($user, $request, $response){
	switch($request['router']){
		case 'home':
			echo $response['twig']->render('homepage.html.twig', $response['data']);
		break;
	}
}event::add('after_response', 'fe_after_response');
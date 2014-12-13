<?php

function verificarRota($server,$rotasValidas) {
	$rota = parse_url("http://".$server['HTTP_HOST'].$server['REQUEST_URI']);
	$path = preg_replace('/\//', '', $rota['path'], 1);

	if( array_key_exists($path, $rotasValidas) ) {
		require_once "pages/".$rotasValidas[$path].".php";
	} else {
		http_response_code(404);
		require_once "pages/error.php";
	}
}
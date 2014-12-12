<?php

function verificarRota($server,$rotasValidas) {
	$rota = parse_url("http://".$server['HTTP_HOST'].$server['REQUEST_URI']);
	$path = preg_replace('/\//', '', $rota['path'], 1);

	if( array_key_exists($path, $rotasValidas) ) {
		return "pages/".$rotasValidas[$path].".php";
	}

	return "pages/error.php";
}
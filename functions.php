<?php

function verificarRota($server,$rotasValidas) {
	$rota = parse_url("http://".$server['HTTP_HOST'].$server['REQUEST_URI']);
	$path = preg_replace('/\//', '', $rota['path'], 1);

	if( in_array($path, $rotasValidas) ) {
		return $path.".php";
	}

	return "error.php";
}
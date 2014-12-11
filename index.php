<?php
require_once "rotasValidas.php"; // Array de rotas válidas
require_once "functions.php"; // Arquivo de funções
require_once "header.php"; // Arquivo com o html do header
require_once "menu.php"; // Arquivo com o html do menu

require_once verificarRota($_SERVER,$rotasValidas); // Conteúdo da página ou erro 404

require_once "footer.php"; // Arquivo com o html do footer
<?php
require_once "rotasValidas.php"; // Array de rotas válidas
require_once "functions.php"; // Arquivo de funções
require_once "layout/header.php"; // Arquivo com o html do header
require_once "layout/menu.php"; // Arquivo com o html do menu

verificarRota($_SERVER,$rotasValidas); // Conteúdo da página ou erro 404

require_once "layout/footer.php"; // Arquivo com o html do footer
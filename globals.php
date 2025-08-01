<?php 
// session_start();

// $BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]. "?");
?>

<?php
// Inicia a sessão, se ainda não estiver iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Detecta o protocolo (http ou https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

// 2. Pega o nome do host (ex: localhost ou www.meusite.com.br)
$host = $_SERVER['HTTP_HOST'];

// 3. Pega o caminho do diretório do script atual de forma segura
$script_name = $_SERVER['SCRIPT_NAME'];
$project_path = dirname($script_name);

// 4. Garante que o caminho termine com uma barra se não for o diretório raiz
if ($project_path === '/' || $project_path === '\\') {
    $project_path = ''; // Se estiver na raiz, não precisa de caminho extra
}
$project_path .= '/';

// 5. Monta a URL base final e a define como uma constante
define('BASE_URL', $protocol . $host . $project_path);
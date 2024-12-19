<?php
session_start();

if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}
$_SESSION['page_views']++;

echo "Je hebt deze pagina " . $_SESSION['page_views'] . " keer bezocht tijdens deze sessie.";
?>

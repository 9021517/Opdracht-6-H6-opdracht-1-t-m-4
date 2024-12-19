<?php
$cookie_name = "page_views_cookie";
if (!isset($_COOKIE[$cookie_name])) {
    $page_views = 1;
} else {
    $page_views = $_COOKIE[$cookie_name] + 1;
}
setcookie($cookie_name, $page_views, time() + (86400 * 30)); // 30 dagen geldig

echo "Deze pagina is in totaal " . $page_views . " keer bezocht (cookie).";
?>

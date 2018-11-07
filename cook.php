<?php
$cookie_name = "Juventus";
$cookie_value = "UCL";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "'" . $cookie_name . "' Winners!<br>";
    echo "Winners Of: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
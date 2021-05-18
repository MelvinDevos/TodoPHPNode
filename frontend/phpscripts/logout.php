<?php
// Session variabelen verwijdern om uit te loggen
session_start();
session_destroy();
header("Location: ../index.php");
exit();
?>
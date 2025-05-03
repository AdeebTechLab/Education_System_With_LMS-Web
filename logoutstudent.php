<?php
session_start();
session_unset(); // Sabhi session variables ko remove karne ke liye
session_destroy(); // Poora session destroy karne ke liye
header('Location: index.php'); // Redirect karna index.php par
exit(); // Script execution ko yahin rokne ke liye
?>
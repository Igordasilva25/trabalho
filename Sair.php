<?php
session_start();
isset($_SESSION);
session_destroy();
echo '<script type="text/javascript"> location.href="index.php" </script>';


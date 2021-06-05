<?php
// memulai sesi
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set variavel sesi
$_SESSION["username"] = "Indah";
$_SESSION["nama"] = "Indah Aida Sapitri";
echo "Variabel sesi telah diciptakan.";
?>
</body>
</html>

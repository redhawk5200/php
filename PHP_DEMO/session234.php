<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$Fn = "Shahroz";
$Sn = "Bakht";
// Set session variables
$_SESSION["Firstname"] = $Fn;
$_SESSION["Lastname"] = $Sn;
echo "Session variables are set.";
echo "<br><br>";

echo "First Name is " . $_SESSION["Firstname"] . ".<br>";
echo "Second Name is " . $_SESSION["Lastname"] . ".";
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php if ($action != 'register' && !isset($_SESSION['userid'])) { ?>
    <div><a href="?action=register">Register</a></div>
<?php } elseif($action != 'register' && $action != 'logout' && $action != 'thankyou' && isset($_SESSION['userid'])) {?>
    <div>Welcome, <?php echo $_SESSION['userid']; ?>! (<a href="?action=logout">sign out)</a></div>
<?php } ?>

<div class="headr"><header><h1>Zippy Used Autos</h1></header></div>
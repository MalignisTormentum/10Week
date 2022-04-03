<?php include 'header.php'; ?>

<div>
    <h3>Thank you for logging out, <?php echo $_SESSION['userid']; ?>!</h3>
    <p>Click <a href= "?action=list_vehicles">here</a> to go back to the vehicle list</p>
</div>

<?php 
    $_SESSION = array();
    session_destroy();
    $params = session_get_cookie_params();
    setcookie(session_name(), '', strtotime('-1 year'), $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    include('footer.php'); 
?>
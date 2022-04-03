<?php include 'header.php'; ?>

<div>
    <h3>Please enter your first name:</h3>
    <form action = "index.php?action=register" method="get">
        <input class="half-width" type="text" name="firstname" required>
        <button>Submit</button>
    </form>
</div>

<?php include 'footer.php'; ?>
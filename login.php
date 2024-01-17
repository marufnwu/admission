<?php
    /* Your password */
    $password = '2(@@password';

    /* Redirects here after login */
    $redirect_after_login = 'forms-lead.php';

    /* Will not ask password again for */
    $remember_password = strtotime('+2 days'); // 30 days
    $username = $_POST['username'];
    if (isset($_POST['password']) && $_POST['password'] == $password && $username == "admin") {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
    } else {
         // If the credentials are incorrect, display an error message
        $error = "";
    }
?>

<style>
    body {
       position: absolute;
    top: 50%;
    margin: auto;
    left: 48%;
    width: 30%;
    transform: translate(-50%, -50%);
    background: #ffd46e;
}
form.main-pass-fow-378 {
    background: #ffffff;
    padding: 40px;
    border: 1px solid #584500;
        width: 100%;
}
.couple-4378 {
    display: grid;
    padding: 9px 0px;
}
input.main-pass-input-378 {
    padding: 10px;
       border: 1px solid black;
        width: 100%;
    margin-top: 9px;
}
input.main-sub-378 {
    padding: 11px 41px;
    margin-top: 20px;
    background: #ffd46e;
    color: black;
}
</style>
    <!-- Display the login form -->
    <form class="main-pass-fow-378" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="couple-4378">
        <label class="main-pass-label-378" for="username">Username:</label>
        <input class="main-pass-input-378" type="text" name="username" id="username">
            </div>
        <div class="couple-4378">
        <label class="main-pass-label-378" for="password">Password:</label>
        <input class="main-pass-input-378" type="password" name="password" id="password">
</div>
        <input class="main-sub-378" type="submit" name="submit" value="Log in">
    </form>

<?php
// Display an error message if the login credentials were incorrect
if (isset($error)) {
    echo "<p>" . $error . "</p>";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    echo "Hello $name, we have your email as $email.";
    exit;
}
?>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit">Submit</button>
</form>
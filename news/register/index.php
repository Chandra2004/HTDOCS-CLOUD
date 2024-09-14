<?php
    include '../functions/RegisterModel.php';
?>

<h1>ini register</h1>

<form action="" method="post">
    <input type="email" name="email" id="" placeholder="email">
    <br>
    <input type="text" name="name" id="" placeholder="name">
    <br>
    <input type="password" name="password" id="" placeholder="password">
    <br>
    <select name="role" id="">
        <option value="user">user</option>
        <option value="manager">manager</option>
        <option value="admin">admin</option>
    </select>
    <br>
    <button type="submit" name="register">submit</button>
</form>

<a href="../index.php">home</a>
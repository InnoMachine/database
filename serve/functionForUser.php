<html>
<head>
    <title>Add User</title>
</head>
<body>
<h1>Add User</h1>
<form action="newUser.php" method="post">
    <table id="table">
        <tr>
            <td>Name</td>
            <td>
                <input id="name" name="name" type="text">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input id="password" name="password" type="password">
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input id="phone" name="phone" type="text"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input id="photo" type="file" name="photo" value="Choose Photo"></td>
        </tr>
        <tr>
            <td>
              <input id="submit" type="submit" value="submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>




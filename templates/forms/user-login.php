
<form action=" <? echo $_SERVER['PHP_SELF']; ?> " method="post">
    <p>User Name:<br /><input type="text" name="userName" <? if(!$row){echo 'value="'.$_POST['user_name'].'"';} ?> /></p>
    <p>First Name:<br /><input type="text" name="firstName" <? echo 'value="'.$_POST['fname'].'"'; ?> /></p>
    <p>Last Name:<br /><input type="text" name="lastName" <? echo 'value="'.$_POST['lname'].'"'; ?> /></p>
    <p>Email:<br /><input type="text" name="email" <? echo 'value="'.$_POST['email'].'"'; ?> /></p>
    <p>Password:<br /><input type="password" name="password" /></p>
    <p>Re-Type Password:<br /><input type="password" name="rePassword" /></p>
    <p><input type="submit" name="submit" value="Sign Up" /></p>
</form>

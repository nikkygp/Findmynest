<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST['submit']))
{
 $name = filter_var($_POST['value'],FILTER_SANITIZE_STRING);
 echo $name;
}
?> 
<form method="post">
<input type="text" name="value">
<button type="submit" name="submit">Hai</button>
</form>
</body>
</html>

<?php
include('database.php');
$query = "insert into 'user' value(null, '$_POST[FirstName]','$_POST[LastName]',
'$_POST[Email]','$_POST[Password]',$_POST[Phone])";



$query_run = mysqli_query($connection,$query);


?>
<script type="text/javascript">
    alert("registration form successfully sumbmited....")
    window.location.href = "signIn.php";

</script>
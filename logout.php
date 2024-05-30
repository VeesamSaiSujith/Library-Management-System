<?php
setcookie("user",$email,time()+3600,"/","",0);
?>
<script>
alert($email+"Logout successfull");
header("Location: lms.html");
</script>



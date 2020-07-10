<?php
    session_start();
    $myname = $_SESSION['myname'];
?>
<HTML>
<BODY>
    Welcome <?php echo $myname ?> to MyPage.com <br>
</BODY>
</HTML>

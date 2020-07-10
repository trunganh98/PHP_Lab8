<?php
    session_start();
    $myname = $_SESSION['myname'];
    // Hàm session_unset () hủy đăng ký biến phiên
    session_unset();
    session_destroy();
    echo "Session destroyed!";
?>
<HTML>
<BODY>
<BR>
<A HREF="ex3.php">Homepage of MyPage.com</A>
</BODY>
</HTML>

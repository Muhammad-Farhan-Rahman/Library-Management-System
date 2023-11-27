<?php
    session_start();
    unset($_SESSION["member"]);
?>
<script type="text/javascript">
    document.location.href="/phplms/login/login.php";
</script>


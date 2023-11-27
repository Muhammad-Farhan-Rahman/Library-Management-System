<?php
include "connection.php";

//Deletes Books
if(isset($_GET["ISBN"])) {
    $ISBN = $_GET["ISBN"];
    mysqli_query($link, "delete from book where ISBN=$ISBN");
?>
<script type="text/javascript">
    window.location="display_books.php";
</script>
<?php
}
else {
?>
<script type="text/javascript">
    window.location="display_books.php";
</script>
<?php
}


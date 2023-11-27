<?php
include 'connection.php';

//    returns book
if(isset($_GET["issue_ID"])) {
    $issue_ID = $_GET["issue_ID"];
    $a = date("Y-m-d");
    $res = mysqli_query($link, "update log set return_date='$a' where issue_ID = $issue_ID");

//    increases availability after returning book
    $book_name="";
    $res = mysqli_query($link, "select book_name from log where issue_ID = $issue_ID");
    while ($row = mysqli_fetch_array($res)) {
        $book_name = $row["book_name"];
    }
    mysqli_query($link, "update book set availability = availability + 1 where title = '$book_name'");

//    update transaction table
    $member_ID = "";
    $due_date = "";
    $res2 = mysqli_query($link,"select * from log where issue_id = $issue_ID");
    while($row = mysqli_fetch_array($res2)) {
        $due_date = $row["due_date"];
        $member_ID = $row["member_ID"];
    }
    $ISBN = "";
    $res3 = mysqli_query($link,"select ISBN from book where title = '$book_name'");
    while($row = mysqli_fetch_array($res3)) {
        $ISBN = $row["ISBN"];
    }
    mysqli_query($link, "insert into transaction values('$member_ID', '$ISBN', '$a', '$due_date')");
//    End of code for updating transaction table
    ?>
    <script type="text/javascript">
        window.location="return_books.php";
    </script>
    <?php
}
else {
    ?>
    <script type="text/javascript">
        window.location="return_books.php";
    </script>
    <?php
}
?>
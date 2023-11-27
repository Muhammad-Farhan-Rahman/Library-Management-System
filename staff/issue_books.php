<?php
session_start();
//redirects to login page if trying to open this page without logging in
if(!isset($_SESSION["staff"])) {
    ?>
    <script type="text/javascript">
        document.location.href="/phplms/login/login.php";
    </script>
    <?php
}
//end of code for page redirection
include "header.php";
include "connection.php";
?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Issue Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form name="form1" action="" method="post">
<!--                            Issue Books Table-->
                            <table>
                                <tr>
                                    <h4>
                                        Select a Member ID
                                    </h4>
                                        <select name="memID" class="form-control selectpicker">
                                            <?php
                                            $res1= mysqli_query($link, "select Member_ID from member");
                                            while ($row = mysqli_fetch_array($res1)) {
                                                echo "<option>";
                                                echo $row["Member_ID"];
                                                echo "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit" value="Search" name="submit1" class="form-control btn btn-default" style="margin-top: 5px; background-color: #466472; color: white">
                                    </td>
                                </tr>
                            </table>

                            <?php
                                if(isset($_POST["submit1"])) {
                                    $res5 = mysqli_query($link, "select * from member where member_id = '$_POST[memID]'");
                                    while ($row5 = mysqli_fetch_array($res5)) {
                                        $member_id = $row5["member_id"];
                                        $name = $row5["name"];
                                        $email = $row5["email"];
                                        $login_ID = $row5["login_ID"];
                                        $password = $row5["password"];
                                        $phone_no = $row5["phone_no"];
                                        $_SESSION["member_id"] = $member_id;
                                    }
                                    ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Issue ID" name="issue_id" required="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Member ID" name="member_id" value="<?php echo $member_id; ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Member's Name" name="member_name" value="<?php echo $name; ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Member's Email" name="member_email" value="<?php echo $email; ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Member's Phone Number" name="member_phone_no" value="<?php echo $phone_no; ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select name="book_name" class="form-control selectpicker">
                                                    <?php
                                                    $res2 = mysqli_query($link, "select Title from book");
                                                    while ($row = mysqli_fetch_array($res2)) {
                                                        echo "<option>";
                                                        echo $row["Title"];
                                                        echo "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Issue Date</span>
                                                <input type="text" class="form-control" placeholder="Issue Date" name="issue_date" value="<?php echo date("Y-m-d"); ?>" required="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Due Date</span>
                                                <input type="text" class="form-control" placeholder="Due Date" name="due_date" value="<?php echo date("Y-m-d"); ?>" required="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" value="Issue this book" class="form-control" name="submit2" class="form-control btn btn-default" style="background-color: #466472; color: white">
                                            </td>
                                        </tr>
                                    </table>

                                    <?php
                                }
                            ?>

                        </form>

                        <?php

                        if(isset($_POST["submit2"])) {
                            $qty = 0;
                            $res = mysqli_query($link, "select * from book where title = '$_POST[book_name]'");
//                            Check Availability
                            while($row = mysqli_fetch_array($res)) {
                                $qty = $row["availability"];
                            }
                            if($qty == 0) {
                                ?>
                                <div class="alert alert-danger col-lg-6 col-lg-push-3">
                                    <strong style="color:white">This book is out of stock!</strong>
                                </div>
                            <?php
                            }

                            else {
                                mysqli_query($link, "insert into log values('$_POST[issue_id]','$_SESSION[member_id]','$_POST[book_name]','','$_POST[issue_date]','$_POST[due_date]')");
//                                Increase Availability
                                mysqli_query($link, "update book set availability = availability - 1 where title = '$_POST[book_name]'");

//                              Updates the manages table
                                $login_ID = $_SESSION["staff"];
                                $issue_ID = $_POST['issue_id'];
                                $res3 = mysqli_query($link,"select staff_ID from library_staff where login_ID = '$login_ID'");
                                while($row = mysqli_fetch_array($res3)) {
                                    $staff_ID = $row["staff_ID"];
                                }
                                mysqli_query($link, "insert into manages values('$staff_ID', '$issue_ID')");
                                ?>
                                <script type="text/javascript">
                                    alert("Book Issued Successfully!");
                                    window.location.href = window.location.href;
                                </script>

                                <?php
//                              End of Code for Updating the manages table
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php
include "footer.php";
?>



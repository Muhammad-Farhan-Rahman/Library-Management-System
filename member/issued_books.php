<?php
session_start();
//redirects to login page if trying to open this page without logging in
if(!isset($_SESSION["member"])) {
    ?>
    <script type="text/javascript">
        document.location.href="/phplms/login/login.php";
    </script>
    <?php
}
//end of code for page redirection
include "connection.php";
include 'header.php';
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>My Issued Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<!--                                Shows issued books to the member-->
                                <table class="table table-bordered">
                                    <th>
                                        Member ID
                                    </th>
                                    <th>
                                        Issued Book Title
                                    </th>
                                    <th>
                                        Issue Date
                                    </th>
                                    <th>
                                        Due Date
                                    </th>
                                    
                                    <?php
                                    $login_ID = $_SESSION["member"];
                                    $res = mysqli_query($link, "select * from log l inner join member m on l.member_id = m.member_id and m.login_ID = '$login_ID';");
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo '<tr>';

                                        echo '<td>';
                                        echo $row["member_ID"];
                                        echo '</td>';
                                        echo '<td>';
                                        echo $row["book_name"];
                                        echo '</td>';
                                        echo '<td>';
                                        echo $row["issue_date"];
                                        echo '</td>';
                                        echo '<td>';
                                        echo $row["due_date"];
                                        echo '</td>';

                                        echo '</tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include 'footer.php';

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
include "connection.php"
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
                        <h2>Staff Information</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
<!--                        Displays information of Staff-->
                        <?php
                        $res=mysqli_query($link,"select * from library_staff");
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        echo "<th>"; echo "Staff ID"; echo "</th>";
                        echo "<th>"; echo "Name"; echo "</th>";
                        echo "<th>"; echo "Email"; echo "</th>";
                        echo "<th>"; echo "Login ID"; echo "</th>";

                        echo "</tr>";
                        while($row=mysqli_fetch_array($res))
                        {
                            echo "<tr>";
                            echo "<td>"; echo $row["staff_ID"]; echo "</td>";
                            echo "<td>"; echo  $row["name"]; echo "</td>";
                            echo "<td>"; echo  $row["email"]; echo "</td>";
                            echo "<td>"; echo  $row["login_ID"]; echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
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

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
                        <h2>Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form1 action="" method="post">
                        <input type="text" name="t1" class="form-control" placeholder="search">
                        <input type="submit" name="submit1" value="search by Title" class="btn btn-default" style="background-color: #e07a5f; color: white">
                        <input type="submit" name="submit2" value="search by Author" class="btn btn-default" style="background-color: #3d405b; color: white">
                        <input type="submit" name="submit3" value="search by Genre" class="btn btn-default" style="background-color: #81b29a; color: white">
                        </form>
                        <?php
//                        Searches by Title
                        if(isset($_POST["submit1"]))
                        {
                            $res = mysqli_query($link, "Select * from book where title like ('$_POST[t1]%') ");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Title";
                            echo "</th>";
                            echo "<th>";
                            echo "Author";
                            echo "</th>";
                            echo "<th>";
                            echo "Availability";
                            echo "</th>";
                            echo "<th>";
                            echo "Publisher";
                            echo "</th>";
                            echo "<th>";
                            echo "Genre";
                            echo "</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["title"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["author"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["availability"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["publisher"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["genre"];
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
//                        Searches by Author
                        else if(isset($_POST["submit2"])) {
                            $res = mysqli_query($link, "Select * from book where author like ('$_POST[t1]%') ");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Title";
                            echo "</th>";
                            echo "<th>";
                            echo "Author";
                            echo "</th>";
                            echo "<th>";
                            echo "Availability";
                            echo "</th>";
                            echo "<th>";
                            echo "Publisher";
                            echo "</th>";
                            echo "<th>";
                            echo "Genre";
                            echo "</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["title"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["author"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["availability"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["publisher"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["genre"];
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
//                        Searches by Genre
                        else if(isset($_POST["submit3"])) {
                            $res = mysqli_query($link, "Select * from book where genre like ('$_POST[t1]%') ");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Title";
                            echo "</th>";
                            echo "<th>";
                            echo "Author";
                            echo "</th>";
                            echo "<th>";
                            echo "Availability";
                            echo "</th>";
                            echo "<th>";
                            echo "Publisher";
                            echo "</th>";
                            echo "<th>";
                            echo "Genre";
                            echo "</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["title"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["author"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["availability"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["publisher"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["genre"];
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                        else {
//                            Displays information of Books
                            $res = mysqli_query($link, "Select * from book");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>";
                            echo "Title";
                            echo "</th>";
                            echo "<th>";
                            echo "Author";
                            echo "</th>";
                            echo "<th>";
                            echo "Availability";
                            echo "</th>";
                            echo "<th>";
                            echo "Publisher";
                            echo "</th>";
                            echo "<th>";
                            echo "Genre";
                            echo "</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["title"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["author"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["availability"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["publisher"];
                                echo "</td>";
                                echo "<td>";
                                echo $row["genre"];
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
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

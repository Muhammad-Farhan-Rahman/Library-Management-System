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
include 'connection.php';
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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<!--                                Return Books-->
                                <form name="form1" action="" method="post">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <select name="memID" class="form-control selectpicker">                                                    
                                                    <?php                                                   
                                                    $res1= mysqli_query($link, "select * from log where return_date=''");
                                                    while ($row2 = mysqli_fetch_array($res1)) {
                                                        echo "<option>";
                                                        echo $row2["member_ID"];
                                                        echo "</option>";
                                                    }
                                                    ?>                                                    
                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit" value="Search" name="submit1" 
                                                       class="form-control btn btn-default" style="background-color: teal; background-color: #466472; color: white">
                                            </td>
                                        </tr>
                                    </table>
                                </form>

                                <?php
                                if(isset($_POST['submit1'])) {
                                    $res = mysqli_query($link, "select * from log where member_ID = '$_POST[memID]'");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    
                                    echo "<th>"; 
                                    echo "Issue ID"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Title"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Issue Date"; 
                                    echo "</th>";
                                    echo "<th>";
                                    echo "Due Date";
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Return Books"; 
                                    echo "</th>";
                                    
                                    echo "</tr>";
                                    
                                    while ($row1 = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        
                                        echo "<td>"; 
                                        echo $row1["issue_ID"];
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["book_name"];
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["issue_date"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row1["due_date"];
                                        echo "</td>";
                                        echo "<td>"; 
                                        ?>
                                <a href="return.php?issue_ID=<?php echo $row1["issue_ID"] ?>"><p style="color: #499167;">Return</p></a>
                                        <?php
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

        <!-- /page footer -->

<?php
include 'footer.php';
?>
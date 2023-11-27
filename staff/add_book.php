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
include "connection.php";
include "header.php";
?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="clearfix"></div>
            <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Books</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
<!--                            Add Books-->
                            <form name ="form1" action="" method="post" class="col-lg-6">

                                <table class=" table table-bordered">
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Title" name="title" required="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" class="form-control" placeholder="Author" name="author" required=""></td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" class="form-control" placeholder="Publisher" name="publisher" required=""></td>
                                    </tr>

                                    <tr>
                                        <td><input type ="text" class="form-control" placeholder="ISBN" name="ISBN" required =""></td>
                                    </tr>

                                    <tr>
                                        <td><input type ="text" class="form-control" placeholder="Availability" name="availability" required=""></td>
                                    </tr>

                                    <tr>
                                        <td><input type ="text" class="form-control" placeholder="Genre" name="genre" required=""></td>
                                    </tr>

                                    <tr>
                                        <td><input type ="text" class="form-control" placeholder="Arrival date" name="arrival_date" required=""></td>
                                    </tr>

                                    <tr>
                                        <td><input type ="submit" name="submit1" class="btn btn-default submit" value="Add this book" style="background-color: #466472; color: white"></td>
                                    </tr>

                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST["submit1"])) {
    mysqli_query($link,"insert into book values('$_POST[ISBN]', '$_POST[title]', '$_POST[author]', '$_POST[arrival_date]', '$_POST[availability]', '$_POST[publisher]', '$_POST[genre]')");
    ?>
    <script type="text/javascript">
        alert("Book added successfully!");
    </script>
    <?php
}

?>
    <!-- /page footer -->
<?php
include "footer.php";
?>



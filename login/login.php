<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post" >
            <h1>Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login" style="background-color: #466472; color: white">

                <a class="reset_pass" href="#" id="anchor">Lost your password?</a>

<!--                This code is for when someone forgets their password-->
                <script type="text/javascript">

                    var anchor = document.getElementById('anchor');

                    anchor.addEventListener('click', doSomething, false);

                    function doSomething() {
                        alert("Contact a librarian");
                    }

                </script>

            </div>

            <div class="clearfix"></div>

            <div class="separator">

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>

<!--Code for loggin in-->
<?php
if(isset($_POST["submit1"]))
{
    $count = 0;
    $res1 = mysqli_query($link, "select * from member where login_ID = '$_POST[username]' && password = '$_POST[password]'");
    $res2 = mysqli_query($link, "select * from library_staff where login_ID = '$_POST[username]' && password = '$_POST[password]'");
    $count1 = mysqli_num_rows($res1);
    $count2 = mysqli_num_rows($res2);

    if($count1 == 0 && $count2 == 0) {
        ?>
        <div class="alert alert-danger col-lg-6 col-lg-push-3">
            <strong style="color:white">Invalid</strong> Username Or Password.
        </div>
        <?php

    }
    else if($count1 > 0) {
        $_SESSION["member"]=$_POST["username"];
        ?>
        <script type = "text/javascript">
            document.location.href="/phplms/member/display_books_users.php";
        </script>
    <?php
    }
    else if($count2 > 0){
        $_SESSION["staff"]=$_POST["username"];
    ?>
        <script type = "text/javascript">
            document.location.href="/phplms/staff/display_staff_info.php";
        </script>
        <?php
    }
}
?>
</body>
</html>

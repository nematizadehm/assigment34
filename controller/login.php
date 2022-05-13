<?php
$username =$_POST["username"];
$pessword = $_POST["pessword"];
if ($username =="monagram" && $pessword ="1234")
{
    $_SESSION["login_status"] = true;
 header("Location:home");
}
else
{
    header("Location:index");

}

?>
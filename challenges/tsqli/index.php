
<?php
highlight_file(__FILE__);
include("dbconfig.php");
if(isset($_POST['id'])&&isset($_POST['pw']))
{
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $query = "select * from user where id = '".$id."' and pw ='".$pw."'";
    $result = mysqli_query($conn,$query);
    @$row = mysqli_fetch_array($result, MYSQLI_NUM);
    if($row)
    {
	$pw = addslashes($pw);
        $admin_query = "select * from user where id = 'admin' and pw='".$pw."'";
        $result = mysqli_query($conn, $admin_query);
        $admin_row = mysqli_fetch_array($result, MYSQLI_NUM);
        if($pw && $row[0] === 'admin' && $pw === $admin_row[1])
        {
            $flag = `cat flag.php`;
            echo "<script>alert('".$flag."');</script>";
        }
    }
}
?>

<form method="post" action="index.php">
id : <input type = "text" name = "id">
pw : <input type = "password" name = "pw">
<input type = "submit" value = "login">
</form>



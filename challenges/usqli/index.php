
<?php
highlight_file(__FILE__);
include("dbconfig.php");
if(isset($_POST['id'])&&isset($_POST['pw']))
{
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $id = addslashes($id);
    if(preg_match("/admin/i", $pw)) exit("No hack~_~"); 
    $query = "select * from user where id = '".$id."' and pw ='".$pw."'";
    $result = mysqli_query($conn,$query);
    @$row = mysqli_fetch_array($result, MYSQLI_NUM);
    if($row)
    {
        if($row[0] === 'admin')
        {
            $flag = `cat flag.php`;
            echo "<script>alert('".$flag."');</script>";
        }
	else
	{
		echo "<h1> hello $row[0]</h1>";
	}
    }
}
?>

<form method="post" action="index.php">
id : <input type = "text" name = "id">
pw : <input type = "password" name = "pw">
<input type = "submit" value = "login">
</form>



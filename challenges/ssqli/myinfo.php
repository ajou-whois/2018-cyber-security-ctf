
<?php
session_start();
highlight_file(__FILE__);
include("dbconfig.php");
if(isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    $query = "select * from user where id = '".$id."'";
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
		echo "<h1> my id : $row[0]</h1>";
	}
    }
}
?>
<button onclick="javascript:history.back(-1)">back</button>


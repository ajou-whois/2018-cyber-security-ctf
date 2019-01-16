<?php
highlight_file(__FILE__);
include('dbconfig.php');
$id = $_POST['id'];
$pw = $_POST['pw'];

if(isset($id) && isset($pw) && !empty($id) && !empty($pw))
{
    if(preg_match("/admin/i", $id)) exit("No hack~_~");
    $id = addslashes($id);
    $pw = addslashes($pw);
    $sql = "insert into user values('$id','$pw')";
    $query_result = mysqli_query($conn, $sql);
    if($query_result)
    {
        echo "<script>alert('join success');location.href='index.php';</script>";
    }
    else
    {
        echo "<script>alert('join fail');location.href='index.php';</script>";
    }
}
?>
<form method="POST" action="join.php">
    ID : <input type="text" name="id"><br>
    PW : <input type="password" name="pw"><br>
    <input type="submit" value="Join">
</form>

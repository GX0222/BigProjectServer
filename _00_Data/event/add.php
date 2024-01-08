<?php
include('db.php');
$userName=$_POST['userName'];
$msgContect=$_POST['msgContect'];
$ip=getenv("REMOTE_ADDR");

if($userName != null)
{
	if($msgContect != null)
	{
		$sql="insert into message (userName,msgContect,msgDate,msgTime,userIP) values ('$userName','$msgContect',now(),now(),'$ip')";
		if($conn->query($sql))
		{
		        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
		}
		else
		{
	        	echo '新增失敗!';
		        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
		}
	}
	else
	{
		echo '留言內容不可空白';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
	
}
else
{
	echo '需填寫暱稱';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
<? php 

function test(){
	$query = "SELECT * FROM STUDENT WHERE STUDENT.CWID = 893464561";
	$result = mysql_query($query,$link);
	printf("CWID:%s<br>\n", mysql_result($result,0,"CWID"));
	printf("first name:%s<br>\n", mysql_result($result,0,"FIRST_NAME"));
}

?>
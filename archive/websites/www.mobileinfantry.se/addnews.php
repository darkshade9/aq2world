<html>
<head>
	<title>[M.I] Mobile Infantry</title>
	<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>

	<table width="780" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="cont">
			
				<br />
				<form action="addnews.php" method=post>
				<table width="500" border="0" cellspacing="0" cellpadding="0">
					<tr>							
						<td width="220" class="news_date">
							Topic &raquo;
						</td>
						<td width="280">
								<input name="topic" class="login_box">
								
						</td>
					</tr>	
					<tr>							
						<td width="220" class="news_date">
							News &raquo;
						</td>
						<td width="280">
							<textarea cols='23' rows='5' name='news' class="text"></textarea>
						</td>
					</tr>
					<tr>							
						<td width="220">
							
						</td>
						<td width="280">
						<input type=hidden name='writtenby' value=''>
						<input type='hidden' name='date' value='15:09 02/07/2007'>
							<input type="submit" name="submit" value="Add news" class="login_box">
						</form>	
						</td>
					</tr>								
				</table>
		
			</td>
	</table>
	
</body>
</html>


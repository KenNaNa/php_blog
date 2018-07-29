<form method="post" action="upload.php" enctype="multipart/form-data">
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="300px">
		<tr>
			<td width="55" height="20" align="center">
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000">文件:</br>
				<!-- 限定文件大小 -->
			</td>
			<td height="16">
				<input type="file" name="file" value="浏览">
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<br/>
				<input type="submit" name="B1" value="上传">
			</td>

		</tr>
	</table>
</form>
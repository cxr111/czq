<html><body>
	<form action="d-3.php"method="post">
	<meta charset="utf-8">
<p>用户名：<input type="text"name="username"value="输入您的用户名"size="15"onfocus="this.value=''"/></p>
<p>&nbsp&nbsp&nbsp密码：<input type="password"name="PS"size="15"/></p>	
<p>&nbsp&nbsp&nbsp性别：男<input type="radio"name="sex"value="男"checked="checked"/>
女<input type="radio"name="sex"value="女">
</p>
<p>
<h3>爱好:</h3>
	 <input type="checkbox"name="fav1"value="唱"/>(唱歌)
	 <input type="checkbox"name="fav2"value="跳"/>(麻将)
	 <input type="checkbox"name="fav3"value="rip"/>(跳舞)
	 <input type="checkbox"name="fav4"value="坤坤"/>(拉二胡)
</p>
<p><h3>技能介绍:</h3><textarea name="power"></textarea></p>
<p><h3>家庭住址:</h3><select name="addr">
	<option value="重庆">重庆</option>
	<option value="云南">云南</option>
	<option value="浙江">浙江</option>
</p>
<p><input type="submit"name="submit"value="提交"/></p>
	</form>
</body>
</html>
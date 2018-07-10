<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking all numbers</title>
<link rel='stylesheet' href='number.css' type='text/css' />
</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<h2>Input your registration number and submit</h2>
<form name="form1" action="#">
<ul>
<li><input type='text' name='text1'/></li>
<li class="rq">*Enter numbers only.</li>
<li>&nbsp;</li>
<li><input type="submit" name="submit" value="Submit" onclick="allnumeric(document.form1.text1)" /></li>
<li>&nbsp;</li>
</ul>
</form>
</div>
<script src="number.js"></script>
</body>
</html>

<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking non empty</title>
<link rel='stylesheet' href='len.css' type='text/css' />
</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<p>Enter Userid [between 6 to 8 characters] and Submit</p>
<form name="form1" action="#">
<ul>
<li>Username:<input type='text' name='text1'/></li>
<li>&nbsp;</li>
<li class="submit"it"><input type="submit" name="submit" value="Submit" onclick="stringlength(document.form1.text1,6,8)"/></li>
<li>&nbsp;</li>
</form>
</ul>
</div>
<script src="len.js"></script>
</body>

Make changes as per the requirement

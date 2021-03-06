<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
		/* === Remove input autofocus webkit === */
*:focus {outline: none;}

/* === Form Typography === */
body {font: 14px/21px "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif;}
.contact_form h2, .contact_form label {font-family:Georgia, Times, "Times New Roman", serif;}
.form_hint, .required_notification {font-size: 11px;}

/* === List Styles === */
.contact_form ul {
    width:750px;
    list-style-type:none;
	list-style-position:outside;
	margin:0px;
	padding:0px;
}
.contact_form li{
	padding:12px; 
	border-bottom:1px solid #eee;
	position:relative;
} 
.contact_form li:first-child, .contact_form li:last-child {
	border-bottom:1px solid #777;
}

/* === Form Header === */
.contact_form h2 {
	margin:0;
	display: inline;
}
.required_notification {
	color:#d45252; 
	margin:5px 0 0 0; 
	display:inline;
	float:right;
}

/* === Form Elements === */
.contact_form label {
	width:150px;
	margin-top: 3px;
	display:inline-block;
	float:left;
	padding:3px;
}
.contact_form input {
	height:20px; 
	width:220px; 
	padding:5px 8px;
}
.contact_form textarea {padding:8px; width:300px;}
.contact_form button {margin-left:156px;}

	/* form element visual styles */
	.contact_form input, .contact_form textarea { 
		border:1px solid #aaa;
		box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
		border-radius:2px;
		padding-right:30px;
		-moz-transition: padding .25s; 
		-webkit-transition: padding .25s; 
		-o-transition: padding .25s;
		transition: padding .25s;
	}
	.contact_form input:focus, .contact_form textarea:focus {
		background: #fff; 
		border:1px solid #555; 
		box-shadow: 0 0 3px #aaa; 
		padding-right:70px;
	}

/* === HTML5 validation styles === */	
.contact_form input:required, .contact_form textarea:required {
	background: #fff url(images/red_asterisk.png) no-repeat 98% center;
}
.contact_form input:required:valid, .contact_form textarea:required:valid {
	background: #fff url(images/valid.png) no-repeat 98% center;
	box-shadow: 0 0 5px #5cd053;
	border-color: #28921f;
}
.contact_form input:focus:invalid, .contact_form textarea:focus:invalid {
	background: #fff url(images/invalid.png) no-repeat 98% center;
	box-shadow: 0 0 5px #d45252;
	border-color: #b03535
}

/* === Form hints === */
.form_hint {
	background: #d45252;
	border-radius: 3px 3px 3px 3px;
	color: white;
	margin-left:8px;
	padding: 1px 6px;
	z-index: 999; /* hints stay above all other elements */
	position: absolute; /* allows proper formatting if hint is two lines */
	display: none;
}
.form_hint::before {
	content: "\25C0";
	color:#d45252;
	position: absolute;
	top:1px;
	left:-6px;
}
.contact_form input:focus + .form_hint {display: inline;}
.contact_form input:required:valid + .form_hint {background: #28921f;}
.contact_form input:required:valid + .form_hint::before {color:#28921f;}
	
/* === Button Style === */
button.submit {
	background-color: #68b12f;
	background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
	background: -webkit-linear-gradient(top, #68b12f, #50911e);
	background: -moz-linear-gradient(top, #68b12f, #50911e);
	background: -ms-linear-gradient(top, #68b12f, #50911e);
	background: -o-linear-gradient(top, #68b12f, #50911e);
	background: linear-gradient(top, #68b12f, #50911e);
	border: 1px solid #509111;
	border-bottom: 1px solid #5b992b;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	box-shadow: inset 0 1px 0 0 #9fd574;
	-webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
	-moz-box-shadow: 0 1px 0 0 #9fd574 inset;
	color: white;
	font-weight: bold;
	padding: 6px 20px;
	text-align: center;
	text-shadow: 0 -1px 0 #396715;
}
button.submit:hover {
	opacity:.85;
	cursor: pointer; 
}
button.submit:active {
	border: 1px solid #20911e;
	box-shadow: 0 0 10px 5px #356b0b inset; 
	-webkit-box-shadow:0 0 10px 5px #356b0b inset ;
	-moz-box-shadow: 0 0 10px 5px #356b0b inset;
	
}
		</style>
	</head>
	<body>
		<form class="contact_form" action="index.php" method="post" >
			<ul>
				<li>
					<h2>?????????????????? ????????????</h2>
					<span class="required_notification"> *???????????????????????? ????????</span>
				</li>
				<li>
					<label for="fam">??????????????</label>
					<input type="text" class="form-control" id="fam" placeholder="??????????????" name="fam" value="">
				</li>
				<li>
					<label for="nam">??????</label>
					<input type="text" class="form-control" id="nam" placeholder="??????" name="nam">
				</li>
				<li>
					<label for="comp">????????????????</label>
					<select name="comp">
						<option value="????????????">????????????</option>
						<option value="????????????????????????????????">????????????????????????????????</option>
						<option value="????????">????????</option>
					</select>
				</li>
				<li>
					<label for="comment">?? ????????:</label>
					<textarea name="comment" cols="40" rows="6" ></textarea>
				</li>
				<li>
					<form action="checkbox-form.php" method="post">
							???????????????? ????????????????
					<input type="checkbox" name="formWheelchair" value="Yes" />
					</form> 
				</li>
				<li>
					<button class="submit" name="send" type="submit" >??????????????????</button>
				</li>		
<?php
    $fam = NULL;
    $name = NULL;
	
if(isset($_POST["formWheelchair"]))
{
   $_POST["formWheelchair"] = "???????????????? ????????????????"; 
}
else 
{	
$_POST["formWheelchair"] = "???? ???????????????? ????????????????"; 
}

if (!empty($_POST["fam"])&&!empty($_POST["nam"])&&!empty($_POST["comp"])&&!empty($_POST["comment"])&&!empty($_POST["formWheelchair"]))
{
	//echo "<h1>???????????? POST-??????????????: ?????????????? ".$_POST["fam"]."
		//?????? ".$_POST["nam"]."
		//???????????????? ???? ???????????????? ".$_POST["formWheelchair"]."</h1>";	
		echo "<h1>???????????? ?????????????? ???????????????? ?? ????????</h1>";	
}
else
{
	echo "???????????????????? ???? ??????????. ?????????????????? ?????? ?????? ??????.";
}
 if( isset( $_POST['send'] ) )
 {
	 $line = $_POST['fam']. "\r\n" .$_POST['nam']. "\r\n" .$_POST['comp']."\r\n".$_POST['comment']. "\r\n" .$_POST['formWheelchair']."\r\n";
	 file_put_contents('counter.txt', $line, FILE_APPEND);
 }
?>
				<li>
					<button class="submit2" name="fille" type="submit2" >???????????????? ???????????? ???? ??????????</button>
				</li>	
<?php
 if( isset( $_POST['fille'] ) )
    {
		$text = fopen("counter.txt", "r");
		$array = null;
	if ($text) {
		while (($buffer = fgets($text)) !== false) {
        $array[] = $buffer;
		}
	}
fclose($text);
echo "<li>??????????????:   ", $array[0],"</li>";
echo "<li>??????:   ", $array[1],"</li>";
echo "<li>????????????????:   ", $array[2],"</li>";
echo "<li>?? ????????:   ", $array[3],"</li>";
echo "<li>????????????????:   ", $array[4],"</li>";
    }
?>
				
	</ul>
		</form>
	</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Advance Wars: Days of Ruin Quote Generator</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</head>
<body>
<div id="content">
	<div id="header">
		<h2>Advance Wars: Days of Ruin</h2>
		<h3>Quote Generator</h3>
	</div>
	<form method="post" action="index.php" id="quote">
		<div class="field-group">
			<div id="alt"><input type="hidden" name="alt" id="alt-value" value="false" /></div>
			<select id="co-select" name="co">
				<option value="will">Select CO</option>
				<option disabled="disabled">Brenner's Wolves</option>
				<option value="will">Will</option>
				<option value="brenner">Brenner</option>
				<option value="lin">Lin</option>
				<option value="isabella">Isabella</option>
				<option disabled="disabled">Lazurians</option>
				<option value="tasha">Tasha</option>
				<option value="gage">Gage</option>
				<option value="forscythe">Forscythe</option>
				<option disabled="disabled">New Rubinelle Army</option>
				<option value="greyfield">Greyfield</option>
				<option value="waylon">Waylon</option>
				<option disabled="disabled">IDS</option>
				<option value="penny">Penny</option>
				<option value="tabitha">Tabitha</option>
				<option value="caulder">Caulder</option>
			</select>
			<select id="expr-select" name="expr">
				<option value="standard">Select a Mood</option>
				<option value="normal">Normal</option>
				<option value="lose">Shocked</option>
				<option value="win">Glee!</option>
			</select>
			<div id="quote-preview">
				<div id="background" style="background: url('images/backdrop/backdrop.png');">
					<textarea id="quote-text" name="text">Enter your funny quote here!</textarea>
					<div id="portrait-name"><img src="images/co/name/will.gif" /></div>
					<div id="portrait" style="background: url('images/co/will-left.gif');"></div>
				</div>
			</div>
			<input type="submit" id="generate-button" value="Generate!" />
		</div>
	</form>
	<div id="quote-box">
		<div id="loading" style="display:none;"><img src="images/working.gif" /></div>
		<div id="error" class="box" style="display: none;">Looks like something went wrong.  Please try again.</div>
		<div id="generated-quote" class="box" style="display:none;">
			<div id="finished"></div>
			<input type="text" id="finished-url" />
		</div>
	</div>
</div>
<div id="footer">
	All Advance Wars imagery and names are &copy; Nintendo, Intelligent Systems.  Developed by <a href="https://twitter.com/devinwl">@devinwl</a>.
</div>
</body>
</html>

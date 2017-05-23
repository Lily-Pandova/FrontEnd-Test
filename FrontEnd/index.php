<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xmlns:og="http://opengraphprotocol.org/schema/">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Front-end Test</title>
		<meta name="description" content="Task, created for open position: Frontend developer" />
		<meta name="keywords" content="task, free position, developer, integrator" />
		<meta name="rating" content="general" />
		<meta property="og:title" content="Front-end Test" />
		<meta property="og:description" content="Task, created for the position: Frontend developer" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" media="screen" href="style/reset.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="style/style-mobile.css" />
	</head>
	<body>
		<div class="editable_box" id="editable_box_widget_edit">
			<div class="editable_group editable_group_start">
				<h3>1 Start your widget</h3>
				
				<div class="editable" field="element">
					<label>Data source:</label>
					<input placeholder="Search venue, circuit, club..." name="keyword" />
					<button type="submit" class="search">Search</button>
				</div>
			</div>
			
			<div class="editable_group editable_group_setup">
				<h3>2 Setup your widget</h3>
				
				<div class="editable" field="Name">
					<label>Widget Title:</label>
					<input type="text" name="Name" id="name" value="" placeholder ="My super title Leaderbord ACF" />
					<button type="submit">Save</button>
				</div>
				
				<div class="editable" field="ranking_type">
					<label>Rank by:</label>
					<select name="ranking_type"><option value="EARNINGS">Earnings</option><option value="ITM">Number of ITM</option><option value="WIN">Number of 1st place</option></select>
				</div>

				<div class="editable" field="period">
					<label>Filter by time:</label>
					<select name="period"><option value="ALL">All time</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option></select>
				</div>

				<div class="editable" field="limit">
					<label>List size:</label>
					<select name="limit_size"><option value="1">1</option><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option></select>
				</div>
			</div>
			
			<div class="editable_group editable_group_customize line_of_2 ">
				<h3>3 Customize your widget</h3>

				<div class="editable" field="lang">
					<label>Language:</label>
					<select name="lang"><option value="en">English</option><option value="fr">Français</option></select>
				</div>

				<div class="editable" field="colors">
					<label>Color Scheme:</label>
					<select name="colors">
						<option value="0">Light</option>
						<option value="1">Dark</option>
					</select>
				</div>

				<div class="editable" field="size">
					<label>Widget width:</label>
					<input type="text" name="size" value="400" />
					<button>Save</button>
				</div>

				<div class="editable" field="https">
					<label>Link in HTTPS</label>
					<select name="https"><option value="0">No</option><option value="1">Yes</option></select>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>
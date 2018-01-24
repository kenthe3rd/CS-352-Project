<!doctype html>
<html>

<head>
	<title>Diaster Relief App Beta</title>
	<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>

	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href=mainStyle.css>
	<style type="text/css">
	</style>
</head>

<body>
	<h1>Disaster Response</h1>
	<div id="mainContainer">
		<div id="tabBar">
			<div class="tabButton" id="survButton">
				<div class="tabTextOneLine">
				Suvivor
				</div>
			</div>
			<div class="tabButton" id="respButton">
				<div class="tabTextTwoLine">
				First Responder
				</div>
			</div>
			<div class="tabButton" id="voluntButton">
				<div class="tabTextOneLine">
				Volunteer
				</div>
			</div>
			<div class="tabButton" id="coordButton">
				<div class="tabTextTwoLine">
				Recovery Coordinator
				</div>
			</div>
		</div>
		<div id="containerContents">
			<div id="containerContentsText">
				Please select the tab that best describes you.
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("#survButton").click(function()
		{
			window.location.href="./survPage.html";
		});
		$("#respButton").click(function()
		{
			window.location.href="./respPage.html";
		});
		$("#voluntButton").click(function()
		{
			window.location.href="./voluntPage.html";
		});
		$("#coordButton").click(function()
		{
			window.location.href="./coordPage.html";
		});
	</script>
</body>

</html>


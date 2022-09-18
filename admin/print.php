
<html>
	<head>
		<meta charset="utf-8">
		<title>FCTS | Foreigners Info</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../images/LOGO2.png">
		<script src="../vendor/script.js"></script>
		<style>
		/* reset */
*
{
	border: 0;
	box-sizing: content-box;
	color: black;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }


/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 1px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }
/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: rgb(255, 174, 0); border-radius: 0.25em; color: black; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 2.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }
aside {padding-top: 70px; font-family: Georgia; font-size: 16px;}
aside h4 {font-style: italic; font-size: 15px; font-family: arial narrow; text-align: justify;}
/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}
.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>

	</head>
	<body>
	<?php
	ob_start();
    $con = mysqli_connect("localhost","root","","fcts") or die(mysql_error());

	$pid = $_GET['pid'];
	$sql ="select * from answer where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$fullname = $row['fullname'];
		$age = $row['age'];
		$localAddress = $row['localAddress'];
		$country = $row['country'];
		$statOfVacc = $row['statOfVacc'];
		$vaccBrand = $row['vaccBrand'];
		$symp = $row['symp'];
		$symptoms = $row['symptoms'];
		$dateSymptoms = $row['dateSymptoms'];
		$medCondition = $row['medCondition'];
		$travelHistory = $row['travelHistory'];
		$dateOfTravel = $row['dateOfTravel'];
		$exposed = $row['exposed'];
		$exposedName = $row['exposedName'];
		$exposedrel = $row['exposedrel'];
	}
	?>
		<header>
			<h1>Foreigner's COVID-19 Information</h1>
			<address>
				<img alt="logo" src="../images/logo1.png">
			</address>
			<aside>
			<h4>Greetings! The following information of the person cited below, are based on his/her knowledge about some of her
				personal information including her age, address, health status, travel history and his/her companion for the past two weeks.
				Foreigners Contact Tracing aims for full transparency about the personal data that it processes when you use this application.
				Pursuant to the Republic Act No. 10173 (Data Privacy Act), this Privacy Statement explains, among other things, what information
				we collect, why we collect it, and how we use the information.
			</h4><br /><br />
				Foreigners Name: <?php echo $fullname; ?><br /><br />
				<table>
					<tr>
						<th>Questions</th>
						<th>Answer</th>
					</tr>
					<tr>
						<td>Age</td>
						<td><?php echo $age; ?></td>
					</tr>
					<tr>
						<td>Current Address</td>
						<td><?php echo $localAddress; ?></td>
					</tr>
					<tr>
						<td>Permanent Address</td>
						<td><?php echo $country; ?></td>
					</tr>
					<tr>
						<td>Status of Vaccination</td>
						<td><?php echo $statOfVacc; ?></td>
					</tr>
					<tr>
						<td>Vaccine Name</td>
						<td><?php echo $vaccBrand; ?></td>
					</tr>
					<tr>
						<td>Does he/she experienced symptoms of COVID-19?</td>
						<td><?php echo $symptoms; ?></td>
					</tr>
					<tr>
						<td>If yes, what symptoms have you experienced?</td>
						<td><?php echo $symptoms; ?></td>
					</tr>
					<tr>
						<td>When did you start experiencing these symptoms?</td>
						<td><?php echo $dateSymptoms; ?></td>
					</tr>
					<tr>
						<td>Do you have any chronic medical conditions? If yes please provide the medical condition you have<br />
                  		If not, just kindly input 'N/A'</td>
						<td><?php echo $medCondition; ?></td>
					</tr>
					<tr>
						<td>Travel History within this past 2 weeks (eiher foreign or local) <br />
						(if no travel history w/in past 2 weeks, kindly put 'N/A')</td>
						<td><?php echo $travelHistory; ?></td>
					</tr>
					<tr>
						<td>When was your last travel?(either foreign or local)</td>
						<td><?php echo $dateOfTravel; ?></td>
					</tr>
					<tr>
						<td>Have you been in close contact with someone who has been exposed?</td>
						<td><?php echo $exposed; ?></td>
					</tr>
					<tr>
						<td>If yes, whom you with? (If none, just kindly put 'N/A')</td>
						<td><?php echo $exposedName; ?></td>
					</tr>
					<tr>
						<td>Relationship with the person who has been exposed in COVID-19</td>
						<td><?php echo $exposedrel; ?></td>
					</tr>

				</table>
				</aside>
		</header>

		<article>

		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :teambrogrammers@gmail.com <br> Web :www.foreignerscontacttracing.org.ph <br> Telephone :9155-453 </p>
			</div>
		</aside>
	</body>
</html>

<?php

ob_end_flush();

?>

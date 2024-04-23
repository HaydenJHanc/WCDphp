<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolf Creek Dam Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
<style>  
body {
    font-family: "Merriweather", serif;
    font-weight: 700;
    background-color: rgb(228, 222, 222);
    color: rgb(33, 33, 33);
    margin-right: 10%;
    margin-left: 10%;
}

.header-image {
    background-image: url("WCDBanner.png");
    background-size: cover;                      
    background-repeat: no-repeat;
    background-position: center center; 
    border-radius: 5px;
    color: #d2d0d0;
    box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);
    text-align: center;
    padding: 10px;
}

.header-image h1 {
    font-size: 2.5em;
    text-shadow: 2px 2px 4px #000000;
    font-family: "Merriweather", serif;
    font-weight: 700;
}

.subtitle {
    font-size: 1.2em;
    text-shadow: 2px 2px 4px #000000;
    font-family: "Merriweather", serif;
    font-weight: 400;
}
	    
.content-section {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    font-family: 'Gill Sans', sans-serif;
}

.content-section img {
    max-width: 50%; 
    height: auto;
	object-fit: contain;
    border-radius: 5px; 
}

.text-content {
    flex: 1; 
    display: flex;
    flex-direction: column;
    justify-content: center; 
}

.text-content h2 {
    color: rgb(33, 33, 33);
    font-family: "Merriweather", serif;
    font-weight: 700;
}

.text-content p{
    font-family: "Merriweather", serif;
    font-weight: 400;
}

.big-image img {
    width: 90%;
    display: block;
    margin: auto;
    padding: 0px;
    box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);
    border-radius: 5px;
}

.footer {
    background-color: #282829;
    color: #d2d0d0;
    font-family: 'Gill Sans', sans-serif;
    text-align: center;
    padding: 5px;
    border-radius: 5px;
}

.footer p{
    font-weight: 300;
    font-family: 'Gill Sans', sans-serif;
}
</style>

</head>
<body>

<div class="header-image">
    <h1>Wolf Creek Dam</h1>
    <p class="subtitle">Jamestown, Russell County, Kentucky (USACE Nashville District)</p>
    <p class="subtitle">36.868757°N 85.146932°W</p>
</div>

<div class="content-section">
	<div class="text-content">
		<h2>History of the Dam</h2>
	        <p>Wolf Creek Dam is a dam on the Cumberland River of earth filling and concrete. It was created to control flooding, generate hydroelectricity, and create Lake Cumberland, the 7th largest reservoir in the United States.</p>
	
	        <p>Wolf Creek Dam began construction in 1941 as a flood control dam after the passing of the Flood Control Act (1938). During its construction, the Rivers and Harbor Act (1946) added plans for hydroelectric capabilities. Construction of the dam itself was completed in 1950, hydroelectric units were added during 1951-1952. The dam is operated and maintained by the U.S. Army Corps of Engineers. </p>
	
		<p>Wolf Creek Dam is known as the “most monitored dam in the world.” The dam has historically had issues with seepage due to its Limestone Karst foundation. The limestone erodes and leaves holes in the ground which grow bigger with erosion. An emergency operation of grouting the openings was employed in 1968, saving the dam. Since then, multiple barrier walls have been constructed along the dam. During one of these barrier wall projects in 2014, before the water was raised, Lake Cumberland was at its lowest recorded level after its construction. Since then, the Kentucky Government has started a project currently in progress to reroute US 127 off of the dam, to decrease stress.</p>
	</div>
    <img src="WolfCreekDam.gif" alt="Description of Image" style="box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);">
</div>

<?php
    session_start();

    // Array for the called numbers
    $_SESSION['CallCesium'];

    $_SESSION['CallPotree'];

    $CesiumOn = false;

    $PotreeOn = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        if (isset($_POST['function']) && $_POST['function'] === 'CallCesium') 
        {
            if ($_SESSION['CesiumOn'] == false)
            {
                $_SESSION['CesiumOn'] = false;
            }
            else
            {
                $_SESSION['CesiumOn'] = true;
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        if (isset($_POST['function']) && $_POST['function'] === 'CallPotree') 
        {
            if ($_SESSION['PotreeOn'] == false)
            {
                $_SESSION['PotreeOn'] = false;
            }
            else
            {
                $_SESSION['PotreeOn'] = true;
            }
        }
    }
?>

<form action="" method="POST">
    <input type="hidden" name="function" value="CallCesium"></input>
    <button type="submit" class="ui button">Display Cesium Ion Presentation</button>
</form>

<?php
if ($_SESSION['CallCesium'] === true)
{
    ?><iframe src="https://ion.cesium.com/stories/viewer/?id=4f97610c-6cb5-4ab7-8f74-e0fd2fb5f551" width="100%" height="650" style="box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);"></iframe><?php
}
?>

<h4>LiDAR Slideshow powered by Cesium Ion at <a href="https://ion.cesium.com">ion.cesium.com</a></h4>
	
<h1>Explore LiDAR Point Cloud</h1>

<form action="" method="POST">
    <input type="hidden" name="function" value="CallPotree"></input>
    <button type="submit" class="ui button">Display Potree Point Cloud</button>
</form>

<?php
if ($_SESSION['CallPotree'] === true)
{
    ?><iframe src="https://haydenjhanc.github.io/GEO409Final/index.html" width="100%" height="650" style="box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);"></iframe><?php
}
?>

<h4>LiDAR point cloud renderer made by Markus Schütz at <a href="https://github.com/potree/potree/">potree.org</a></h4>

<div class="content-section">
    <img src="IMG_3606.jpg" alt="IMG_3606.jpg" style="box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);">
	    <div class="text-content">
	        <h2>Wolf Creek Dam Statistics</h2>
	        <p>The dam is 258 feet tall, with its tip being 773 ft ASL. It’s made up of about 1 million cubic yards of concrete and 10 million cubic yards of earthfill. Its hydroelectric facility contains 6 turbines that generate an average of about 800,000,000 kilowatt hours every year, which is about enough energy to satisfy ~180,000 Americans. Lake Cumberland, which Wolf Creek Dam created, is longer than the distance between Russell Springs and Somerset. Lake Cumberland holds enough water that flooding of Nashville, a city 275 miles downstream, is a big risk factor if the dam were ever to break.</p>
	    </div>
</div>

<h1>Lake Cumberland Height and US Route 127</h1>

<div class="big-image">
    <img src="US127_.png" alt="WCDUS127.png">
</div>

<h4><a href="US127_.pdf">Download PDF</a></h4>

<div class="content-section">
	    <div class="text-content">
	        <h2>Wolf Creek Fish Hatchery and Kendall Recreation Area</h2>
	        <p>The Wolf Creek Fish Hatchery was established in 1975 in order to populate brown, brook, cutthroat, and rainbow trout in the part of Cumberland River downstream of the dam. The trout are released into a creek that leads from the hatchery to the river. The creek, formally a steep and erosive creek, was restored with trout in mind, including wetlands, a gentler slope, clear water, and rock formations like riffles and step pool at the mouth of the creek. The hatchery is run by the U.S. Fish and Wildlife Service.</p>
	
	        <p>The hatchery is a part of the larger Kendall Recreation Area, run by the USACE. It provides an area for various activities including hiking, fishing, camping, kayaking, and wildlife observation. The area is quite riparian, with various accumulations of water not in Hatchery Creek. This is likely due to both rain runoff and controlled seepage from the earth fill section of the dam. When visited in January 2023, a part of the gravel road had been eroded due to a mudslide. The road was repaired on an April 2024 visit. Due to the high amount of water, a large part of the area is a restricted marshland.</p>
	    </div>
    <img src="IMG_3626.jpg" alt="IMG_3626.jpg" style="box-shadow: 5px 5px 10px 2px rgba(0,0,0,.8);">
</div>

<h1>Kendall Recreation Area</h1>

<div class="big-image">
    <img src="KRA__.png" alt="KRA__.png">
</div>

<h4><a href="KRA_.pdf">Download PDF</a></h4>

<div class="footer">
    <p>Made by Hayden Hancock for GEO 409 with Boyd Shearer at the University of Kentucky</p>
    <p>History and Statistics from the <a href="https://www.lrn.usace.army.mil/Locations/Dams/Wolf-Creek-Dam/">U.S. Army Corps of Engineers</a></p>
    <p>Information about the Kendall Recreation Area from the <a href="https://www.fws.gov/fish-hatchery/wolf-creek/about-us">U. S. Dept. of Fish and Wildlife</a></p>
    <p>LiDAR point cload data from  <a href="https://kyfromabove.ky.gov/">KYfromAbove</a></p>
</div>

</body>
</html>
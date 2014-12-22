<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link type="text/css" rel="stylesheet" href="../attributes/css/style.css" />
<script type="text/javascript" src="../attributes/js/jquery.js"></script>
</head>

<body>
<div id="tab">
<ul>
	<li><a href="personality_test.php">Personality Test</a></li>	
	<li><a href="#">Professional Test </a></li>
	<li><a href="professional_interest.php">Professioanl Intrest </a></li>
	<li><a href="#">Vocational Task </a></li>
	<li><a href="subjective.php">Subjective Strainght and Performance </a></li></ul>
</div>
<div id="count_result">
</div>
<div id="type_a">
<h2> Type A </h2>
	
    <input type="checkbox" id="positive"/> A lot of contect with customer.<br/><br />
    <input type="checkbox" id="positive" /> A lot of daily habbits. <br/><br />
    <input type="checkbox" id="positive" /> A lot of thinking while working on task.<br/><br />
    <input type="checkbox" id="positive" /> At weddings i am the first who dances.<br/><br />
    <input type="checkbox" id="positive" /> Build something useing own ideas.<br/><br />
    <input type="checkbox" id="positive" /> Design Homepage.<br/><br />
    <input type="checkbox" id="positive" /> Develope Creative Ideas.<br/><br />
    <input type="checkbox" id="positive"/> Draw Painting <br/><br />
    <input type="checkbox" id="positive" /> During my free time i never feel bored<br/><br />
    <input type="checkbox" id="positive" /> Earning Money <br/><br />
    
      
</div> 
<div id="type_b">

<h2> Type A </h2>

	<input type="checkbox" id="negative"/> Little contact with customers.<br/><br />
    <input type="checkbox" id="negative" /> Restless, Spontaneous Person.<br/><br />
    <input type="checkbox" id="negative" /> Usages of physical skills while working on a task.<br/><br />
    <input type="checkbox" id="negative" /> At wedding i like to stay in the background.<br/><br />
    <input type="checkbox" id="negative" /> Follow the building idea of somebody else.<br/><br />
    <input type="checkbox" id="negative" /> Doing research in the internet.<br/><br />
    <input type="checkbox" id="negative" /> Making ideas happen.<br/><br />
    <input type="checkbox" id="negative" /> Restore Paintings.<br/><br />
    <input type="checkbox" id="negative" /> During my free time i often feel bored.<br/><br />
    <input type="checkbox" id="negative" /> Fun while working<br/><br />


</div>
<script>

var countChecked = function() 
{
	var a = $("#positive:checked" ).length;
	var b = $("#negative:checked" ).length;
	
	$( "#count_result" ).text((a-b) + " checked!" );
		
};
countChecked();
$( "input[type=checkbox]" ).on( "click", countChecked );
</script>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>

<style type="text/css">
.features-table {
  width: 100%;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: linear-gradient(top, #fff, #eaeaea, #fff);
}

.features-table td {
  height: 50px;
  line-height: 50px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

/*Body*/
.features-table tbody td {
  text-align: center;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 150px;
}

.features-table tbody td:first-child {
  width: auto;
  text-align: left;
}

.features-table td:nth-child(2), 
.features-table td:nth-child(3) {
  background: #efefef;
  background: rgba(144,144,144,0.15);
  border-right: 1px solid white;
}


.features-table td:nth-child(4) {
  background: #e7f3d4;  
  background: rgba(184,243,85,0.3);
}

/*Header*/
.features-table thead td {
  font: bold 1.3em 'trebuchet MS', 'Lucida Sans', Arial;  
  border-radius-topright: 10px;
  border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}

.features-table thead td:first-child {
  border-top: none;
}

/*Footer*/
.features-table tfoot td {
  font: bold 1.4em Georgia;  
  border-radius-bottomright: 10px;
  border-radius-bottomleft: 10px; 
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom: 1px solid #dadada;
}

.features-table tfoot td:first-child {
  border-bottom: none;
}
</style>

</head>
<body>
<div id="tab">
        <ul>
            <li><a href="professional_test.php">Personality Test</a></li>	
            <li><a href="professional_test.php">Professional Test</a></li>
            <li><a href="#">Professioanl Intrest </a></li>
            <li><a href="vocational_task.php">Vocational Task </a></li>
            <li><a href="#">Subjective Strainght and Performance </a></li>
        </ul>
</div>

	<h3 style="text-align:center;">6. Vocational tasks</h3>
    <p style="text-align:center;"> You find below a list with different verbs. Please mark how much you are intrested in these kinds of works.</p>
    
    <table class="features-table">
  <thead>
    <tr>
      <
      <td>Verb</td>
      <td>a lot intrested</td>
      <td>Generally intrested</td>
      <td>a little intrested</td>
      <td>not intrested</td>
    </tr>
  </thead>
         
  <tbody>
    <tr>
      <td>to advice, to explain</td>
      <td><input type="checkbox" id="totally_agree" class="1"></td>
      <td><input type="checkbox" id="totally_agree" class="1"></td>
      <td><input type="checkbox" id="totally_agree" class="1"></td>
      <td><input type="checkbox" id="totally_agree" class="1"></td>
    </tr>
    <tr>
      <td>to analyse</td>
      <td><input type="checkbox" id="totally_agree" class="2"></td>
      <td><input type="checkbox" id="totally_agree" class="2"></td>
      <td><input type="checkbox" id="totally_agree" class="2"></td>
      <td><input type="checkbox" id="totally_agree" class="2"></td>
    </tr>
    <tr>
      <td>to archive, to count</td>
      <td><input type="checkbox" id="totally_agree" class="3"></td>
      <td><input type="checkbox" id="totally_agree" class="3"></td>
      <td><input type="checkbox" id="totally_agree" class="3"></td>
      <td><input type="checkbox" id="totally_agree" class="3"></td>
    </tr>
    <tr>
      <td>to assemble/built</td>
      <td><input type="checkbox" id="totally_agree" class="4"></td>
      <td><input type="checkbox" id="totally_agree" class="4"></td>
      <td><input type="checkbox" id="totally_agree" class="4"></td>
      <td><input type="checkbox" id="totally_agree" class="4"></td>
    </tr>
    <tr>
      <td>to calculate, to estimate</td>
      <td><input type="checkbox" id="totally_agree" class="5"></td>
      <td><input type="checkbox" id="totally_agree" class="5"></td>
      <td><input type="checkbox" id="totally_agree" class="5"></td>
      <td><input type="checkbox" id="totally_agree" class="5"></td>
    </tr>
    <tr>
      <td>to change</td>
      <td><input type="checkbox" id="totally_agree" class="6"></td>
      <td><input type="checkbox" id="totally_agree" class="6"></td>
      <td><input type="checkbox" id="totally_agree" class="6"></td>
      <td><input type="checkbox" id="totally_agree" class="6"></td>
    </tr>
    <tr>
      <td>to communicate, to entertain</td>
      <td><input type="checkbox" id="totally_agree" class="7"></td>
      <td><input type="checkbox" id="totally_agree" class="7"></td>
      <td><input type="checkbox" id="totally_agree" class="7"></td>
      <td><input type="checkbox" id="totally_agree" class="7"></td>
    </tr>
    <tr>
      <td>to construct</td>
      <td><input type="checkbox" id="totally_agree" class="8"></td>
      <td><input type="checkbox" id="totally_agree" class="8"></td>
      <td><input type="checkbox" id="totally_agree" class="8"></td>
      <td><input type="checkbox" id="totally_agree" class="8"></td>
    </tr>
  </tbody>
</table>
    
    
<script type="text/javascript">
	$('.1').click(function(){
    var $inputs = $('.1')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.2').click(function(){
    var $inputs = $('.2')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.3').click(function(){
    var $inputs = $('.3')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.4').click(function(){
    var $inputs = $('.4')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.5').click(function(){
    var $inputs = $('.5')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.6').click(function(){
    var $inputs = $('.6')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.7').click(function(){
    var $inputs = $('.7')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>

<script type="text/javascript">
	$('.8').click(function(){
    var $inputs = $('.8')
        if($(this).is(':checked')){
           $inputs.not(this).prop('disabled',true); // <-- disable all but checked one
        }else{
           $inputs.prop('disabled',false); // <--
        }
    })
</script>
    
</body>
</html>
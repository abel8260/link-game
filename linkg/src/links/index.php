<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD link</title>
  <style>
    *{
      margin: 0px;
      box-sizing: border-box;  
    };
    html,body{
     height: 100vh;
    };
  </style>
</head>
<body style="background-image:url('../../img/links.png'); background-size:100vw 100vh; background-repeat:no-repeat;     "  >
<form style="margin-top:19%; margin-left:22%; " action="index_bck.php" method="POST" >

<input type="text" name="link_re" placeholder="put your link ...">

<select name="selecttipo">
  <option value="cristal" selected>cristal</option>
  <option value="gem">gem</option>
  <option value="coin">coin</option>
  <option value="quest">quest</option>
  <option value="sidequest">sidequest</option>
  <option value="boss">Boss</option>
  <option value="red">red</option>
  <option value="normal">normal</option>
</select>

<select name="selectschedule">
  <option value="level" selected>level</option>
  <option value="paragon">paragon</option>
</select>

|nivel:

<select name="selectcont">
  <option value="13" selected>13</option>
  <option value="12">12</option>
  <option value="11">11</option>
  <option value="10">10</option>
  <option value="9">9</option>
  <option value="8">8</option>
  <option value="7">7</option>
  <option value="6">6</option>
  <option value="5">5</option>
  <option value="4">4</option>
  <option value="3">3</option>
  <option value="2">2</option>
  <option value="1">1</option>
</select>
|
    <button type="submit" >-></button>
</form>

</body>
</html>
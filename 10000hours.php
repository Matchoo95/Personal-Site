<!DOCTYPE html>

<html>
<head>
  <title>10000 Hours Rule</title>

</head>

<body>

<center>
  <h1>10000 Hours Rule</h1>

<?php

$skill = $_POST["skill"];
$time = $_POST["time"];
$previousHours = $_POST["previousHours"];

print ("<h4>Do you know about the 10000 hour rule?</h4>\n");
print ("<h4>This rule states that it takes 10000 hours to master a specific field.</h4>\n");

$tenThousandHours = 10000;
$tenThousandHours = $tenThousandHours - $previousHours;
$days = $tenThousandHours / $time;
$days = round($days, 2);
$years = $days / 365.2422;
$years = round($years, 2);
?>

<h2>Why not see how long it will take you to reach this level?</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Skill Name: <input type="text" name="skill" value="<?php echo $skill;?>">
  <br><br>
     Hours Daily: <input type="text" name="time" value="<?php echo $time;?>">
  <br><br>
  Previous Hours: <input type="text" name="previousHours" value="<?php echo $previousHours;?>">
  <br><br>
  <input type="submit" name="submit" value="Calculate">
</form>
<br><br>

<?php

print ("<h3>It will take you $days days ($years years) to master $skill.</h3>\n");
?>

</center>
</body>
</html>

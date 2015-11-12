<?php
include 'postandrail.php';

$answer = new Fence();

$answer = $answer->calculatePostandRailing($_POST['length']);
?>

<html>
<body>
<p>You will need:</p><br>
<p><?php echo $answer[0];?> posts and <?php echo $answer[1];?> railings</p>

<a href="postrailchallenge.php" <button type="button">Try another!</button></a>

</body>
</html>

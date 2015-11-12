<?php
include 'postandrail.php';

$answer = new Fence();

$answer = $answer->calculateLength(($_POST['posts']), ($_POST['railings']));

?>

<html>
<body>
<p>You can make:</p><br>
<p><?php echo $answer;?> metres</p>

<a href="postrailchallenge.php" <button type="button">Try another!</button></a>

</body>
</html>

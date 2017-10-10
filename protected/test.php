<?php

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

?>
<pre>
<?php echo $_SERVER['SERVER_ADDR']; ?>

<?php echo $_SERVER['REMOTE_USER']; ?>
<?php

//print_r($_SERVER);

?>
</pre>

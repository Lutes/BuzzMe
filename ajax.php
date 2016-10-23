<?php
if (isset($_POST['action'])) {
    callBuzz();
}
function callBuzz() {
	exec('sudo -u root python buzz.py');
	#echo exec('python buzz.py');
   	exit;
}
?>

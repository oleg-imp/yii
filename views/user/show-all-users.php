<?php
$this->title = 'Show All Users';
?>
<ul>
<?php
	foreach($users as $user){
		echo "<li>$user</li>";
	}
?>
</li>
<?php
$this->title = $title;
?>
<table border=1>
<?php
	foreach($users as $row){
		echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td></tr>";
	}
?>
</table>
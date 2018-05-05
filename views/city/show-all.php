<?php
$this->title = 'Show All';
?>
<ul>
<?php
for($i = 1; $i <= count($cities); $i++){
	echo "<li><a href='?r=city/show-one&num=$i'>{$cities[$i-1]}</a></li>";
}
?>
</ul>
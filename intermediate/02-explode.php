<?php

$likes = 'Cooking, sleeping, programming, the gym';

//explode the string by comma
$likes = explode(',' , $likes);

//print_r($likes);

foreach ($likes as $key=> $like) {
	echo $like;
}


?>
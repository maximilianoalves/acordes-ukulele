
<?php


function montPageChord($nota, $type){
	$api_url = 'http://www.ukulele-chords.com/get?ak=d41d8cd98f00b204e9800998ecf8427e&r='.$nota.'&typ='.$type;
	getChord($api_url);
}

function montImageChord($nota, $type){
	$api_url = 'http://www.ukulele-chords.com/get?ak=d41d8cd98f00b204e9800998ecf8427e&r='.$nota.'&typ='.$type;
	getImageChord($api_url);	
}

function montPageHome($nota){
	$types = array("major", "minor", "aug", "dim", "7", "m7", "maj7", "m7b5", "sus2", "sus4", "7sus4", "6", "m6", "add9", "m9", "9", "11", "13");

	foreach ($types as $value) {
		getFirstChord($value, $nota);
	}
}

function getChord($api_url){
	$xml = simplexml_load_file($api_url);
	foreach ($xml->chord as $chord) {
		$res = $chord->chord_diag_mini;
		echo '<img src="'. $res .'" alt="" />';
	}
}

function getImageChord($api_url){
	$xml = simplexml_load_file($api_url);
	$res = $xml->chord[0]->chord_photo;
	if ($res == 'false') {
		echo '';
	}else{
		echo '<img class="chord-img responsive-img" src="'. $res .'" alt="" /><br>';
	}
}

function getFirstChord($value, $nota){
	$res = $nota.$value;
	echo '<a href="nota.php?nota='.$nota.'&type='.$value.'">'.$res.'</a> ';
}
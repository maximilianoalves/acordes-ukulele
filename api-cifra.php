
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

function montDiffChord($nota, $type){
	$api_url = 'http://www.ukulele-chords.com/get?ak=d41d8cd98f00b204e9800998ecf8427e&r='.$nota.'&typ='.$type;
	chordDiff($api_url);
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
	echo '<a href="nota.php?nota='.$nota.'&value='.$value.'">'.$res.' </a>';
}

function chordDiff($api_url){
	$xml = simplexml_load_file($api_url);
	$res = $xml->chord[0]->chord_diff;
	if($res == 1){
		echo "10%";
	}elseif ($res == 2) {
		echo "20%";
	}elseif ($res == 3) {
		echo "30%";
	}elseif ($res == 4) {
		echo "40%";
	}elseif ($res == 5) {
		echo "50%";
	}elseif ($res == 6) {
		echo "60%";
	}elseif ($res == 7) {
		echo "70%";
	}elseif ($res == 8) {
		echo "80%";
	}elseif ($res == 9) {
		echo "90%";
	}elseif ($res == 10) {
		echo "100%";
	}

}
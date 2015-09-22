<?php

$trek = array( 'kirk', 'spock', 'vulcan', 'mccoy', 'bones', 'uhura', 'romulan', 'klingon', 'warf', 'picard', 'enterprise', 'admiral', 'captain', 'lieutenant', 'checkov', 'sulu', 'scotty', 'beam', 'transporter', 'phaser', 'stun', 'redshirt', 'starfleet', 'academy', 'warp', 'helm', 'bridge', 'dilithium', 'crystals', 'voyage', 'star', 'trek', 'space', 'fleet', 'logical', 'tribble', 'data', 'engage', 'shields', 'hull', 'cloak', 'generation', 'kahn', 'photon', 'torpedo', 'riker', 'cruiser', 'crew', 'ship', 'stardate', 'log', 'sickbay', 'prosper', 'illogical', 'boldly', 'nuclear', 'vessel', 'borg', 'resistance', 'futile', 'doctor', 'assimilated', 'engine', 'uniform', 'geordi', 'jettison', 'command', 'unauthorized', 'worf', 'crusher' );
$wars = array( 'luke', 'skywalker', 'leia', 'han', 'solo', 'chewbacca', 'boba', 'fett', 'django', 'emporer', 'darth', 'vader', 'lightsaber', 'blaster', 'millenium', 'falcon', 'palpatine', 'senator', 'anakin', 'amidala', 'padme', 'c3po', 'r2d2', 'empire', 'republic', 'jedi', 'sith', 'master', 'padawan', 'apprentice', 'force', 'hyperdrive', 'hoth', 'endor', 'alderaan', 'deathstar', 'star', 'wars', 'clone', 'yoda', 'kenobi', 'quigon', 'maul', 'zabrak', 'twilek', 'wookie', 'ewok', 'trooper', 'storm', 'darkside', 'lightside', 'destroyer', 'imperial', 'class', 'starship', 'smuggler', 'scoundrel', 'carbonite', 'jaba', 'hutt', 'tattoine', 'speeder', 'station', 'space', 'bantha', 'sandpeople', 'droid', 'younglings', 'lord', 'mindtrick' );
$output = "";

 	
if (isset($_POST['fav'])) {
 	if ($_POST['fav'] == "wars") {
		$arr = $wars;
	}
	else {
		$arr = $trek;
	}

	$count = $_POST['wordCount'];

	//if number is too big, set to max
	if ($count > 5)
		$count = 5;

	for ($i = 1; $i <= $count; $i++) {
		$output .= $arr[ rand(0, sizeof($arr)-1) ];

		if ($i != $count) {
			$output .= "-";
		}
	}

	if (isset($_POST['caps'])) {
		$output = ucfirst($output); //capitalize the first letter if checked
	}

	if (isset($_POST['chars'])) {
		$output .= "!"; //add a special character to the end if checked
	}
}

?>
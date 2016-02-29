<?php
/*function randomLang() {
	$lang = ["php","ruby","javascript"];
	echo $lang[rand(0,2)]."\n";
}
randomLang();
while(readline('Press ok to relaunch | CTRL+C to stop') == '') {
	randomLang();
}*/
$lang1 = readline('First language ? ');
$lang2 = readline('Second language ? ');
$ball = 'l';
$ball_next = 'c';
$nobody_won = true;
$auto = '';
echo "\n";
while($nobody_won) {
if($auto!='auto') {
	system('clear');
}
echo 'LET BALL EM\''."\n";
if($ball == 'l') {
	$ball_next = 'r';
	$ball = 'c';
}
elseif($ball == 'r') {
	$ball_next = 'l';
	$ball = 'c';
}
else {
	$ball = $ball_next;
	$ball_next = 'c';
}
switch($ball) {
case "l":
	if(rand(0,100) == 84) {
		$nobody_won = false;
		$win = $lang2;
		echo $lang1.' o[  ] '.$lang2."\n";
	} else {
		echo $lang1." [o  ] ".$lang2."\n";
	}
break;
case "c":
	echo $lang1." [ o ] ".$lang2."\n";
break;
case "r":
	if(rand(0,100) == 42) {
		$nobody_won = false;
		$win = $lang1;
		echo $lang1.' [  ]o '.$lang2."\n";
	} else {
		echo $lang1." [  o] ".$lang2."\n";
	}
break;
}
if($auto != 'auto') {
	$auto = readline('Press enter... Or type "auto" then enter...');
}
}
echo $win.' won';
?>

<?php
// complete code listing for controllers/poll.php
include_once "models/Poll.class.php";
$poll = new Poll( $db );
$isPollSubmitted = isset ( $_POST['user-input'] );
if ( $isPollSubmitted ){
	$input = $_POST['user-input'];
	$poll->updatePoll($input);
}
$pollData = $poll->getPollData();
$pollView = include_once "views/poll-html.php";
return $pollView;
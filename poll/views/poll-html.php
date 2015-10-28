<?php
//complete code for views/poll-html.php
$dataFound = isset( $pollData );
if ( $dataFound === false ){
	trigger_error( 'views/poll-html.php needs an $pollData object' );
}

return "
<aside id='poll'>
	<form method = 'post' action = 'index.php'>
		<p>$pollData->poll_question</p>
		<select name = 'user-input'>
			<option value = 'yes'>Yes, it is!</option>
			<option value = 'no'>No, not really!</option>
		</select>
		<input type = 'submit' value = 'post'/>
	</form>
	<h1>Poll results</h1>
	<ul>
		<li>$pollData->yes said yes</li>
		<li>$pollData->no said no</li>
	</ul>
</aside>
";
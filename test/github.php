<?php 
	try
	{
		$payload = json_decode($_REQUEST['payload']);
	}
	catch(Exception $e)
	{
		exit(0);
	}

	file_input_contents('github.log', print_r($payload, TRUE), FILE_APPEND);

	if ($payload->ref == 'refs/heads/master')
	{
		`git pull`;
	}
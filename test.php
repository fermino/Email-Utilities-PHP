<?php
	require_once 'Email.php';

	$Email1 = 'your-email@domain.tld';
	$Email2 = 'my email';

	var_dump(Email::Verify($Email1));
	var_dump(Email::Verify($Email2));

	var_dump(Email::Obfuscate($Email1));
	var_dump(Email::Obfuscate($Email1, Email::HEXA));
	var_dump(Email::Obfuscate($Email1, Email::DEC, false));

	var_dump(Email::Obfuscate($Email2));
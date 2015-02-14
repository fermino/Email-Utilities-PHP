<?php
	class Email
	{
		public static function Verify($Email)
		{
			return filter_var($Email, FILTER_VALIDATE_EMAIL) === $Email ? true : false;
		}

		const DEC = 1;
		const HEXA = 2;

		public static function Obfuscate($Email, $Mode = 1, $WithMailto = true)
		{
			if(static::Verify($Email))
			{
				if($Mode == static::DEC)
					$Format = '&#%d;';
				elseif($Mode == static::HEXA)
					$Format = '&#x%x;';
				else
					return false;

				$Code = $WithMailto ? 'mailto:' : null;

				$Length = strlen($Email);
				for($i = 0; $i < $Length; $i++)
					$Code .= sprintf($Format, ord($Email[$i]));

				return $Code;
			}

			return false;
		}
	}
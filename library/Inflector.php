<?php 
	class Inflector {

		public static function camel($value)
		{
			$segments = explode('-', $value);

			array_walk($segments, function (&$item){
				$item = ucfirst($item);
			});

			return implode('', $segments);
		}
		public static function loweCamel($value)
		{
			return lcfirst(static::camel($value));
		}

	}



 ?>
<?php
/*
 * Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/
function Space_sub($str){
		return strtr($str, ' ', '_');
}
echo Space_sub('Заменяем всем пробелы на _!');
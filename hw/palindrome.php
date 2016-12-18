<?php

function check_palindrome($string)
{
  if ($string == strrev($string))
      return "match";
  else
	  return "not match";
}
echo check_palindrome('madam')."\n"."<br/>";
echo check_palindrome('kalam')."\n";
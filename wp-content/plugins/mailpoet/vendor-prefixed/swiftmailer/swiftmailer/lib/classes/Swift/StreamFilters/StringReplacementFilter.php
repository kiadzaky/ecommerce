<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_StreamFilters_StringReplacementFilter implements Swift_StreamFilter
{
 private $search;
 private $replace;
 public function __construct($search, $replace)
 {
 $this->search = $search;
 $this->replace = $replace;
 }
 public function shouldBuffer($buffer)
 {
 if ('' === $buffer) {
 return \false;
 }
 $endOfBuffer = \substr($buffer, -1);
 foreach ((array) $this->search as $needle) {
 if (\false !== \strpos($needle, $endOfBuffer)) {
 return \true;
 }
 }
 return \false;
 }
 public function filter($buffer)
 {
 return \str_replace($this->search, $this->replace, $buffer);
 }
}

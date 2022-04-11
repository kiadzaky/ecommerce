<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Mime_ContentEncoder_RawContentEncoder implements Swift_Mime_ContentEncoder
{
 public function encodeString($string, $firstLineOffset = 0, $maxLineLength = 0)
 {
 return $string;
 }
 public function encodeByteStream(Swift_OutputByteStream $os, Swift_InputByteStream $is, $firstLineOffset = 0, $maxLineLength = 0)
 {
 while (\false !== ($bytes = $os->read(8192))) {
 $is->write($bytes);
 }
 }
 public function getName()
 {
 return 'raw';
 }
 public function charsetChanged($charset)
 {
 }
}

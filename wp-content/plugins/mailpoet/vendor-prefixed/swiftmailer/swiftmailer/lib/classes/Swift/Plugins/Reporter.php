<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Plugins_Reporter
{
 const RESULT_PASS = 0x1;
 const RESULT_FAIL = 0x10;
 public function notify(Swift_Mime_SimpleMessage $message, $address, $result);
}

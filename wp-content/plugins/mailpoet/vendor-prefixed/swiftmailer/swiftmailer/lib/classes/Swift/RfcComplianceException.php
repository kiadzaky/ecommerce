<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_RfcComplianceException extends Swift_SwiftException
{
 public function __construct($message)
 {
 parent::__construct($message);
 }
}

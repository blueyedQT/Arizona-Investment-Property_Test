<?php
/**
*
* Demonstrates how to use GetResponse API in WordPress Plugin.
*
* Fetch the list of campaign.
* Add new contact to campaign.
*
* @author InkThemes
*
*/
# JSON-RPC module is required
# available at http://github.com/GetResponse/DevZone/blob/master/API/lib/jsonRPCClient.php
# alternate version available at http://jsonrpcphp.org/

require_once 'jsonRPCClient.php';

# your API key available at http://www.getresponse.com/my_api_key.html

$api_key = 'Enter API key'; //Place API key here
$api_url = 'http://api2.getresponse.com';
?>

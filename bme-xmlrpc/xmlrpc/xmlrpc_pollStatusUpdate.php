<?php
  /**
  This Example shows how to authenticate a user using XML-RPC.
  Note that we are using the PEAR XML-RPC client and recommend others do as well.
  **/
  require_once 'XML/RPC2/Client.php';
  require_once 'inc/config.php';

  try
  {
    $client = XML_RPC2_Client::create($apiURL);
    $token = $client->login($apiLogin, $apiPassword);


    $PollID='1135';
    $Status='2';

    $retval = $client->pollStatusUpdate($token,$PollID,$Status);

  } catch (XML_RPC2_FaultException $e){
    echo "ERROR:" . $e->getFaultString() ."(" . $e->getFaultCode(). ")";
  }
?>

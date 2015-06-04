<?php

namespace Cloudmanic\RobinHood;
  
use GuzzleHttp\Client;
  
class RobinHoodObj
{
  private $token = null;
  
  // Different endpoints we can call for the API.
  private $endpoints = [
    'login' => 'https://api.robinhood.com/api-token-auth/',
    'investment_profile' => 'https://api.robinhood.com/user/investment_profile/',
    'accounts' => 'https://api.robinhood.com/accounts/',
    'ach_iav_auth' => 'https://api.robinhood.com/ach/iav/auth/',
    'ach_relationships' => 'https://api.robinhood.com/ach/relationships/',
    'ach_transfers' => 'https://api.robinhood.com/ach/transfers/',
    'applications' => 'https://api.robinhood.com/applications/',
    'dividends' => 'https://api.robinhood.com/dividends/',
    'edocuments' => 'https://api.robinhood.com/documents/',
    'instruments' => 'https://api.robinhood.com/instruments/',
    'margin_upgrades' => 'https://api.robinhood.com/margin/upgrades/',
    'markets' => 'https://api.robinhood.com/markets/',
    'notifications' => 'https://api.robinhood.com/notifications/',
    'orders' => 'https://api.robinhood.com/orders/',
    'password_reset' => 'https://api.robinhood.com/password_reset/request/',
    'quotes' => 'https://api.robinhood.com/quotes/',
    'document_requests' => 'https://api.robinhood.com/upload/document_requests/',
    'user' => 'https://api.robinhood.com/user/',
    'watchlists' => 'https://api.robinhood.com/watchlists/'
  ];
  
  //
  // Send a username and password to Robinhood to get back a token.
  //
  public function auth($username, $password)
  {
    $client = new Client();    
    
    $res = $client->post($this->endpoints['login'], [
      'form_params' => [
        'username' => $username,
        'password' => $password
      ]
    ]);

    echo $res->getStatusCode();

    echo $res->getHeader('content-type');

    echo $res->getBody();   
    

  }
}

/* End File */
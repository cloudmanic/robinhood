<?php
  use Cloudmanic\RobinHood\Api;
  
  // Auth and get a token
  $token = API::auth('Your Username', 'Your Password');
  
  // Or we already have a token from a past auth and we just set the token.
  // Api::set_token($token);
  
  // Get all accounts.
  $acts = Api::get_accounts();
  echo '<pre>' . print_r($acts, TRUE) . '</pre>';
  
  // Get one account from the account url.
  $act = Api::get_account($acts['results'][0]['url']);
  echo '<pre>' . print_r($act, TRUE) . '</pre>';
  
  // Get the summery of an account.
  $port = Api::get_portfolio_summery($acts['results'][0]['portfolio']);
  echo '<pre>' . print_r($port, TRUE) . '</pre>';
  
  // Get current positions from the account.
  $pos = Api::get_current_postions($acts['results'][0]['positions']);
  echo '<pre>' . print_r($pos, TRUE) . '</pre>';
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	*	mail helper is responsible for sending email
	*
	*	@author Nishchal Gautam <gautam.nishchal@gmail.com>
	*	@access public
	*	@category accounts
	*	@copyright (c) 2015, Nishchal Gautam
	*	@param string $email Email to check
	*	@return boolean FALSE if the email is not registered and ID of user if email is registered
	*	@since 0.1
	*	@version 0.1
	*
	*/

if ( ! function_exists('call'))
{
	function call($to,$subject,$user)
	{
//die($to."-".$subject."-".$user);
//$to="9741265492";
//$subject="1324";
//$user="2";
//$url_to_call="http://requestb.in/x9jl0ox9";
$curl = curl_init();
//$CI=& get_instance();
$url_to_call="http://kookoo.elasticbeanstalk.com/confirm/action/{$to}/{$subject}/{$user}/";
$extra=<<<MARKUP
<response><collectdtmf><playtext>You have requested for a pinless login,</playtext><playtext>PIN displayed is</playtext><playtext> {$subject}</playtext><playtext> Press 1  and press hash to authorize and press 0 and hash to discard</playtext></collectdtmf></response>
MARKUP;
$extra=urlencode($extra);
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.kookoo.in/outbound/outbound.php?phone_no=09741665492&api_key=KKc14e5e82d33498ff7cac75431053873a&outbound_version=2&extra_data={$extra}&callback_url=$url_to_call&url=$url_to_call",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET"));
$response = curl_exec($curl);
//echo $response;
curl_close($curl);
return true;
	}   
}

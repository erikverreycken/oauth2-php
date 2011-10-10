<?php
/**
 * If you want to return additional properties in the access token response,
 * implement this interface.
 * 
 * "The client SHOULD ignore unrecognized response parameters.  The sizes
 * of tokens and other values received from the authorization server are
 * left undefined."
 * 
 * @author Aaron Parecki <aaron@parecki.com>
 * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-5.1
 */
interface IOAuth2AccessTokenArray extends IOAuth2Storage {
  
  /**
	 * @return
	 * Array with any values to return as the access token response. The
	 * standard OAuth 2 access token parameters (access_token, expires, etc)
	 * will be added by the library.
	 * @code
	 * return array(
	 *  'example_parameter' => 'example_value',
	 * );
	 * @endcode
	 *
	 * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-5.1
	 *
	 * @ingroup oauth2_section_5
	 */
	public function createAccessTokenResponseArray();
}
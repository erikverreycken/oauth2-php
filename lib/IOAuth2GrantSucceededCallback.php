<?php
/**
 * If you want to modify the access token or response after a grant succeeds,
 * implement this interface and modify the token. You can use this as an 
 * opportunity to log something in your database, or you can modify the
 * access token response. One example is to include basic user profile information
 * in addition to the access_token.
 * 
 * "The client SHOULD ignore unrecognized response parameters.  The sizes
 * of tokens and other values received from the authorization server are
 * left undefined."
 * 
 * @author Aaron Parecki <aaron@parecki.com>
 * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-5.1
 */
interface IOAuth2GrantSucceededCallback extends IOAuth2Storage {
  
  /**
	 * @param &$token
	 * A reference to the access token that will be sent as the response.
	 *
	 * @return void
	 *
	 * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-5.1
	 *
	 * @ingroup oauth2_section_5
	 */
	public function grantSucceeded($grantType, &$token);
}
<?php
/**
 * Implement the functions in this interface to generate your own access token format.
 * This can be used to generate tokens in other formats based on whatever you choose.
 * Since access tokens 
 * 
 * @author Aaron Parecki <aaron@parecki.com>
 * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-1.4
 */
interface IOAuth2TokenGeneration extends IOAuth2Storage {
  
  /**
	 * @return String
	 * @ingroup oauth2_section_1
	 */
	public function genAccessToken();

  /**
	 * @return String
	 * @ingroup oauth2_section_1
	 */
	public function genAuthCode();
}
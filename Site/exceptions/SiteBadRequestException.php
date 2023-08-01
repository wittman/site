<?php

/**
 * Thrown when a bad request is made
 *
 * @package   Site
 * @copyright 2023 silverorange
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 */
class SiteBadRequestException extends SiteException
{
	// {{{ public function __construct()

	/**
	 * Creates a new bad request exception
	 *
	 * @param string $message the message of the exception.
	 * @param integer $code the code of the exception.
	 */
	public function __construct($message = null, $code = 0)
	{
		parent::__construct($message, $code);
		$this->title = Site::_('Bad Request');
		$this->http_status_code = 400;
	}

	// }}}
}

?>

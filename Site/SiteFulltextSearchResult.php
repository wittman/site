<?php

/**
 * Interface for a fulltext search result
 *
 * @package   Site
 * @copyright 2007 silverorange
 */
interface SiteFulltextSearchResult
{
	// {{{ public function getJoinClause()

	/**
	 * Get an SQL join clause to use to query with this fulltext result
	 *
	 * @param string $id_field_name name of the id field to join with.
	 * @param string $type document type to join with.
	 *
	 * @return string
	 */
	public function getJoinClause($id_field_name, $type);

	// }}}
	// {{{ public function getOrderByClause()

	/**
	 * Perform a full text searche and returns the result
	 *
	 * @param string $default_clause a default order by clause to use in
	 *                                addition to the fulltext clause.
	 *
	 * @return string
	 */
	public function getOrderByClause($default_clause);

	// }}}
}

?>

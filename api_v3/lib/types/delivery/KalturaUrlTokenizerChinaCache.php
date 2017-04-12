<?php
/**
 * @package api
 * @subpackage objects
 */
class KalturaUrlTokenizerChinaCache extends KalturaUrlTokenizer {

	/**
	 * @var int
	 */
	public $algorithmId;
	
	/**
	 * @var int
	 */
	public $keyId;
	
	private static $map_between_objects = array
	(
			"algorithmId",
			"keyId",
	);
	
	public function toObject($dbObject = null, $skip = array())
	{
		if (is_null($dbObject))
			$dbObject = new kChinaCacheUrlTokenizer();
			
		parent::toObject($dbObject, $skip);
	
		return $dbObject;
	}
}

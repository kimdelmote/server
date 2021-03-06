<?php

/**
 * @package plugins.scheduledTask
 * @subpackage api.objects.objectTasks
 */
class KalturaMailNotificationObjectTask extends KalturaObjectTask
{
	/**
	 * The mail to send the notification to
	 *
	 * @var string
	 */
	public $mailAddress;
	/**
	 * The message to send in the notification mail
	 *
	 * @var string
	 */
	public $message;

	public function __construct()
	{
		$this->type = ObjectTaskType::MAIL_NOTIFICATION;
	}

	public function toObject($dbObject = null, $skip = array())
	{
		/** @var kObjectTask $dbObject */
		$dbObject = parent::toObject($dbObject, $skip);
		$dbObject->setDataValue('mailAddress', $this->mailAddress);
		$dbObject->setDataValue('message', $this->message);
		return $dbObject;
	}
	public function doFromObject($srcObj, KalturaDetachedResponseProfile $responseProfile = null)
	{
		parent::doFromObject($srcObj, $responseProfile);
		/** @var kObjectTask $srcObj */
		$this->mailAddress = $srcObj->getDataValue('mailAddress');
		$this->message = $srcObj->getDataValue('message');
	}

}

<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Quickicon.MyIcons
 *
 * @copyright   Copyright (C) 2013 Iván Ramos Jiménez, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * MyIcons plugin
 *
 * @package     Joomla.Plugin
 * @subpackage  Quickicon.MyIcons
 * @since       1.0
 */
class PlgQuickiconMyicons extends JPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * This method is called when the Quick Icons module is constructing its set
	 * of icons. You can return an array which defines a single icon and it will
	 * be rendered right after the stock Quick Icons.
	 *
	 * @param  $context  The calling context
	 *
	 * @return array A list of icon definition associative arrays, consisting of the
	 *				 keys link, image, text and access.
	 *
	 * @since       2.5
	 */
	public function onGetIcons($context)
	{
		if ($context != $this->params->get('context', 'mod_quickicon'))
		{
			return;
		}

		return array(
				array(
						'link' => 'index.php?option=com_users&task=user.add',
						'image' => 'user',
						'text' => JText::_('PLG_QUICKICON_MYICONS_ADD_USER'),
						'access' => array('core.manage', 'com_users', 'core.create', 'com_users', )
				)
		);
	}
}

<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

JText::script('TPL_LSM_2017_ALTOPEN');
JText::script('TPL_LSM_2017_ALTCLOSE');
JText::script('TPL_LSM_2017_TEXTRIGHTOPEN');
JText::script('TPL_LSM_2017_TEXTRIGHTCLOSE');
JText::script('TPL_LSM_2017_FONTSIZE');
JText::script('TPL_LSM_2017_BIGGER');
JText::script('TPL_LSM_2017_RESET');
JText::script('TPL_LSM_2017_SMALLER');
JText::script('TPL_LSM_2017_INCREASE_SIZE');
JText::script('TPL_LSM_2017_REVERT_STYLES_TO_DEFAULT');
JText::script('TPL_LSM_2017_DECREASE_SIZE');
JText::script('TPL_LSM_2017_OPENMENU');
JText::script('TPL_LSM_2017_CLOSEMENU');

$this->addScriptDeclaration("
	var big        = '" . (int) $this->params->get('wrapperLarge') . "%';
	var small      = '" . (int) $this->params->get('wrapperSmall') . "%';
	var bildauf    = '" . $this->baseurl . '/templates/' . $this->template . "/images/plus.png';
	var bildzu     = '" . $this->baseurl . '/templates/' . $this->template . "/images/minus.png';
	var rightopen  = '" . JText::_('TPL_LSM_2017_TEXTRIGHTOPEN', true) . "';
	var rightclose = '" . JText::_('TPL_LSM_2017_TEXTRIGHTCLOSE', true) . "';
	var altopen    = '" . JText::_('TPL_LSM_2017_ALTOPEN', true) . "';
	var altclose   = '" . JText::_('TPL_LSM_2017_ALTCLOSE', true) . "';
");

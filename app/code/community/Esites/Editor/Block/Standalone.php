<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Esites
 * @package     Esites_Editor
 * @copyright   Copyright (c) 2015 E-sites (http://www.e-sites.nl)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Esites_Editor_Block_Standalone extends Mage_Core_Block_Template
{

    /**
     * Editor config
     *
     * @var array
     */
    protected $_config = array();

    /**
     * Retrieves the editor config
     *
     * @return array
     */
    public function getEditorConfig()
    {
        if (Mage::getStoreConfig('editor/general/enabled', Mage::app()->getStore())) {
            $this->_config = Mage::getModel('editor/config')->getPluginSettings();
            $this->_config = $this->_config['plugins'][0]['config'];
        }

        return $this->_config;
    }
}

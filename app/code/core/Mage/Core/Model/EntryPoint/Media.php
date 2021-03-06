<?php
/**
 * Media downloader entry point
 *
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_Core_Model_EntryPoint_Media extends Mage_Core_Model_EntryPointAbstract
{
    /**
     * @param string $baseDir
     * @param array $mediaDirectory
     * @param array $params
     * @param string $objectManagerClass
     */
    public function __construct(
        $baseDir, $mediaDirectory, array $params = array(), $objectManagerClass = 'Mage_Core_Model_ObjectManager_Http'
    ) {
        if (empty($mediaDirectory)) {
            $params[Mage::PARAM_ALLOWED_MODULES] = array('Mage_Core');
            $params[Mage::PARAM_CACHE_OPTIONS]['disable_save'] = true;
        }
        parent::__construct($baseDir, $params, $objectManagerClass);
    }

    /**
     * Process request to application
     */
    protected function _processRequest()
    {
        // TODO: Move configuration file generation and media files materialization here from get.php
    }
}

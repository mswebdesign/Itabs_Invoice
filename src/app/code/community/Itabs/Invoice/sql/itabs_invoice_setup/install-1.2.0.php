<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Mswebdesign
 * @package    Mswebdesign_Itabs_Invoice
 * @copyright  Copyright (c) 2015 münster-webdesign.net (http://www.muenster-webdesign.net)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Christian Grugel <cgrugel@muenster-webdesign.net>
 */

/* @var $installer Mage_Customer_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('customer', 'invoice_allowed', array(
    'type'          => 'int',
    'label'         => 'Payment by invoice',
    'input'         => 'select',
    'source'        => 'eav/entity_attribute_source_boolean',
    'required'      => false,
    'position'      => 150
));

$vatAttribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'invoice_allowed');
$vatAttribute->setData('used_in_forms', array(
    'adminhtml_customer'
));
$vatAttribute->save();

$installer->endSetup();
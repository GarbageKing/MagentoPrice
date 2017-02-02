<?php

$installer = $this;
/** @var Mage_Eav_Model_Entity_Setup $installer */
$installer->startSetup();
$installer->addAttribute(
    'catalog_product',
    'saving', 
    array (
        'group'             => 'General',
        'type'              => 'decimal',
        'frontend'          => '',
        'label'             => 'saving',
        'input'             => 'text',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => false,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'source_model'      => 'eav/entity_attribute_source_table'
    )
);
$installer->endSetup();
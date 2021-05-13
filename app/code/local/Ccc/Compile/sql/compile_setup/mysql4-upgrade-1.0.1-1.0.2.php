<?php

$installer = $this;

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->addAttribute(Ccc_Compile_Model_Resource_Compile::ENTITY, 'firstname', array(
    'group'                      => 'General',
    'input'                      => 'text',
    'type'                       => 'varchar',
    'label'                      => 'firstname',
    'backend'                    => '',
    'visible'                    => 1,
    'required'                   => 1,
    'user_defined'               => 1,
    'searchable'                 => 1,
    'filterable'                 => 0,
    'comparable'                 => 1,
    'visible_on_front'           => 1,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front'   => 1,
    'global'                     => Ccc_Compile_Model_Resource_Eav_Attribute::SCOPE_STORE,

));

$setup->addAttribute(Ccc_Compile_Model_Resource_Compile::ENTITY, 'lastname', array(
    'group'                      => 'General',
    'input'                      => 'text',
    'type'                       => 'varchar',
    'label'                      => 'lastname',
    'backend'                    => '',
    'visible'                    => 1,
    'required'                   => 1,
    'user_defined'               => 1,
    'searchable'                 => 1,
    'filterable'                 => 0,
    'comparable'                 => 1,
    'visible_on_front'           => 1,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front'   => 1,
    'global'                     => Ccc_Compile_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$setup->addAttribute(Ccc_Compile_Model_Resource_Compile::ENTITY, 'email', array(
    'group'                      => 'General',
    'input'                      => 'text',
    'type'                       => 'varchar',
    'label'                      => 'email',
    'frontend_class'             => 'validate-email',
    'backend'                    => '',
    'visible'                    => 1,
    'required'                   => 1,
    'user_defined'               => 1,
    'searchable'                 => 1,
    'filterable'                 => 0,
    'comparable'                 => 1,
    'visible_on_front'           => 1,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front'   => 1,
    'global'                     => Ccc_Compile_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$setup->addAttribute(Ccc_Compile_Model_Resource_Compile::ENTITY, 'phoneNo', array(
    'group'                      => 'General',
    'input'                      => 'text',
    'type'                       => 'text',
    'label'                      => 'phoneNo',
    'frontend_class'             => 'input-text validate-length maximum-length-10 minimum-length-10 validate-digits',
    'backend'                    => '',
    'visible'                    => 1,
    'required'                   => 1,
    'user_defined'               => 1,
    'searchable'                 => 1,
    'filterable'                 => 0,
    'comparable'                 => 1,
    'visible_on_front'           => 1,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front'   => 1,
    'global'                     => Ccc_Compile_Model_Resource_Eav_Attribute::SCOPE_STORE,
));


$installer->endSetup();

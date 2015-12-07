<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'forkel_resources_green'
 */
$table = $installer->getTable('forkel_resources/green');
if ($installer->getConnection()->isTableExists($table) != true)
{
    $table = $installer->getConnection()
        ->newTable($table)
        ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity'  => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,
        ), 'ID')
        ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
            'nullable'  => false,
        ), 'Name')
        ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
            'nullable'  => false,
        ), 'Description')
        ->setComment('Forkel Resources > Green');
    $installer->getConnection()->createTable($table);
}

/**
 * Create table 'forkel_resources_blue'
 */
$table = $installer->getTable('forkel_resources/blue');
if ($installer->getConnection()->isTableExists($table) != true)
{
    $table = $installer->getConnection()
        ->newTable($table)
        ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity'  => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,
        ), 'ID')
        ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
            'nullable'  => false,
        ), 'Name')
        ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
            'nullable'  => false,
        ), 'Description')
        ->addColumn('enabled', Varien_Db_Ddl_Table::TYPE_TINYINT, 1, array(
            'nullable'  => false,
            'default'  => 0,
        ), 'Enabled')
        ->setComment('Forkel Resources > Blue');
    $installer->getConnection()->createTable($table);
}
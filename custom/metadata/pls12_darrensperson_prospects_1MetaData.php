<?php
// created: 2015-07-01 14:14:59
$dictionary["pls12_darrensperson_prospects_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'pls12_darrensperson_prospects_1' => 
    array (
      'lhs_module' => 'pls12_DarrensPerson',
      'lhs_table' => 'pls12_darrensperson',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pls12_darrensperson_prospects_1_c',
      'join_key_lhs' => 'pls12_darrensperson_prospects_1pls12_darrensperson_ida',
      'join_key_rhs' => 'pls12_darrensperson_prospects_1prospects_idb',
    ),
  ),
  'table' => 'pls12_darrensperson_prospects_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'pls12_darrensperson_prospects_1pls12_darrensperson_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pls12_darrensperson_prospects_1prospects_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pls12_darrensperson_prospects_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pls12_darrensperson_prospects_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pls12_darrensperson_prospects_1pls12_darrensperson_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pls12_darrensperson_prospects_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pls12_darrensperson_prospects_1prospects_idb',
      ),
    ),
  ),
);
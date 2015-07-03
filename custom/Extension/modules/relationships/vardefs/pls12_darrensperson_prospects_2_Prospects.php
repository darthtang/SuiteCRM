<?php
// created: 2015-07-01 14:15:50
$dictionary["Prospect"]["fields"]["pls12_darrensperson_prospects_2"] = array (
  'name' => 'pls12_darrensperson_prospects_2',
  'type' => 'link',
  'relationship' => 'pls12_darrensperson_prospects_2',
  'source' => 'non-db',
  'module' => 'pls12_DarrensPerson',
  'bean_name' => 'pls12_DarrensPerson',
  'vname' => 'LBL_PLS12_DARRENSPERSON_PROSPECTS_2_FROM_PLS12_DARRENSPERSON_TITLE',
  'id_name' => 'pls12_darrensperson_prospects_2pls12_darrensperson_ida',
);
$dictionary["Prospect"]["fields"]["pls12_darrensperson_prospects_2_name"] = array (
  'name' => 'pls12_darrensperson_prospects_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PLS12_DARRENSPERSON_PROSPECTS_2_FROM_PLS12_DARRENSPERSON_TITLE',
  'save' => true,
  'id_name' => 'pls12_darrensperson_prospects_2pls12_darrensperson_ida',
  'link' => 'pls12_darrensperson_prospects_2',
  'table' => 'pls12_darrensperson',
  'module' => 'pls12_DarrensPerson',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Prospect"]["fields"]["pls12_darrensperson_prospects_2pls12_darrensperson_ida"] = array (
  'name' => 'pls12_darrensperson_prospects_2pls12_darrensperson_ida',
  'type' => 'link',
  'relationship' => 'pls12_darrensperson_prospects_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PLS12_DARRENSPERSON_PROSPECTS_2_FROM_PROSPECTS_TITLE',
);

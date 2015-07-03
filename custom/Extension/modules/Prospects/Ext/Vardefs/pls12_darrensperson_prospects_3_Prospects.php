<?php
// created: 2015-07-01 14:16:41
$dictionary["Prospect"]["fields"]["pls12_darrensperson_prospects_3"] = array (
  'name' => 'pls12_darrensperson_prospects_3',
  'type' => 'link',
  'relationship' => 'pls12_darrensperson_prospects_3',
  'source' => 'non-db',
  'module' => 'pls12_DarrensPerson',
  'bean_name' => 'pls12_DarrensPerson',
  'vname' => 'LBL_PLS12_DARRENSPERSON_PROSPECTS_3_FROM_PLS12_DARRENSPERSON_TITLE',
  'id_name' => 'pls12_darrensperson_prospects_3pls12_darrensperson_ida',
);
$dictionary["Prospect"]["fields"]["pls12_darrensperson_prospects_3_name"] = array (
  'name' => 'pls12_darrensperson_prospects_3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PLS12_DARRENSPERSON_PROSPECTS_3_FROM_PLS12_DARRENSPERSON_TITLE',
  'save' => true,
  'id_name' => 'pls12_darrensperson_prospects_3pls12_darrensperson_ida',
  'link' => 'pls12_darrensperson_prospects_3',
  'table' => 'pls12_darrensperson',
  'module' => 'pls12_DarrensPerson',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Prospect"]["fields"]["pls12_darrensperson_prospects_3pls12_darrensperson_ida"] = array (
  'name' => 'pls12_darrensperson_prospects_3pls12_darrensperson_ida',
  'type' => 'link',
  'relationship' => 'pls12_darrensperson_prospects_3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PLS12_DARRENSPERSON_PROSPECTS_3_FROM_PROSPECTS_TITLE',
);

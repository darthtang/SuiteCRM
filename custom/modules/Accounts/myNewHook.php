<?php

// custom/modules/Accounts/AccountsJjwg_MapsLogicHook.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');





class myNewHook {

    function updateCalls(&$bean,$event,$arguments){

        $date = new DateTime();

            if($this->checkEditOrNewAccount($bean) == true ){
                $bean->load_relationship('id');
                $newCallBean = BeanFactory::newBean('Calls');
                $newCallBean -> name = 'first call' ;
                $newCallBean -> date_entered = $date->getTimestamp();
                $newCallBean -> save();
                return;
            }
            else{
                return;
            }
        }

    function checkEditOrNewAccount($bean){
        if(empty($bean->fetched_row))
        {
            return true;
        }
        else
        {
            return false;
        }
    }



}

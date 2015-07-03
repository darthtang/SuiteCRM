<?php

require_once('include/MVC/View/views/view.list.php');
require_once('modules/pls12_DarrensPerson/DarrensListViewSmarty.php');

class pls12_DarrensPersonViewList extends ViewList
{
    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay(){
        parent::preDisplay();
        $this->lv = new DarrensListViewSmarty();
    }

}

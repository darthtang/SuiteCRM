<?php
/**
 *
 *
 * @package AdvancedOpenDiscovery
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author Salesagility Ltd <support@salesagility.com>
 */

function more_stuff_with_emails(){


}

$job_strings[] = 'darrens_function';

function darrens_function(){

    $cutoff = "2015-04-05";
    $Acount = BeanFactory::getBean('Accounts');
    $twoWeeksBefore = date("Y-m-d",strtotime("-1 week"));

    $withinCuttOff = $Acount->get_full_list(
        '',
        "accounts.date_modified < '$twoWeeksBefore'"
    );
    $dateOfCurrentBean =null;

    echo "entering for loop in next line : ";

    foreach($withinCuttOff as $foobar){
        echo "in for loop :";
        $dateOfCurrentBean = $foobar->date_modified;
        if($twoWeeksBefore>$dateOfCurrentBean){
            more_stuff_with_emails();
        }else{
            echo "in second :";
        }
    }

    echo "out of for loop :";
    die();
}

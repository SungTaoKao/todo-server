<?php
/**
 * Tasks.php
 * Author: Kabir
 * Date: 10/12/2017
 * Time: 1:20 PM
 */
class Tasks extends CSV_Model {

    public function __construct()
    {
        parent::__construct(APPPATH . '../data/tasks.csv', 'id');
    }

}
<?php

/**
 * Activities model config
 */

return array(

  'title' => 'Activities',

  'single' => 'activitiy',

  'model' => 'Activity',

  /**
   * The display columns
   */
  'columns' => array(
    'id',
    'date' => array(
      'title' => 'Date',
    ),


  ),

  /**
   * The filter set
   */
  'filters' => array(
    'id',
    'date' => array(
      'type' => 'date',
      'title' => 'Date',
      'date_format' => 'yy-mm-dd', //optional, will default to this value
    ),




  ),

  /**
   * The editable fields
   */
  'edit_fields' => array(
    'date' => array(
      'type' => 'date',
      'title' => 'Date',
      'date_format' => 'yy-mm-dd', //optional, will default to this value
    ),
    'hours' => array(
      'type' => 'number',
      'symbol' => 'h',
      'title' => 'Hours',
    ),
    'percent' => array(
      'type' => 'number',
      'symbol' => '%',
      'title' => 'Percent (100% = a workday)',
    ),
    'allocation' => array(
      'type' => 'bool',
      'title' => 'Confirmed',
    ),



  ),


  /**
   * Custom Action
   */
  'actions' => array(
    //Ordering an item up
    'allocation' => array(
        'title' => 'Allocation',
        'messages' => array(
            'active' => 'Allocating...',
            'success' => 'Allocated',
            'error' => 'There was an error while allocating',
        ),
        'permission' => function($model)
        {
            return true;
        },
        //the model is passed to the closure
        'action' => function($model)
        {
            //get all the items of this model and reorder them
            return true;
        }
    ), // end action allocation
  ), //end actions

);
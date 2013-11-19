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
    'date' => array(
      'title' => 'Date',
    ),
    'hours' => array(
      'title' => 'h.'
    ),
    'project_id' => array(
      'title' => 'Progetto',
      'relationship' => 'project',
      'select' => "CONCAT((:table).name,' - ', (:table).customer)"
    ),
    'resource_id' => array(
      'title' => 'Risorsa',
      'relationship' => 'resource',
      'select' => "CONCAT((:table).last_name,' - ', (:table).profile)"

    ),



  ),

  /**
   * The filter set
   */
  'filters' => array(
    
    'date' => array(
      'type' => 'date',
      'title' => 'Date',
      'date_format' => 'yy-mm-dd', //optional, will default to this value
    ),
    'allocation' => array(
      'type' => 'bool',
      'title' => 'Confirmed',
      
    ),

    'project' => array(
      'type' => 'relationship',
      'title' => 'project',
      'name_field' => 'name',
      'autocomplete' => true,
          'num_options' => 5,
    
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
      'value' => 8
    ),
    'percent' => array(
      'type' => 'number',
      'symbol' => '%',
      'title' => 'Percent (100% = a workday)',
      'value' => '100'
    ),
    'allocation' => array(
      'type' => 'bool',
      'title' => 'Confirmed',
    ),

    'project' => array(
      'type' => 'relationship',
      'title' => 'project',
      'name_field' => 'name',
      'autocomplete' => true,
          'num_options' => 5,
    //'search_fields' => array("name", "customer")
    ),
        'resource' => array(
      'type' => 'relationship',
      'title' => 'resource',
      'name_field' => 'last_name'
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
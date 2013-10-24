<?php

/**
 * Actors model config
 */

return array(

  'title' => 'Projects',

  'single' => 'project',

  'model' => 'Project',

  /**
   * The display columns
   */
  'columns' => array(
    'id',
    'name' => array(
      'title' => 'Name',
      'select' => "CONCAT((:table).name, ' (', (:table).customer, ')')",
    ),
    'projectmanager' => array(
      'title' => 'PM',
    ),

  ),

  /**
   * The filter set
   */
  'filters' => array(
    'id',
    'name' => array(
      'title' => 'Name',
    ),
    'customer' => array(
      'title' => 'Customer',
    ),
    'projectmanager' => array(
      'title' => 'PM',
    ),



  ),

  /**
   * The editable fields
   */
  'edit_fields' => array(
    'name' => array(
      'title' => 'Name',
      'type' => 'text',
    ),
    'customer' => array(
      'title' => 'Customer',
      'type' => 'text',
    ),
    'projectmanager' => array(
      'title' => 'PM',
      'type' => 'text',
    ),
    'description' => array(
      'type' => 'textarea',
      'title' => 'Description',
      'limit' => 300, //optional, defaults to no limit
      'height' => 130, //optional, defaults to 100
    ),


  ),

);
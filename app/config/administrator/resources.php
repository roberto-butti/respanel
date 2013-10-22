<?php

/**
 * Actors model config
 */

return array(

  'title' => 'Resources',

  'single' => 'resource',

  'model' => 'Resource',

  /**
   * The display columns
   */
  'columns' => array(
    'id',
    'full_name' => array(
      'title' => 'Name',
      'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
    ),
    'first_name' => array(
      'title' => 'Name',
    ),
    'last_name' => array(
      'title' => 'Last Name'
    ),
  ),

  /**
   * The filter set
   */
  'filters' => array(
    'id',
    'first_name' => array(
      'title' => 'First Name',
    ),
    'last_name' => array(
      'title' => 'Last Name',
    ),
  ),

  /**
   * The editable fields
   */
  'edit_fields' => array(
    'first_name' => array(
      'title' => 'First Name',
      'type' => 'text',
    ),
    'last_name' => array(
      'title' => 'Last Name',
      'type' => 'text',
    ),
  ),

);
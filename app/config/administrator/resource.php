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
    'email' => array(
      'title' => 'Email',
    ),
    'profile' => array(
      'title' => 'Profile',
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
    'email' => array(
      'title' => 'Email',
    ),
    'profile' => array(
      'title' => 'Profile',
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
    'email' => array(
      'title' => 'Email',
      'type' => 'text',
    ),

    'profile' => array(
      'type' => 'enum',
      'title' => 'Profile',
      'options' => array(
          'frontend' => 'Frontend DEV',
          'backend' => 'Backend DEV',
          'mobile' => 'Mobile DEV',
      ),
    ),

  ),

);
<?php

/**
 * Actors model config
 */


$field_profile= array(
      'type' => 'enum',
      'title' => 'Profile',
      'options' => array(
          'CTO' => "CTO",
          'frontend' => 'Frontend DEV',
          'backend' => 'Backend DEV',
          'mobile' => 'Mobile DEV',
      ));
$field_contract= array(
      'type' => 'enum',
      'title' => 'Contract',
      'options' => array(
          'DIP' => "Dipendente",
          'CE' => 'Consulente Esterno',
          'OUT' => 'Outsourcing'
      ));
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
    'contract' => $field_contract,

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
    'profile' => $field_profile,
    'contract' =>  $field_contract


  ), //end filters

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

    'profile' => $field_profile,
    'contract' =>  $field_contract
    )

  

);
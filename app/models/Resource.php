<?php

class Resource extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'resource';

  public function activities() {
    return $this->hasMany('Activity', 'resource_id');  
  }

  

}
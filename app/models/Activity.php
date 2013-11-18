<?php

class Activity extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'activity';

  public function resource() {
    return $this->belongsTo('Resource');
  }

  public function project() {
    return $this->belongsTo('Project');
    //
  }



}
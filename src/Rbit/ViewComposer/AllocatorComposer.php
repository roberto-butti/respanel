<?php
namespace Rbit\ViewComposer;


class AllocatorComposer {

  public function compose($view)
  {
    \Log::info(__METHOD__." *** compose");
    \Log::info(__METHOD__." *** retreiving resources");
    $resources = \Resource::orderby('last_name')->get();
    \Log::info(__METHOD__." *** retreiving days");
    $factory = new \CalendR\Calendar;
    $month = $factory->getMonth(2013, 11);
    \Log::info(__METHOD__." *** filling views");
    $view->with('month', $month);
    $view->with('resources', $resources);
    \Log::info(__METHOD__." *** compose DONE");
  }

}
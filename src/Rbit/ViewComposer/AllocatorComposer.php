<?php
namespace Rbit\ViewComposer;


class AllocatorComposer {

  public function compose($view)
  {

    $month = \Input::has('month') ? \Input::get('month'): date("n");
    $year = \Input::has('year') ? \Input::get('year'): date("Y");

    \Log::info(__METHOD__." *** compose");
    \Log::info(__METHOD__." *** retreiving resources");
    $resources = \Resource::orderby('last_name')->get();
    \Log::info(__METHOD__." *** retreiving days");
    $factory = new \CalendR\Calendar;
    $month = $factory->getMonth($year, $month);
    \Log::info(__METHOD__." *** filling views");
    $view->with('month', $month);
    $view->with('year', $year);
    $view->with('resources', $resources);
    \Log::info(__METHOD__." *** compose DONE");
  }

}
<?php
namespace Rbit\ViewComposer;


class AllocatorComposer {

    public function compose($view)
    {
      \Log::info("*** compose");
        $view->with('data', "TEST");
    }

}
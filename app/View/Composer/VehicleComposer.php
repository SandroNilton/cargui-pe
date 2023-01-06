<?php 

  namespace App\View\Composer;
  use Illuminate\View\View;

  class VehicleComposer
  {

    public function compose(View $view)
    {
      $view->with('prueba2', 'Este es un mensaje de prueba 2');
    }

  }

?>
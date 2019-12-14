<?php
namespace App\Controllers;
class AppController extends Controller
{
    
    public function index()
    {
        return $this->app->view('index');
    }


    public function saveNewResult() {
        return "Process the result and persist the new information into database.";
    }

    
    public function results()
    {
            $results = $this->app->db()->all('results');
            return $this->app->view('results', ['results' =>$results]);

    }

    public function result()
    {        
          return $this->app->view('result');
    }

    public function fresh()
    {
    $this->migrate();
    $this->seed();
    }
 
}

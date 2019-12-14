<?php

namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {    
      $newBreed = $this->app->old('newBreed', null);

        return $this->app->view('index', ['newBreed' => $newBreed]);
       
    }       
    public function saveNewGame() 
    {
        $this->app->validate([
            'breed' => 'required',  
        ]);

        $data = [
            'breed' => $this->app->input('breed')
        ];

        $this->app->db()->insert('results', $data);

          return 'Process the form and persist the new result to the database.';
            
    }

    public function results()
    {
            $results = $this->app->db()->all('results');
            return $this->app->view('results', ['results' => $results]);  
    }

    public function result()
    {        
            $resultId = $this->app->param('id');     
                           
            $result = $this->app->db()->findById('results', $resultId);
            
            if(is_null($result)) {
                return $this->app->redirect('/results', ['resultNotFound' => true]);;

            }

            return $this->app->view('result', ['result' => $result]);

    }

    public function fresh()
    {
    $this->migrate();
    $this->seed();
    }
 
}
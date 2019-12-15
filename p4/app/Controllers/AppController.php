<?php
namespace App\Controllers;
class AppController extends Controller
{
    
    public function index()
    { 
        $breed = $this->app->old('breed', null);
        return $this->app->view('index', ['breed' => $breed]);
    }
    public function saveNewResult() 
    {
        $this->app->validate([
            'breed' => 'required',
        ]);
        
            $data = [
            'breed' => $this->app->input('breed')
            ];
        $this->app->db()->insert('results', $data);
        
        $this->app->redirect('/', ['breed' => $data['breed']]);
        return "Process the result and persist the new information into database.";
    }
    
    public function results()
    {
            $results = $this->app->db()->all('results');
            return $this->app->view('results', ['results' =>$results]);
    }
    public function result()
    {        
        $id = $this->app->param('id');    
          
        dump($id);
          return $this->app->view('result');
    }
    public function fresh()
    {
    $this->migrate();
    $this->seed();
    }
 
}
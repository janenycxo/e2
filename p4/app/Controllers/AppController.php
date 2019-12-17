<?php
namespace App\Controllers;
class AppController extends Controller
{
    
    public function index()
    { 
        $selection = $this->app->old('selection', null);
        return $this->app->view('index', ['selection' => $selection]);
    }
    public function saveNewResult() 
    {
        $this->app->validate([
            'dog' => 'required',
            ]);
            $winner = null;
            $breed = $this->app->input('dog');

            $choose = ['Labrador Retriever', 'German Shepherd'];
            $player2 = $choose[rand(0, 1)];
                        
            if ($choose == "Labrador Retriever" and $player2 == "Labrador Retriever") {
                $winner = true;
            } else {
                $winner = false;
            }

            $selection = [
                'winner' => $winner,
                'player2' => $player2,
            ];

        $this->app->db()->insert('selections', $selection);
        
    }
    
    public function selections()
    {
            $selections = $this->app->db()->all('selections');
            return $this->app->view('selections', ['selections' =>$selections]);
            return 'This is the page to show all the selections.';
    }
    public function selection()
    {        
        $id = $this->app->param('id');    
        $selection = $this->app->db()->findById('selections', $id);
        
        return $this->app->view('selection', ['selection' => $selection]);
        
    }
   }
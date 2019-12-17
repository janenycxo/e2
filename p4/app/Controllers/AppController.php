<?php
namespace App\Controllers;
class AppController extends Controller
{
    
    public function index()
    { 
        $selections = $this->app->old('selections', null);
        return $this->app->view('index', ['selections' => $selections]);
    }
    public function saveNewResult() 
    {
        $this->app->validate([
            'dog' => 'required',
            ]);
            $winner = null;
            $player1 = $this->app->input('dog');

            $choose = ['Labrador Retriever', 'German Shepherd'];
            $player2 = $choose[rand(0, 1)];
                        
            if ($player1 == $player2) {
                $winner = true;
            } else {
                $winner = false;
            }

            $selections = [
                'winner' => $winner,
                'player1' => $player1,
                'player2' => $player2,
            ];

        $this->app->db()->insert('selections', $selections);
        $this->app->redirect('/', ['selections' => $selections]);
        
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
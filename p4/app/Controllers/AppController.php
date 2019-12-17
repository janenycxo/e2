<?php
namespace App\Controllers;
class AppController extends Controller
{
    
    public function index()
    { 
        $data = $this->app->old('data', null);
        return $this->app->view('index', ['data' => $data]);
    }
    public function saveNewResult() 
    {
        $this->app->validate([
            'dog' => 'required',
            ]);
        

            $breed = $this->app->input('dog');

            $choose = ['Labrador Retriever', 'German Shepherd'];
            $player2 = $choose[rand(0, 1)];
                        
            if ($choose == "Labrador Retriever" and $player2 == "Labrador Retriever") {
                $winner = true;
            } else {
                $winner = false;
            }

            $data = [
                'winner' => $winner,
                'player1' => $player1,
                'player2' => $player2,
            ];

        $this->app->db()->insert('results', $data);
        
        $this->app->redirect('/', ['data' => $data]);
    }
    
    public function selectionResults()
    {
            $selections = $this->app->db()->all('results');
            return $this->app->view('selection-results', ['selections' =>$selections]);
    }
    public function selection()
    {        
        $selectionId = $this->app->param('id');    
          
        $selection = $this->app->db()->findById('results', $selectionId);
        if(is_null($selection)) {
            return $this->app->redirect("/selection-results", ["selectionNotFound" => true]);
        }

        return $this->app->view('selection', ['selection' => $selection]);
    }
   }
   
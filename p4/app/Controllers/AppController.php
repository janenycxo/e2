<?php

namespace App\Controllers;

class AppController extends Controller
{

    /**
     *
     */
    public function index()
    {       
        
        dump('It works! You invoked your first command.'); 
            
    }
       

    public function results()
    {

        { 
            $results = $this->app->db()->all('results');
            return $this->app->view('results', ['results' => $results]);  
        }

        public function result()
    {        
            $id = $this->app->param('id');           
            $result = $this->app->db()->findById('results', $id);
            
            return $this->app->view('result', ['result' => $id]);


    $this->migrate();
    $this->seed();
    }
    }

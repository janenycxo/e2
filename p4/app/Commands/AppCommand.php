<?php

namespace App\Commands;

class AppCommand extends Command
{

    /**
     *
     */
    public function test()
    {       
        
        dump('It works! You invoked your first command.'); 
            
    }

    public function migrate()
    {   
        $this->app->db()->createTable('results', [
            'winner' => 'int',
            'player1' => 'varchar(255)',
            'player2' => 'varchar(255)',
        ]);      
dump('Migration complete.');
       
    }

    public function seed()
    {  
        # Instantiate a new instance of the Faker\Factory class

        $faker = \Faker\Factory::create();

        
        # Use a loop to create 10 results
        for ($i = 0; $i < 10; $i++) {

            # Set up a result
            $results = [
                'winner' => $faker->sentences (1,true),
                'player1' => $faker->words (3,true),
                'player2' => $faker->sentences (rand(3,10),
            ];

            
        # Insert the results
        $this->app->db()->insert('results', $results);
} 


        dump('Seeds complete.');  
    }

    public function fresh()
    {
    $this->migrate();
    $this->seed();
    }

}
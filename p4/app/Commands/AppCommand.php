<?php
namespace App\Commands;
class AppCommand extends Command
{
        public function migrate()
    {
        $this->app->db()->createTable('results', [
            'winner' => 'int',
            'player1' => 'varchar(255)',
            'player2' => 'varchar(255)',
            'breed' => 'varchar(255)',
        ]);
        dump('It works! You invoked your migrate command.');
    }
    public function seed()
    {

$faker =\Faker\Factory::create();

# Use a loop to create 10 games
for ($i = 0; $i < 10; $i++) {

    # Set up a result
    $result = [
        'winner' => $faker->sentences (1,true),
        'player1' => $faker->words (3,true),
        'player2' => $faker->sentences (3,true),
        'breed' => $faker->words (3,true),
    ];

           # Insert the results
$this->app->db()->insert('results', $result);
}

dump('Seed complete.');
}

public function fresh()

{
$this->migrate();
$this->seed();
}
}
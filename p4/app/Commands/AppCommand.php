<?php
namespace App\Commands;
class AppCommand extends Command
{
        public function migrate()
    {
        $this->app->db()->createTable('selections', [
            'winner' => 'varchar(255)',
            'player1' => 'varchar(255)',
            'player2' => 'varchar(255)',
            'breed' => 'varchar(255)',
        ]);
        dump('It works! You invoked your migrate command.');
    }
    public function seed()
    {
$faker =\Faker\Factory::create();
$choose = ['Labrador Retriever', 'German Shepherd'];

# Use a loop to create 10 games
for ($i = 0; $i < 10; $i++) {
  
   $player2 = $choose[rand(0, 1)];

if ($player1 == "Labrador Retriever" and $player2 == "Labrador Retriever") {
    $winner = 1;
} else {
    $winner = 2;
}
# Set up game/and data for table
    $selection = [
            'winner' => $winner,
            'player1' => $player1,
            'player2' => $player2,
        ];
    # Insert game
    $this->app->db()->insert('selection', $selection);
}
        dump('It works! You invoked your seed command.');
    }

public function fresh()
{
$this->migrate();
$this->seed();
}
}
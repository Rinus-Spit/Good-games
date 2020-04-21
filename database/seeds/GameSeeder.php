<?php

use Illuminate\Database\Seeder;
use App\Game;
use App\Category;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(GameSeeder::class);
        $game = Game::create([
            'title' => 'Risk',
            'excerpt' => 'Verover de wereld',
            'body' => 'Versla je vrienden en verover de wereld',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'wargame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Bridge',
            'excerpt' => 'Maak zoveel mogelijk slagen',
            'body' => 'Bied het goed contract en maak daarna je contract',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'cardgame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'mind sport')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Dammen',
            'excerpt' => 'Vernietig je tegenstander',
            'body' => 'Versla je tegenstander en vernietig zijn stukken',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'mind sport')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Schaken',
            'excerpt' => 'Vang de koning',
            'body' => 'Vang de koning van je tegenstander en bescherm je eigen koning',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'mind sport')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Go',
            'excerpt' => 'Beheers het grootste deel van het bord',
            'body' => 'Zorg dat je een groter deel van het bord beheerst dan je tegentander',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'mind sport')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Klaverjassen',
            'excerpt' => 'Verkrijg zoveel mogelijk punten',
            'body' => 'Maak slagen met daarin zoveel mogelijk punten',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'cardgame')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Pandemy',
            'excerpt' => 'Stop de wereldwijde pandemy',
            'body' => 'Stop het virus voordat deze de hele wereld heeft besmet',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $game = Game::create([
            'title' => 'Monopoly',
            'excerpt' => 'Koop de wereld',
            'body' => 'Versla je vrienden koop de wereld',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Yathzee',
            'excerpt' => 'verkrijg meer punten dan je tegenstander',
            'body' => 'Gooi goed met de dobbelstenen en verkrij zo veel mogelijk punten',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'dicegame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'computergame')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Snooker',
            'excerpt' => 'Speel de tafel leeg met meer punten dan je tegenstander',
            'body' => 'Pot alle ballen en zorg dat je meer punten hebt dan je tegenstander',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $game = Game::create([
            'title' => 'Stratego',
            'excerpt' => 'Verover de vlag van je tegenstander',
            'body' => 'Zoek de vlag van je tegenstander en verover deze en bescherm je eigen vlag',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
        $category = Category::where('name', '=', 'wargame')->firstOrFail();
        $game->categories()->attach($category);
        $game = Game::create([
            'title' => 'Vier op een rij',
            'excerpt' => 'Maak vier op een rij',
            'body' => 'Maak vier op een rij voordat je tegenstander dat doet',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $category = Category::where('name', '=', 'boardgame')->firstOrFail();
        $game->categories()->attach($category);
    }
}

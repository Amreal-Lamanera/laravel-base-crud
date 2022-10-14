<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        // dd($comics);
        foreach ($comics as $comic) {
            $c = Comic::create($comic);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $movie = new Movie;
        $movie->name = 'Atenea';
        $movie->description = 'es una película dirigida por Romain Gavras con Dali Benssalah, Alexis Manenti, Anthony';
        $movie->quality = 'cam';
        $movie->image ='img/Atenea.png';
        $movie->release_year = '2022-05-04';
        $movie->language = 'ingles';
        $movie->video_link = 'https://www.google.com/search?q=pelicula+Atenea&source=lmns&tbm=vid&bih=625&biw=1366&rlz=1C1ONGR_esCO1043CO1043&hl=es-419&sa=X&ved=2ahUKEwiG6ojbh7f9AhXuWTABHaanDnkQ_AUoAnoECAEQAg#fpstate=ive&vld=cid:b3634b20,vid:EuvERXZZ-r8';
        $movie->download_link = 'https://www.google.com/search?q=pelicula+Atenea&source=lmns&tbm=vid&bih=625&biw=1366&rlz=1C1ONGR_esCO1043CO1043&hl=es-419&sa=X&ved=2ahUKEwiG6ojbh7f9AhXuWTABHaanDnkQ_AUoAnoECAEQAg#fpstate=ive&vld=cid:b3634b20,vid:EuvERXZZ-r8';
        $movie->user_id = 2;
        $movie->category_id = 2;
        $movie->save();


        $movie = new Movie;
        $movie->name = 'Libertad';
        $movie->description = 'Hacia la libertad es una película dirigida por Antoine Fuqua con Will Smith, Ben Foster.';
        $movie->quality = 'FullHd';
        $movie->image ='img/libetad.png';
        $movie->release_year = '2022-01-02';
        $movie->language = 'ingles';
        $movie->video_link = 'https://www.youtube.com/watch?v=j3cwoGfWLx4';
        $movie->download_link = 'https://www.youtube.com/watch?v=j3cwoGfWLx4';
        $movie->user_id = 1;
        $movie->category_id = 1;
        $movie->save();

    }

    
    
}

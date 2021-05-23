<?php
namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Episode;
use App\Http\Services\BaseService;

class MovieService extends BaseService
{
    public function __construct(Request $request, User $currentUser, Movie $movie,)
    {
        parent::__construct($movie, $request, $currentUser);
    }

    public function getAll(){
        return $this->model->all();    
    }

    public function paginate($count)
    {
        return $this->model->paginate(15);
    }

    public function create($data)
    {
        
        $movie = [
            "title" => $data->title,
            "imdb_rate" => $data->imdb_rate,
            "length_min" => $data->length_min,
            "plot" => $data->plot,
            "year_released" => $data->year_released,
            "country_id" => $data->country_id,
            "country_id" => $data->country_id,
            "banner" => $data->banner
        ];

        

        return $this->model->create($movie);

        //create episode 
        // foreach($data['episodes'] as $episode) {
        //     $episode = new Episode();
        //     $episode->
        // }
    }


}
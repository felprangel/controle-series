<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Support\Facades\DB;

class SeriesRepository
{
    public function add(SeriesFormRequest $request): Serie
    {
        DB::beginTransaction();
        $series = Serie::create($request->all());

        $seasons = [];
        for ($i = 1; $i <= $request->seasons; $i++) {
            $seasons[] = ['serie_id' => $series->id, 'number' => $i];
        }

        Season::insert($seasons);

        $episodes = [];
        foreach ($series->seasons as $season) {
            for ($j = 1; $j <= $request->episodes; $j++) {
                $episodes[] = ['season_id' => $season->id, 'number' => $j];
            }
        }

        Episode::insert($episodes);
        DB::commit();

        return $series;
    }
}

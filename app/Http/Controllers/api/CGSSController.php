<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Repositories\CgssPlayerRepository;
use App\Repositories\CgssCharacterRepository;
use App\Repositories\CgssSongRepository;
use App\Repositories\CgssProducerExpRepository;

class CGSSController extends Controller
{
    private $cgssRepo;
    private $cgssCharacterRepo;
    private $cgssSongRepo;
    private $cgssProducerExpRepo;

    public function __construct(CgssPlayerRepository $cgssRepo,
                                CgssCharacterRepository $cgssCharacterRepo,
                                CgssSongRepository $cgssSongRepo,
                                CgssProducerExpRepository $cgssProducerExpRepo)
    {
        $this->cgssRepo = $cgssRepo;
        $this->cgssCharacterRepo = $cgssCharacterRepo;
        $this->cgssSongRepo = $cgssSongRepo;
        $this->cgssProducerExpRepo = $cgssProducerExpRepo;
    }

    public function getProducerExpDataList()
    {
        $result = $this->cgssProducerExpRepo->get_producer_exp_data();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }

    public function getSongDataList()
    {
        $result = $this->cgssSongRepo->get_song_data();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }

    public function getCharacterDataList()
    {
        $result = $this->cgssCharacterRepo->get_character_data();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }

    public function getPlayerDataList()
    {
        $result = $this->cgssRepo->get_player_data();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }
}


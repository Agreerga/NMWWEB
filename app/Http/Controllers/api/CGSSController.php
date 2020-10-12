<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Repositories\CgssPlayerRepository;
use App\Repositories\CgssCharacterRepository;

class CGSSController extends Controller
{
    private $cgssRepo;
    private $cgssCharacterRepo;

    public function __construct(CgssPlayerRepository $cgssRepo,
                                CgssCharacterRepository $cgssCharacterRepo)
    {
        $this->cgssRepo = $cgssRepo;
        $this->cgssCharacterRepo = $cgssCharacterRepo;
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


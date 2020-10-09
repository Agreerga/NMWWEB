<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Repositories\CgssPlayerRepository;

class CGSSController extends Controller
{
    private $cgssRepo;

    public function __construct(CgssPlayerRepository $cgssRepo)
    {
        $this->cgssRepo = $cgssRepo;
    }

    public function test()
    {
        $result = $this->cgssRepo->get_cgss_id_list();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }
}


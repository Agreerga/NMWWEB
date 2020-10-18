<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Repositories\TwitterTraceRepository;

class TwitterTraceController extends Controller
{
    private $twitterTraceRepo;

    public function __construct(TwitterTraceRepository $twitterTraceRepo)
    {
        $this->twitterTraceRepo = $twitterTraceRepo;
    }

    public function getTwitterTraceDataList()
    {
        $result = $this->twitterTraceRepo->getTraceData();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }
}


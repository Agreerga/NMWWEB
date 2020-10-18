<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Repositories\TwitterTraceRepository;

class TwitterTraceController extends Controller
{
    private $twitterTrace;

    public function __construct(TwitterTrace $twitterTrace)
    {
        $this->twitterTrace = $twitterTrace;
    }

    public function getTwitterTraceDataList()
    {
        $result = $this->twitterTrace->getTraceData();

        return response()->json([
            'status' => '0',
            'query' => $result,
        ]);
    }
}


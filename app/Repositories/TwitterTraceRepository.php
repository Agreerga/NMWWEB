<?php
namespace App\Repositories;

use App\Http\Models\TwitterTrace;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class TwitterTraceRepository extends BaseRepository
{
    public function __construct(TwitterTrace $twitterTrace)
    {
        $this->model = $twitterTrace;
    }

    public function getTraceData()
    {
        $user = $this->model::select('*')->orderBy('CreateTime','DESC');
        return $user->get();
    }
}


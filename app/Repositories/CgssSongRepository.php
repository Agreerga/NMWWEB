<?php
namespace App\Repositories;

use App\Http\Models\CgssSong;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CgssSongRepository extends BaseRepository
{
    public function __construct(CgssSong $cgssSong)
    {
        $this->model = $cgssSong;
    }

    public function get_song_data()
    {
        $user = $this->model::select('*');
        return $user->get();
    }
}


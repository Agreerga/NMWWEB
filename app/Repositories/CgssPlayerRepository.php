<?php
namespace App\Repositories;

use App\Http\Models\CgssPlayer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CgssPlayerRepository extends BaseRepository
{
    public function __construct(CgssPlayer $cgssPlayer)
    {
        $this->model = $cgssPlayer;
    }

    public function get_player_data()
    {
        $user = $this->model::select('*');
        return $user->get();
    }
}


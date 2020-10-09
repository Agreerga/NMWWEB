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

    public function get_cgss_id_list()
    {
        $user = $this->model::select('cgss_id');
        return $user->get();
    }
}


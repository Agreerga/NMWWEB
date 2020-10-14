<?php
namespace App\Repositories;

use App\Http\Models\CgssProducerExp;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CgssProducerExpRepository extends BaseRepository
{
    public function __construct(CgssProducerExp $cgssProducerExp)
    {
        $this->model = $cgssProducerExp;
    }

    public function get_producer_exp_data()
    {
        $user = $this->model::select('*')->orderBy('Plv','asc');
        return $user->get();
    }
}


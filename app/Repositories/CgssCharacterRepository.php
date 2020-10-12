<?php
namespace App\Repositories;

use App\Http\Models\CgssCharacter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CgssCharacterRepository extends BaseRepository
{
    public function __construct(CgssCharacter $cgssCharacter)
    {
        $this->model = $cgssCharacter;
    }

    public function get_character_data()
    {
        $user = $this->model::select('*');
        return $user->get();
    }
}


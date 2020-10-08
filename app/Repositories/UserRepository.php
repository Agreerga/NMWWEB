<?php
namespace App\Repositories;

use App\Http\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function get_user_by_email($email)
    {
        $user = $this->model::select('name', 'email', 'created_at', 'updated_at', 'user_type', 'login_num',
            'last_login_date');
        return $user->get();
    }
}


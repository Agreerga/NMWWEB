<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class TestController extends Controller
{
    private $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function test()
    {
        $result = $this->userRepo->get_user_by_email('xxxx');

        return response()->json([
            'status' => '0',
            'query' => $result,
            'oauth' => 'debug'
        ]);
    }
}


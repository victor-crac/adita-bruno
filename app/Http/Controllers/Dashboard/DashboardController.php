<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Campaign;
use App\Models\Contribution;

class DashboardController extends Controller
{

    public function index()
    {
        return Inertia::render('Dashboard/Index',
        [
            "users" => User::all(),
            "campaigns" => Campaign::all(),
            "donations" => Contribution::all(),
        ]
    );
    }
}

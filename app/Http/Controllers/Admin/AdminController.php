<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Number;
use Illuminate\View\View;

class AdminController extends Controller
{
    //
    public function index(): View
    {
        $userCount = User::count();
        $userSuspendedCount = User::whereNot('suspended_at', null)->count();
        $userUnverifiedCount = User::where('email_verified_at', null)->count();
        $userBannedCount = 987;
        $userLoggedInCount = 1234;
        $passengerCount = 987632;
        $productCount = 23653;
        $categoryCount = 64;
        $jokeCount = 432;
        $toDoCount = 4749;
        $bookCount = 5663;
        $carCount = 435663;
        $salesTotal = 397530;
        $visitorCount = 999999999999;
        $roleCount = 321;


        return view('admin.index')
            ->with('user_count', Number::format($userCount))
            ->with('user_logged_in_count', Number::format($userLoggedInCount))
            ->with('user_suspended_count', Number::format($userSuspendedCount))
            ->with('user_unverified_count', Number::format($userUnverifiedCount))
            ->with('user_banned_count', Number::format($userBannedCount))
            ->with('passenger_count', Number::format($passengerCount))
            ->with('product_count', Number::format($productCount))
            ->with('category_count', Number::format($categoryCount))
            ->with('joke_count', Number::format($jokeCount))
            ->with('visitor_count', Number::format($visitorCount))
            ->with('todo_count', Number::format($toDoCount))
            ->with('book_count', Number::format($bookCount))
            ->with('car_count', Number::format($carCount))
            ->with('sales_total', Number::format($salesTotal))
            ->with('role_count', Number::format($roleCount))
            ;
    }

    //
    public function users(): View
    {
        $users = User::paginate(10);

        return view('admin.users.index')
            ->with('users', $users);
    }
}

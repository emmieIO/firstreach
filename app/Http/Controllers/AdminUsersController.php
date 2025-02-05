<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Models\Shipment;
use App\Models\Location;
use App\Models\Category;

class AdminUsersController extends Controller
{
    public function dashboard(){
        $users = User::count();
        $shipments= Shipment::count();
        $locations = Location::count();
        $categories = Category::count();

        return view("dashboard", compact('users', 'shipments', 'locations', 'categories'));

    }
    public function index(){
        Gate::allowIf(auth()->user()->role == "super admin");
        $users = User::whereNot('id', auth()->user()->id)->paginate(10);

        return view("admin.users.index", compact('users'));
    }

    public function destroy($uuid){
        Gate::allowIf(auth()->user()->role == "super admin");
        $user = User::where('uuid', $uuid)->first();

        if(!$user){
            return back()->with("error", 'invalid user ');
        }

        $user->delete();
        return back()->with("success", "User deleted successfully.");
    }
}

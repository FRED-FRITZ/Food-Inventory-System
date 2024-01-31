<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Category;
use App\Models\Suppliers;
use App\Models\User;
use App\Models\Transaction;


class DashboardController extends Controller
{
    //
    public function showdashboard() {
        $itemCount=Items::count();
        $categoryCount=Category::count();
        $supplierCount=Suppliers::count();
        $userCount=User::count();
        $transactionCount=Transaction::count();
        $items=Items::all();


        return view('dashboard', compact('itemCount', 'categoryCount', 'supplierCount', 'userCount', 'transactionCount', 'items'));
    }
}

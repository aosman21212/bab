<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients; // Import the clients model
use App\Models\vendors; // Import the vendors model

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalClients = clients::count(); // Fetch total count of clients from the database
        $totalVendors = vendors::count(); // Fetch total count of vendors from the database

        return view('home', compact('totalClients', 'totalVendors')); // Pass totalClients and totalVendors variables to the home view
    }
}

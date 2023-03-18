<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProjectsModel;
use App\Models\ProjectMemberModel;
use App\Models\ExploreModel;
use App\Models\InventoryModel;
use App\Models\User;

use Auth;

class HomeController extends Controller
{

    public function __construct(){
        return "test";
    }
    // DASHBOARD
    public function home(){

        $projects = ProjectMemberModel::getProjects();

        return view('layout.home.dashboard', []);
    }
    // EXPLORE PAGE
    public function explore(){
        return view('layout.home.explore', ['explores' => ExploreModel::orderBy('id', 'DESC')->get()]);
    }
    // INVENTORY PAGE
    public function inventory(){
        
        return view('layout.home.inventory', ['inventory' => InventoryModel::getInventory()]);
    }
}

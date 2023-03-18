<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\BadgesModel;

class InventoryModel extends Model
{
    use HasFactory;

    protected $table = "inventory";

    public static function getInventory(){
        return InventoryModel::where('user', Auth::user()->id)
                ->leftJoin('badges', 'badges.id', '=', 'inventory.badge')
                ->get();
    }
}

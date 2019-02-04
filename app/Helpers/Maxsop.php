<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Maxsop {

    public static function countSubcategory($id) {
        return count(DB::table('terms')->where('parent', $id)->get());
    }
}

?>
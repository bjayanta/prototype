<?php

namespace App\Http\Controllers\Lab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Metadata;
use DB;

class MetaController extends Controller {

    public function getMeta() {
        return DB::connection('mysql_sys')->table('metadata')->get();
    }

    public function setMeta() {
        $meta = new Metadata;
        $meta->auth = 'Jayanta Biswas';
        $meta->email = 'bjayanta.neo@gmail.com';
        $meta->website = 'jayanta.xyz';
        $meta->save();

    }
}

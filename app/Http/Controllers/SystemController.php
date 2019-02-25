<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\System\Appdata;

class SystemController extends Controller {
    public function getMeta() {
        return DB::connection('sqlite')->table('appdatas')->get();
    }

    public function setMeta() {
        $meta = new Appdata;
        $meta->key = 'author';
        $meta->value = 'Jayanta Biswas';
        $meta->save();
    }

    public function setMeta2() {
        $data = [
            [
                'key' => 'email',
                'value' => 'uis360.jayanta@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'key' => 'phone',
                'value' => '01775219457',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // dd($data);

        Appdata::insert($data);
    }



}


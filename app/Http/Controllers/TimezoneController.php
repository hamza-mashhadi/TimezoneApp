<?php

namespace App\Http\Controllers;

use App\Timezone;

class TimezoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Timezone[]
     */
    public function index()
    {
        return Timezone::all();
    }

}

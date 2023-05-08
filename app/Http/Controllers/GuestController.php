<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    function guests()
    {
        return view('Guests/guests');
    }

    function addNewGuest(Request $req)
    {
        $guest = new Guest;
        $guest->firstname = $req->firstname;
        $guest->lastname = $req->lastname;
        $guest->email = $req->email;
        $guest->phonenumber = $req->phonenumber;

        $guest->save();
    }

    function getGuests()
    {
        return DB::select("select * from guests");
    }
}

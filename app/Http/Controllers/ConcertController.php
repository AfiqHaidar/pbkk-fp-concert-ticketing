<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Concert;
use App\Models\ConcertDetail;
use App\Models\Catagory;

class ConcertController extends Controller
{
    public function index()
    {
        $concert = Concert::all();
        return Inertia::render('Concert/Index', ['concerts' => $concert]);
    }

    public function detail($id)
    {
        $concert = Concert::find($id);
        $detail = ConcertDetail::where('concert_id', $id)->get();

        $guest = DB::table('guest_details')
            ->join('guests', 'guest_details.guest_id', '=', 'guests.id')
            ->where('guest_details.concert_id', $id)
            ->select('guest_details.*', 'guests.name as guest_name')
            ->get();

        return Inertia::render('Concert/Detail', ['concert' => $concert, 'concertDetails' => $detail, 'guestDetails' => $guest]);
    }

    public function catagory($dtid)
    {
        $cat = Catagory::where('concert_detail_id', $dtid)->get();
        return Inertia::render('Concert/Buy', ['cat' => $cat]);
    }
}

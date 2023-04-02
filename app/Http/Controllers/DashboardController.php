<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function Dadmin()
    {
        // $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        // ->where('created_at', '>', Carbon::today()->subDay(6))
        // ->groupBy('day_name','day')
        // ->orderBy('day')
        // ->get();

        //  $data = [];

        //  foreach($record as $row) {
        //     $data['label'][] = $row->day_name;
        //     $data['data'][] = (int) $row->count;
        //   }

        // $data['chart_data'] = json_encode($data);

        $dataUser = User::count();
        $dataPetani = User::where('userRole', 'user')->count();
        $dataPenyakit = Penyakit::count();
        $dataGejala = Gejala::count();
        $tittle = "Dashboard";
        return view('admin', ['dataUser' => $dataUser, 'dataPetani' => $dataPetani, 'dataPenyakit' => $dataPenyakit, 'dataGejala' => $dataGejala]);
    }
    public function Duser()
    {
        $tittle = "Dashboard";

        return view('user', ['tittle' => $tittle]);
    }
    public function Dpemilik()
    {
        // $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        // ->where('created_at', '>', Carbon::today()->subDay(6))
        // ->groupBy('day_name','day')
        // ->orderBy('day')
        // ->get();

        //  $data = [];

        //  foreach($record as $row) {
        //     $data['label'][] = $row->day_name;
        //     $data['data'][] = (int) $row->count;
        //   }

        // $data['chart_data'] = json_encode($data);
        $tittle = "Dashboard";

        return view('pemilik', ['tittle' => "Dashboard"]);
    }
}

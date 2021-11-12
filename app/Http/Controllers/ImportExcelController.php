<?php

namespace App\Http\Controllers;

use App\Imports\AnnualreportImport;
use App\Models\Import_excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function index()
    {
        $data = Import_excel::all();

            
        $params = [
            'route_slug' => route('excel.store'),
            'token' => csrf_token(),
            'data' => $data
        ];

        return Inertia::render('Import_excel', $params);
    }

    public function sort(){
        $data = DB::table('import_excels')
        ->orderBy('Member_Name')  
        ->get();

        return Inertia::render('Import_excel', ['data' => $data]);
    }

    public function store(Request $request)
    {

        \Excel::import(new AnnualreportImport,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');
           
        return back();
            
    }
}

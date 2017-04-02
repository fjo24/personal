<?php

namespace App\Http\Controllers;
use App\Personal;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    public function index()
    {

        Excel::create('Laravel Excel', function ($excel) {

            $excel->sheet('Listado', function ($sheet) {

                $personal = Personal::all();

                $sheet->fromArray($personal);

            });
        })->export('xls');

    }
}

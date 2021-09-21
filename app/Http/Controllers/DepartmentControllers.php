<?php

namespace App\Http\Controllers;

use App\Imports\DepartamentsImport;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;

class DepartmentControllers extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function import()
    {
        return $this->excel->import(new DepartamentsImport, 'vehicles.xlsx');
    }
}

<?php
namespace Jangid\Export\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;

class ExportController{
    public function exportExcel(object $data,string $filename){
        return Excel::download($data,$filename.".xlsx");
    }
    public function exportCsv(object $data,string $filename){
        return Excel::download($data,$filename.".csv");
    }
}
<?php
namespace Xpert\Export\Http\Controllers;

use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ExportController{
    public function exportExcel(object $data,string $filename){
        return Excel::download($data,$filename.".xlsx");
    }
    public function exportCsv(object $data,string $filename){
        return Excel::download($data,$filename.".csv");
    }
    public function exportPdf(string $view,object $data,string $filename){
        $pdf = PDF::loadView($view,['data' => $data]);
        return $pdf->download($filename.".pdf");
    }
}
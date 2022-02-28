<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;



class TestReportExport implements FromView
{
    use Exportable;
    protected $request;

    function __construct($request)
    {
        $this->request = $request;
    }
    public function view(): View
    {
        $test_result =$this->request;
        return view('Admin.components.admin_view_test_result_export', compact('test_result'));
    }
}


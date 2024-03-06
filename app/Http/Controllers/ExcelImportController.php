<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\FilesExport;
use App\Imports\FilesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function export()
    {

        return view('app', [
            'invoices' => User::all()
        ]);
    }

    // Handles the file upload and Excel import.
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        Excel::import(new FilesImport, $file);
        return back()->with('message', 'User Imported Successfully');
    }
}

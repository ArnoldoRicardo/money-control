<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseReport;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($view = 'expenseReport.index', [
            'expenserReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $validData['title'];
        $report->save();

        return redirect()->route('expense_reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  ExpenseReport $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return  view('expenseReport.show', ['report' => $expenseReport]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $report = ExpenseReport::findOrFail($id);

        return view('expenseReport.edit', [
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = ExpenseReport::findOrFail($id);
        $report->title = $validData['title'];
        $report->save();

        return redirect()->route('expense_reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();

        return redirect()->route('expense_reports.index');
    }
}

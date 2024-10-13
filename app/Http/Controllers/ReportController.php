<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App;
use Auth;


class ReportController extends Controller {

    public function report($pid){

        $payment = Payment::find($pid);
        

        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; pading:20px'>";
        $print  .= "<h1>Payment Receipt</h1>";
        $print .= "<br/>";
        $print .= "<p>Receipt no: <b> " . $pid . "</b></p>";
        $print .= "<p>Date: <b> " . $payment->paid_date . "</b></p>";
        $print .= "<p>Enrollment no: <b> " . $payment->enrollment_id . "</b></p>";
        $print .= "<p>Student Name: <b> " . $payment->enrollment->student->name . "</b></p>";
        $print .= "<br/>";

        $print .= "<table style='width:100px'>";
        $print .= "<tr>";
        $print .= "<td>Batch</td>";
        $print .= "<td>Amount</td>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
        $print .= "<td><h3>" . $payment->amount . "</h3></td>";
        $print .= "</tr>";

        $print .= "</table>";
        $print .= "<br/>";
        $print .= "<span>Printed Date : <b>" . date('y-m-d') . "</b></span>";
        $print .= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();

    }
    }






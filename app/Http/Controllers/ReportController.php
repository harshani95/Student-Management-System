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
        $print .= "<h1 style='color:#353b48;'>Payment Receipt</h1>";

        $print .= "<br/>";
        $print .= "<p>Receipt no : <b> " . $pid . "</b></p>";
        $print .= "<p>Date : <b> " . $payment->paid_date . "</b></p>";
        $print .= "<p>Enrollment no : <b> " . $payment->enrollment->enrollment_no . "</b></p>";
        $print .= "<p>Student Name : <b> " . $payment->enrollment->student->name . "</b></p>";
        $print .= "<br/>";

        $print .= "<table style='width:300px;'>";
        $print .= "<tr>";
        $print .= "<p>Batch : <b> "  . $payment->enrollment->batch->name . "</b></p>";
        $print .= "<p>Amount : <b> " . $payment->amount . "</b></p>";
        $print .= "<br/>";
        $print .= "<td></td>";
        $print .= "<td></td>";
        $print .= "</tr>";

        $print .= "</table>";
        $print .= "<br/>";
        $print .= "<span>Printed Date : <b>" . date('y-m-d') . "</b></span>";
        $print .= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();

    }
    }






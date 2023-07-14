<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data["email"] = "ahmed.m.a.almadhoun@gmail.com";
        $data["title"] = "From Ahmed";
        $data["body"] = "This is Demo";

        $files = [
            public_path('files/160031367318.pdf'),
            public_path('files/1599882252.png'),
        ];

        Mail::send('emails.myTestMail', $data, function($message)use($data, $files) {

            $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);

            foreach ($files as $file){
                $message->attach($file);
            }

        });
        dd('Mail sent successfully');

    }


    public function generatePDF()
    {
        $students = Student::get();

        $data = [
            'title' => 'Welcome to Computing Centre for Continuing Education',
            'date' => date('m/d/Y'),
            'students' => $students
        ];
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('myPDF', $data);
        // $pdf = PDF::loadView();

        return $pdf->download('laraveltuts.pdf');
    }
}
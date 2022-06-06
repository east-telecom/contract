<?php

namespace App\Http\Helpers;


use Dompdf\Dompdf;


class Helper {

    /**
     * Phone number formatting.
     *
     * @param  string
     * @return string
     */
    public static function phoneFormat($phone)
    {
        if (mb_substr($phone, 0, 4) == '+998')
            $response = mb_substr($phone, 0, 4)." (".mb_substr($phone, 4, 2).") ".mb_substr($phone, 6, 3)."-".mb_substr($phone, 9, 2)."-".mb_substr($phone, -2);
        else
            $response = "(".mb_substr($phone, 0, 2).") ".mb_substr($phone, 2, 3)."-".mb_substr($phone, 5, 2)."-".mb_substr($phone, -2);

        return $response;

    }


    public static function pdf($file_name, $data)
    {
        $dompdf = new Dompdf();

        $dompdf->loadHtml($data);

        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // $dompdf->stream();
        $dompdf->stream('contract', array('Attachment' => 0));

        exit();
    }



}

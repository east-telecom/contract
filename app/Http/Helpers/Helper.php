<?php

namespace App\Http\Helpers;


use Dompdf\Dompdf;


class Helper
{

    /**
     * Phone number formatting.
     *
     * @param string
     * @return string
     */
    public static function phoneFormat($phone)
    {
        if (mb_substr($phone, 0, 4) == '+998')
            $response = mb_substr($phone, 0, 4) . " (" . mb_substr($phone, 4, 2) . ") " . mb_substr($phone, 6, 3) . "-" . mb_substr($phone, 9, 2) . "-" . mb_substr($phone, -2);
        else
            $response = "(" . mb_substr($phone, 0, 2) . ") " . mb_substr($phone, 2, 3) . "-" . mb_substr($phone, 5, 2) . "-" . mb_substr($phone, -2);

        return $response;

    }


    public static function pdf($file_name, $data)
    {
        $html = "<html>
                    <head>
                        <style>
                
body {
  font-family: dejavu sans;
  line-height: 1 !important;
}

.contract1,
.contract2,
.contract3,
.contract4,
.contract5 {
    display: flex;
    justify-content: space-between;
    align-content: center;
  max-width: 2400px !important;
  padding: 0 2rem !important;
  font-size: 14px !important;
  box-sizing: content-box;
  margin: 0 auto;
  word-break: inherit;
  white-space: nowrap !important;
}
                        </style>" .
            "<body> " . $data . "</body>" .
            "</head>
                </html>";


        $dompdf = new Dompdf();

        $dompdf->loadHtml($html, 'UTF-8');


        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

//        $dompdf->set_base_path();

        // $dompdf->stream();
        $dompdf->stream("'" . $file_name . '"', array('Attachment' => 0));

        exit();
    }


}

<?php

namespace App\Http\Helpers;

//use Spipu\Html2Pdf\Html2Pdf;
//use Spipu\Html2Pdf\Exception\Html2PdfException;
//use Spipu\Html2Pdf\Exception\ExceptionFormatter;



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

//    public static function create_pdf($data='Hello world!') {

//        try {
////            ob_start();
////            include '/home/ismoil/contract/public/html2pdf/examples/res/example00.php';
////            $content = ob_get_clean();
//
//            $html2pdf = new Html2Pdf('P', 'A4', 'ru', true, 'UTF-8', array(5, 5, 15, 5));
//            $html2pdf->setDefaultFont('Arial');
//            $html2pdf->writeHTML($data);
//            $html2pdf->output('contract.pdf');
//
//        } catch (Html2PdfException $e) {
//            $html2pdf->clean();
//
//            $formatter = new ExceptionFormatter($e);
//            echo $formatter->getHtmlMessage();
//        }


//    }


}

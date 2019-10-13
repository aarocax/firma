<?php

/**
 * Html2Pdf Library - example
 *
 * HTML => PDF converter
 * distributed under the OSL-3.0 License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2017 Laurent MINGUET
 */

require_once dirname(__FILE__).'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

$test = explode('.', $_FILES["image"]["name"]);
$ext = end($test);
$name = rand(100, 999) . '.' . "png";
$location = './firmas/' . $name; 

move_uploaded_file($_FILES["image"]["tmp_name"], $location);
//echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';

try {
  ob_start();
  include dirname(__FILE__).'/template.php';
  $content = ob_get_clean();
  $html2pdf = new Html2Pdf('L', 'A4', 'es', true, 'UTF-8', 0);
  $html2pdf->writeHTML($content);
  $reult = $html2pdf->output(dirname(__FILE__).'/template.pdf', 'F');
  echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
} catch (Html2PdfException $e) {
  $html2pdf->clean();
  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}
<style type="text/css">
<!--
table
{
    width:  95%;
    /*border: solid 1px gray;*/
    margin-top: 4mm;
    margin-bottom: 4mm;
}

th
{
    text-align: center;
    border-bottom: solid 1px gray;
    background: gray;
    padding: 2px;
}

td
{
    text-align: center;
    padding: 2px;
    /*border: solid 1px #55DD44;*/
}

td.col1
{
    /*border: solid 1px red;*/
    text-align: right;
}

end_last_page div
{
    border: solid 1mm red;
    height: 27mm;
    margin: 0;
    padding: 0;
    text-align: center;
    font-weight: bold;
}
-->
</style>
<page backtop="22mm" backbottom="2mm" backleft="5mm" backright="0mm" style="font-size: 10pt">
  <page_header>
    <table style="margin-left: 5mm; margin-right: 2mm; border: none; margin-bottom: 0mm;">
      <tr>
        <td style="width: 100%; text-align: right;">
          <b>example, sl</b>
        </td>
        <td style="width: 100%; text-align: right;">
          <!-- <img src="<?php echo $location ?>" alt=""> -->
        </td>
      </tr>
    </table>  
    <table style="margin-left: 5mm; margin-right: 2mm; border: none; margin-bottom: 5mm;">
      <tr>
        <td style="width: 13%; text-align: left">
          <b>fecha de cierre:</b>
        </td>
        <td style="width: 25%; text-align: left">
          10/10/2019
        </td>
        <td style="width: auto; text-align: right;">
          &nbsp;
        </td>
      </tr>
      <tr>
        <td style="width: 13%; text-align: left">
          <b>nombre fiscal:</b>
        </td>
        <td style="width: 25%; text-align: left">
          Vanesa Matamales
        </td>
        <td style="width: auto; text-align: left">
          &nbsp;
        </td>
      </tr>
      <tr>
        <td style="width: 13%; text-align: left">
          <b>nombre comercial:</b>
        </td>
        <td style="width: 25%; text-align: left">
          Vanesa estética
        </td>
        <td style="width: auto; text-align: left">
          &nbsp;
        </td>
      </tr>
      <tr>
        <td style="width: 10%; text-align: left">
          <b>NIF:</b>
        </td>
        <td style="width: 20%; text-align: left">
          26656578W
        </td>
        <td style="width: 70%; text-align: left">
          &nbsp;
        </td>
      </tr>
    </table>  
  </page_header>
  <br>
  <br>
  <table style="margin-top: 15mm;">
    <thead>
      <tr>
        <th style="width: 8%; text-align: left;">Fecha</th>
        <th style="width: 10%; text-align: left;">Cliente</th>
        <th style="width: 18%; text-align: left;">Servicio</th>
        <th style="width: 10%; text-align: left;">Técnico</th>
        <th style="width: 18%; text-align: left;">Zona y num. sessiones</th>
        <th style="width: auto;">Importe</th>
        <th style="width: auto;">Comisión %</th>
        <th style="width: auto;">Centro</th>
        <th style="width: auto;">Total</th>
      </tr>
    </thead>
    <tbody>
        <?php
        for ($k=0; $k<2; $k++) {
        ?>
        <tr>
          <td style="width: 8%; text-align: left;">12/10/2019</td>
          <td style="width: 15%; text-align: left;">Lucia Carrasco Rodríguez</td>
          <td style="width: 18%; text-align: left;">Servicio de fotodepilación, explotación compartida</td>
          <td style="width: 10%; text-align: left;">María Rodríguez Antequera</td>
          <td style="width: 18%; text-align: left;">3ª Sesión, Labio y ax.</td>
          <td style="width: auto;">39.80€</td>
          <td style="width: auto;">30.00€</td>
          <td style="width: auto;">1.84€</td>
          <td style="width: auto;">27.86€</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4" style="font-size: 16px;">
                &nbsp;
            </th>
        </tr>
    </tfoot>
  </table>
  <br>

  <end_last_page end_height="30mm">
    <div>
        pie de página
    </div>
  </end_last_page>

</page>

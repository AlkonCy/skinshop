<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="control-bar">
  <div class="container">
    <div class="row">
      <div class="col-2-4">
        <div class="slogan">Facturación </div>

        <label for="config_tax">IVA:
          <input type="checkbox" id="config_tax" />
        </label>
        <label for="config_tax_rate" class="taxrelated">Tasa:
          <input type="text" id="config_tax_rate" value="13"/>%
        </label>
        <label for="config_note">Nota:
          <input type="checkbox" id="config_note" />
        </label>
        
      </div>
      <div class="col-4 text-right">
        <a href="javascript:window.print()">Imprimir</a>
		<a href="./Factura.php">Panel</a>
      </div><!--.col-->
    </div><!--.row-->
  </div><!--.container-->
</div><!--.control-bar-->

<header class="row">
  <div class="logoholder text-center" >
    <img src="assets/img/logo.png" width="60" height="60">
  </div><!--.logoholder-->

  <div class="me">
    <p>
      <strong>SkinShop S.A.S</strong><br>
      Villavicencio / Meta<br>
      Colombia.<br>
      
    </p>
  </div><!--.me-->

  <div class="info">
    <p>
      Web: <a href="#">www.skinshop.com.co</a><br>
      E-mail: <a href="#">soporte@skinship.com.co</a><br>
      Whatsapp: +57 320 322 522 12<br>
    </p>
  </div><!-- .info -->

  <div class="bank">
    <p contenteditable>
      Datos bacarios: <br>
      Titular de la cuenta: <br>
      IBAN: <br>
    </p>
  </div><!--.bank-->

</header>


<div class="row section">

	<div class="col-2">
    <h1>Factura</h1>
  </div><!--.col-->

  <div class="col-2 text-right details">
    <p contenteditable>
      Fecha: <input type="text" class="datePicker" /><br>
      Factura #: <input type="text" value="100" /><br>
     Vence: <input class="twoweeks" type="text"/>
    </p>
  </div><!--.col-->
  
  
  
  <div class="col-2">
    

    <p contenteditable class="client">
      <strong>Facturar a</strong><br>
      [Nombre cliente]<br>
	  [Dirección]<br>
	  [Telefono]
    </p>
  </div><!--.col-->
  
  
  <div class="col-2">
   

    <p contenteditable class="client">
      <strong>Enviar a</strong><br>
      [Nombre cliente]<br>
	  [Dirección empresa]<br>
	  [Telefono]
    </p>
  </div><!--.col-->

  

</div><!--.row-->

<div class="row section" style="margin-top:-1rem">
<div class="col-1">
	<table style='width:100%'>
    <thead contenteditable>
	<tr class="invoice_detail">
      <th width="25%" style="text-align">Vendedor</th>
       <th width="25%">Orden de compra </th>
      <th width="20%">Enviar por</th>
      <th width="30%">Términos y condiciones</th>
	 </tr> 
    </thead>
    <tbody contenteditable>
	<tr class="invoice_detail">
      <td width="25%" style="text-align">Nombre</td>
       <td width="25%">Orden de compra </td>
      <td width="20%">Proveedor</td>
      <td width="30%">Tipo de Pago</td>
	 </tr>
	</tbody>
	</table>
</div>

</div><!--.row-->

<div class="invoicelist-body">
  <table>
    <thead contenteditable>
      <th width="5%">Código</th>
      <th width="60%">Descripción</th>
      
      <th width="10%">Cant.</th>
      <th width="15%">Precio</th>
      <th class="taxrelated">IVA</th>
      <th width="10%">Total</th>
    </thead>
    <tbody>
      <tr>
        <td width='5%'><a class="control removeRow" href="#">x</a> <span contenteditable>12345</span></td>
        <td width='60%'><span contenteditable>Descripción</span></td>
        <td class="amount"><input type="text" value="1"/></td>
        <td class="rate"><input type="text" value="99" /></td>
        <td class="tax taxrelated"></td>
        <td class="sum"></td>
      </tr>
    </tbody>
  </table>
  <a class="control newRow" href="#">+ Nueva fila</a>
</div><!--.invoice-body-->

<div class="invoicelist-footer">
  <table contenteditable>
    <tr class="taxrelated">
      <td>IVA:</td>
      <td id="total_tax"></td>
    </tr>
    <tr>
      <td><strong>Total:</strong></td>
      <td id="total_price"></td>
    </tr>
  </table>
</div>

<div class="note" contenteditable>
  <h2>Nota:</h2>
</div><!--.note-->

<footer class="row">
  <div class="col-1 text-center">
    <p class="notaxrelated">El monto de la factura no incluye el impuesto sobre las ventas.</p>
	
    
  </div>
</footer>

<div>
<footer>
<p class="notaxrelated">Factura by SkinShop</p>
</footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="assets/js/main.js"></script>
</body>
</html>
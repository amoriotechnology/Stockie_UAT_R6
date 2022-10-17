<!-- Purchase Payment Ledger Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Purchase Order Invoice</h1>
	        <small>Purchase Order Invoice</small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#">Purchase Order Invoice</a></li>
	            <li class="active">Purchase Order Invoice</li>
	        </ol>
	    </div>
	</section>

	<!-- Invoice information -->
	<section class="content">

		<!-- Alert Message -->
	    <?php
	        $message = $this->session->userdata('message');
	        if (isset($message)) {
	    ?>
	    <div class="alert alert-info alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <?php echo $message ?>                    
	    </div>
	    <?php 
	        $this->session->unset_userdata('message');
	        }
	        $error_message = $this->session->userdata('error_message');
	        if (isset($error_message)) {
	    ?>
	    <div class="alert alert-danger alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <?php echo $error_message ?>                    
	    </div>
	    <?php 
	        $this->session->unset_userdata('error_message');
	        }
	    ?>

	  <div class="" >
            <div class="row">
               <div class="document active" id="profarma">
                  <div class="spreadSheetGroup">
                     <table class="shipToFrom" id="tab">
                        <thead style="font-weight:bold">
                           <tr id="top-head">
                              <th class="title"><?php echo $company_info[0]['company_name']; ?></th>
                              <th class="detail">Tel: <?php echo $company_info[0]['mobile']; ?> <br> Fax: <?php echo $company_info[0]['mobile']; ?></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td contenteditable="true" style="width:50%">
									<p><?php echo $company_info[0]['address']; ?></p>
									
                              </td>
                              <td contenteditable="true" style="width:50%">
                                 
                              </td>
                           </tr>
                        </tbody>
                     </table>
					 
					   <table class="shipToFrom" id="tab1">
                        <thead>
                           <tr id="order">
                              <th class="title text-center">Purchase Order</th>
                             
                           </tr>
                        </thead>
                       
                     </table>
					 
					 <table class="shipToFrom" id="tab2">
                        <thead id="address">
                           <tr>
                              <th style="width: 28%;"> Supplier:<br><?php echo $company_info[0]['company_name']; ?> </th>
                              <th style="width: 28%;">Ship to:<br> 
              <?php echo $customer[0]['customer_name']."<br/>".$customer[0]['customer_address']."<br>".$customer[0]['customer_email']; ?>
                              
                              </th>
							   <th>
								  <form>
									  <div class="form-group invoice-form" style="text-align:right">
										<span class="col-sm-5">Chalan No : <?php echo $chalan_no;  ?> </span>
										
										<span class="col-sm-5">Date: <?php echo $purchase_date;  ?></span> <br>
										 
								
										<span class="col-sm-5">Receipt:{receipt} </span><br>
										<span class="col-sm-5">Country Good :{country_goods} </span><br>		
                              <span class="col-sm-5">Country Destination :{country_destination} </span><br>		
										<span class="col-sm-5">Payment Terms:{terms_payment} </span><br>
										<span class="col-sm-5">Pre carriage :{pre_carriage} </span><br>
									

                              
									  </div>
									  
									</form>  
								  </th>
                           </tr>
                        </thead>
                         
                     </table> 
					 
					 
					 
					 
                     <hr style="visibility:hidden"/>
                     
                     <table class="proposedWork" width="100%" style="margin-top:20px" id="tab3">
                        <thead>
                        <th>S.No</th>
                           <th>Product Name (SKU)</th>
                          
                           <th>Quantity</th>
                           <!-- <th>Received</th> -->
								 
								   <th>Unit Cost</th>
                           <th class="amountColumn">Amount</th>
                           
                        </thead>
                        <tbody>
                        <?php
                                    if ($order) {
                                       $i=0;
                                ?>
                                   <?php  for($i;$i< count($order);$i++){ ?>
                           <tr>
                           <td contenteditable="true"><?php  echo $i+1; ?> </td>
                              <td contenteditable="true"><?php   echo $order[0]['product_name'] ; ?> </td>
                            
                              <td contenteditable="true" class="description"><?php  echo $order[0]['quantity'] ;  ?></td>
							   
							
								<td  class="description"><?php  echo $order[0]['rate'] ;  ?></td>
                              <td class="amountColumn" contenteditable="true"><?php  echo $order[0]['total_amount'] ;  ?></td>
                            
                              
                              </tr>
                         
                           <?php
                            }}
                                ?>
                        </tbody>
						
                        <tfoot>
                          
                           <tr>
                              <td style="border:none"></td>
                              <td style="border:none"></td>
                          
								   <td style="border:none"></td>
                              <td style="border:none;text-align:right">TOTAL:</td>
                              <td class="total amount" contenteditable="true"><?php echo $total;  ?></td>
                              <td class="docEdit"></td>
                           </tr>
                        </tfoot>
                     </table>
                    
                             
                                 <table style="width:100%" id="tab4">
                                    <tbody>
                                    
                                       <tr>
                                          <td style="padding-top:60px">
                                             Name: _____________________________ 
                                          </td>
										  </tr>
										  <tr>
										   <td style="padding-top:60px">
                                             Signature: _____________________________
                                          </td>

                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
	</section>
</div>
<!-- Purchase ledger End  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
$(document).ready(function () {
 



 
  var pdf = new jsPDF('p','pt','a4');
    const invoice = document.getElementById("profarma");
             console.log(invoice);
             console.log(window);
             var pageWidth = 8.5;
             var margin=0.5;
             var opt = {
   lineHeight : 1.2,
   margin : 0.2,
   maxLineWidth : pageWidth - margin *1,
                 filename: 'invoice'+'.pdf',
                 allowTaint: true,
                
                 html2canvas: { scale: 3 },
                 jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
             };
              html2pdf().from(invoice).set(opt).toPdf().get('pdf').then(function (pdf) {
  var totalPages = pdf.internal.getNumberOfPages();
 for (var i = 1; i <= totalPages; i++) {
    pdf.setPage(i);
    pdf.setFontSize(10);
    pdf.setTextColor(150);
    
  }
  var timer = setTimeout(function() {
            window.location='<?php echo base_url();  ?>'+'Cinvoice/manage_profarma_invoice'
        }, 10);
  }).save();
});
  
   </script>




<script src="<?php echo base_url() ?>assets/js/Chart.min.js" ></script>
<script src="<?php echo base_url() ?>assets/js/canvasjs.min.js" ></script>
<script src="<?php echo base_url() ?>assets/js/dashboard.js" ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>my-assets/css/style.css">

<!-- Admin Home Start -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>

        </div>
        <div class="header-title">
            <h1><?php echo display('dashboard') ?></h1>
            <small><?php echo display('home') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('dashboard') ?></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
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
        <!-- First Counter -->
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="<?php if($total_customersetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>" >
                 <div class="small-box whitecolor">
                    <div class="box-para">
                         <div class="icon" style="background-color: #18628f;">
             <i class="fa fa-users" style="color: #fff;"></i>
            </div>
            <div class="inner">
              <h4><span class="count-number"><?php if($total_sales==''){echo 0;}else{echo html_escape($total_sales);} ?></span></h4>
              <p><?php echo "Sales"?></p>
            </div>
           
            </div>
            <a href="<?php echo base_url('Ccustomer/manage_customer') ?>" class="small-box-footer" style="background: #18628f;"><?php echo "Total Sale"?></a>
          </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="<?php if($total_productsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                <div class="small-box whitecolor">
                    <div class="box-para">
                        <div class="icon" style="background-color: #d3465b;">
             <i class="fa fa-shopping-bag" style="color: #fff;"></i>
            </div>
            <div class="inner">
              <h4><span class="count-number"><?php if($total_sales==''){echo 0;}else{echo html_escape($total_sales);}   ?></span></h4>

              <p><?php echo "Sale Invoice"?></p>
            </div>
            
        </div>
            <a href="<?php echo base_url('Cproduct/manage_product') ?>" class="small-box-footer" style="background: #d3465b;"><?php echo "Sale Invoice"?></a>
          </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="<?php if($total_suppliersetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
         <div class="small-box whitecolor">
                <div class="box-para">
                  <div class="icon" style="background-color: #2aa354;">
             <i class="fa fa-user" style="color: #fff;"></i>
            </div>
            <div class="inner">
              <h4><span class="count-number"><?php if($total_expenses==''){echo 0;}else{echo html_escape($total_expenses);} ?></span></h4>

              <p><?php echo "Expenses"?></p>
            </div>
          
        </div>
            <a href="<?php echo base_url('Csupplier/manage_supplier') ?>" class="small-box-footer" style="background: #2aa354;"><?php echo "Expenses"?> </a>
          </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="<?php if($total_salessetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
            <div class="small-box whitecolor">
                <div class="box-para">
                  <div class="icon" style="background-color: #ef922b;">
             <i class="fa fa-money" style="color: #fff;"></i>
            </div>
            <div class="inner">
              <h4><span class="count-number"><?php if($total_expenses==''){echo 0;}else{echo html_escape($total_expenses);}  ?></span> </h4>

              <p><?php echo "Expenses Invoice"?></p>
            </div>
        </div>
          
            <a href="<?php echo base_url('Cinvoice/manage_invoice') ?>" class="small-box-footer" style="background: #ef922b;"><?php echo "Expenses Invoice"?> </a>
          </div>
            </div>
        </div>
        <hr>
        <div class="row">

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="<?php if($total_customersetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>" >
     <div class="small-box whitecolor">
        <div class="box-para">
             <div class="icon" style="background-color: #18628f;">
 <i class="fa fa-users" style="color: #fff;"></i>
</div>
<div class="inner">
  <h4><span class="count-number"><?php if($total_customer==''){echo 0;}else{echo html_escape($total_customer);}   ?></span></h4>
  <p><?php echo "Product Sold"?></p>
</div>

</div>
<a href="<?php echo base_url('Ccustomer/manage_customer') ?>" class="small-box-footer" style="background: #18628f;"><?php echo "Product Sold"?></a>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="<?php if($total_productsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
    <div class="small-box whitecolor">
        <div class="box-para">
            <div class="icon" style="background-color: #d3465b;">
 <i class="fa fa-shopping-bag" style="color: #fff;"></i>
</div>
<div class="inner">
  <h4><span class="count-number"><?php if($total_purchase==''){echo 0;}else{echo html_escape($total_purchase);} ?></span></h4>

  <p><?php echo "Product Purchased"?></p>
</div>

</div>
<a href="<?php echo base_url('Cproduct/manage_product') ?>" class="small-box-footer" style="background: #d3465b;"><?php echo "Product Purchased"?></a>
</div>
</div>

        <?php if ($this->session->userdata('user_type') == '1') { ?>
            <div class="row">
                <!-- This month progress -->
               
                 <div class="col-sm-12 col-md-6" style="<?php if($expense_statementsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                 
                            <?php echo form_open_multipart('Admin_dashboard/index',array('class' => 'form-vertical', 'id' => 'insert_sale','name' => 'insert_sale'))?>
                                  <div class="form-group row">
                                    <div class="col-sm-9 marginpadding-right0">
                                 
                                    <input class="daterangepicker-field" name="daterangepicker-field" id="daterangepicker-field"></input>
                                
                                 
                                  <input type="submit" name="btnSearch" id="submit" />
                               
                                </div>
                                <?php echo form_close();?>
                            </div>
                            <div class="panel-body">
                             <div id="chartContainer" name="chartContainer"  class="piechartcontainer"></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
        <div class="row">
                <!-- This month progress -->
                <div class="col-sm-12 col-md-6" style="<?php if($best_sales_productsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title" style="display: flex;
    justify-content: space-between;">
                                <h3 class="best-sale-title"> <?php echo display('best_sale_product') ?></h3>
                                <a href="<?php echo base_url(); ?>Admin_dashboard/see_all_best_sales" class="btn text-white best-sale-seeall" style="border-radius: 4px;
    background-color: #7789fc;">See All</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="lineChart" height="160"></canvas>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-12 col-md-5" style="<?php if($expense_statementsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                  
                        </div>

                    <div class="col-md-8" style="<?php if($yearly_reportsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 class="charttitle"></h4>
                            </div>
                            <div class="panel-body">
                              <canvas id="yearlyreport" width="600" height="350"></canvas>
                            </div>
                        </div>
                        </div>
                        </div>
                <!-- Total Report -->
                <div class="col-md-4" style="<?php if($todays_overviewsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4><?php echo display('todays_overview') ?></h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner">
                                <div class="message_widgets">

                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th><?php echo display('todays_report') ?></th>
                                            <th><?php echo display('money') ?></th>
                                        </tr>
                                        <tr>
                                            <th><?php echo display('total_sales') ?></th>
                                            <td><?php echo html_escape((($position == 0) ? "$currency $sales_amount" : "$sales_amount $currency")) ?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo display('total_purchase') ?></th>
                                            <td><?php echo html_escape((($position == 0) ? "$currency $todays_total_purchase" : "$todays_total_purchase $currency")) ?></td>
                                        </tr>

                                    </table>

                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th><?php echo display('last_sales') ?></th>
                                            <th><?php echo display('money') ?></th>
                                        </tr>
                                        <?php
                                        if ($todays_sale_product) {
                                            ?>
                                            {todays_sale_product}
                                            <tr>
                                                <th>{product_name}</th>
                                                <td><?php echo (($position == 0) ? "$currency {price}" : "{price} $currency") ?></td>
                                            </tr>
                                            {/todays_sale_product}
                                        <?php } ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                   <!-- This today transaction progress -->
                <div class="col-sm-12 col-md-12" style="<?php if($todays_sales_reportsetting=='disable'){ echo "display: none;"; }else{ echo "display: block;"; } ?>">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 class="charttitle"> <?php echo display('todays_sales_report') ?></h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive todayssaletitle">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo display('sl') ?></th>
                                            <th><?php echo display('customer_name') ?></th>
                                            <th><?php echo display('invoice_no') ?></th>
                                            <th><?php echo display('total_amount') ?></th>
                                            <th><?php echo display('paid_ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $ttl_amount = $ttl_paid = $ttl_due = $ttl_discout = $ttl_receipt = 0;
                                        $todays = date('Y-m-d');
                                        if ($todays_sales_report) {
                                            $sl = 0;
                     foreach ($todays_sales_report as $single) {
                     

                                                $sl++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $sl; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>Ccustomer/customer_ledger_report">
                                                            <?php echo html_escape($single->customer_name); ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/'; ?><?php echo html_escape($single->invoice_id); ?>">
                                                            <?php echo html_escape($single->invoice); ?>
                                                        </a>
                                                    </td>
                                                    <td class="text-right">
                                                        <?php
                                                        $ttl_amount += $single->total_amount; 
                                                        echo html_escape(number_format($single->total_amount, '2','.',',')); 
                                                        ?>
                                                    </td>
                                                    <td class="text-right">
                                                        <?php
                                                        $ttl_paid += $single->paid_amount;
                                                        echo html_escape(number_format($single->paid_amount, '2', '.', ',')); ?>
                                                    </td>
                                                   
                                                   
                                                   
                                                   
                                                  
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <th class="text-center" colspan="5"><?php echo display('not_found'); ?></th>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        
                                        <tr>
                                            <td colspan="3" align="right">&nbsp;<b><?php echo display('total') ?>:</b></td>
                                            <td class="text-right">
                                                <?php
                                                $ttl_amount_float = html_escape(number_format($ttl_amount, '2', '.',','));
                                                echo (($position == 0) ? "$currency $ttl_amount_float" : "$ttl_amount_float $currency"); ?>
                                            </td>
                                            <td class="text-right">
                                                <?php
                                                $ttl_paid_float = html_escape(number_format($ttl_paid, '2', '.',','));
                                                echo (($position == 0) ? "$currency $ttl_paid_float" : "$ttl_paid_float $currency"); ?>
                                            </td>
                                           
                                          
                                           
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>

                        
                    </div>
                
                </div>
                
      
               
             
            </div>
            <?php
if(isset($_POST['btnSearch'])){
    $dat = $_REQUEST["daterangepicker-field"];
    if($dat==''){
        $prev_month = date('Y-m-d', strtotime("-1 months", strtotime("NOW"))); 
$current=date('Y-m-d');
$dat= $prev_month."to". $current;

    }
    
    $dat = str_replace(' ', '', $dat);
    $split=explode("to",$dat);
?>
  <input type="hidden" id="currency" value="<?php echo  html_escape($currency)?>" name="">
        <input type="text" id="totalsalep" value="<?php echo html_escape($this->Reports->total_sales_amount($split[0],$split[1]))?>" name="">
      <input type="text" id="totalplurchasep" value="<?php
     echo html_escape($this->Reports->total_purchase_amount($split[0],$split[1]))?>" name="">
      <input type="text" id="totalexpensep" value="<?php
     echo html_escape($this->Reports->total_expense_amount($split[0],$split[1]))?>" name="">
     <input type="text" id="totalemployeesalaryp" value="<?php
     echo html_escape($this->Reports->total_employee_salary($split[0],$split[1]))?>" name="">

      <input type="hidden" id="totalservicep" value="<?php
     echo html_escape($this->Reports->total_service_amount($split[0],$split[1]))?>" name="">

      <input type="text" id="month" value="<?php echo html_escape($month);?>" name="">
      <input type="text" id="tlvmonthsale" value="<?php echo html_escape($tlvmonthsale);?>" name="">
      <input type="text" id="tlvmonthpurchase" value="<?php echo html_escape($tlvmonthpurchase);?>" name=""> 
      <input type="hidden" id="salspurhcaselabel"  value="<?php echo display("sales_and_purchase_report_summary");?>- <?php echo  date("Y")?>" name="">     


<input type="hidden" id="bestsalelabel" value='<?php echo html_escape($chart_label);?>' name=""> 
<input type="hidden" id="bestsaledata" value='<?php echo html_escape($chart_data);?>' name=""> 

<?php
}

?>
    
          


<!--<input type="hidden" value='<?php// @$seperatedData = explode(',', $chart_data); echo html_escape(($seperatedData[0] + 10));?>' name="" id="bestsalemax">  -->   
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<!-- Admin Home end -->

<!-- ChartJs JavaScript -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-debug.js'></script>

<script  src="<?php echo base_url() ?>my-assets/js/script.js"></script>
<script>


    //create data object here so we can dynamically set new csrfName/Hash
    $('#submit').on('click', function (e) {
      var date=$('#daterangepicker-field').val();
      sessionStorage.setItem("daterange", date);
 
});
$(function() { 
var retrieve =sessionStorage.getItem("daterange");
$('#daterangepicker-field').val(retrieve);
});

</script>

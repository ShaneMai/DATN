<?php

include ("models/m_invoice.php");
class c_invoice
{
    function view_invoice()
    {
// Models
        $m_invoice = new m_invoice();

        if(isset($_POST["btnCapnhat"]) && isset($_POST["ds"]) && isset($_POST["so_hoa_don"]))
        {
            // Cập nhật lại tình trạng
            $ds=$_POST["ds"];
            $ds_invoice=$_POST["so_hoa_don"];
            for($i=0;$i<count($ds_invoice);$i++)
            {
                $ma_hoa_don=$ds_invoice[$i];
                $tinh_trang=$ds[$i];
                $m_invoice->update_status($ma_hoa_don,$tinh_trang);
            }
        }
        $khhds = $m_invoice->read_invoice_with_customer();

        $view = 'views/invoice/v_invoice.php';
        include('templates/layout.php');
// View
    }
    public function view_detail_invoice()
    {
        // Models
        $so_hoa_don=$_GET["so_hoa_don"];
        $m_invoice=new m_invoice();
        $invoice=$m_invoice->read_invoice_by_id($so_hoa_don);
        $details=$m_invoice->read_detail_invoice_by_id($so_hoa_don);
        // View
        $view="views/invoice/v_detail_invoice.php";
        include("templates/layout.php");

    }

}
?>
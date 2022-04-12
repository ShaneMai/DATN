<?php
require_once ("database.php");
class m_product extends database
{
    public function insert_product_to_checkout($chuoi)
    {
        $query = "select * from  san_pham where  ma_san_pham in ($chuoi)";
        $this->setQuery($query);
        return $this->loadAllRows();
    }

    public function search_product($gtTim)
    {
        $sql = "select * from san_pham WHERE ten_san_pham like '%$gtTim%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function search_product_by_price($gtDau, $gtCuoi){
        $sql = "SELECT * FROM san_pham WHERE don_gia >= $gtDau AND don_gia <= $gtCuoi";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product($vt = -1, $limit = -1)
    {
        $sql = "select * from san_pham";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product_by_ma_loai($ma_loai, $vt = -1, $limit = -1)
    {
        $sql = "select * from san_pham where ma_loai = ?";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai));
    }

    public function read_product_by_ma_san_pham($ma_san_pham)
    {
        $sql = "select * from san_pham where ma_san_pham  = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_san_pham));
    }

    public function read_new_product($vt = -1, $limit = -1)
    {
        $sql = "select * from san_pham order by ngay_tao desc";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public  function  read_best_product($vt = -1,$limit = -1)
    {
        $sql = "select * from san_pham, (SELECT ma_san_pham , sum(so_luong) as 'Tong' from ct_hoa_don GROUP By ma_san_pham order by Tong desc limit 0, 5) as CT WHERE CT.ma_san_pham = san_pham.ma_san_pham";
        if ($vt >= 0 && $limit > 0) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
?>
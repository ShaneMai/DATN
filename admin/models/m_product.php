<?php
include_once("database.php");

class m_product extends database
{
    public function insert_product($ma_san_pham, $ten_san_pham, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao)
    {
        $sql = "INSERT INTO san_pham values (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_san_pham,$ten_san_pham, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao));
    }

    public function read_product()
    {
        $sql = "SELECT *FROM san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product_by_id_product($ma_san_pham)
    {
        {
            $sql = "select * from san_pham where ma_san_pham = ? ";
            $this->setQuery($sql);
            return $this->loadRow(array($ma_san_pham));
        }
    }

    public function edit_product($ma_san_pham, $ten_san_pham, $ma_loai, $mo_ta_tom_tat,$mo_ta_chi_tiet,  $don_gia, $hinh, $ngay_tao)
    {
        $sql = "update san_pham set ten_san_pham = ?,ma_loai=?,mo_ta_tom_tat =?,don_gia=?,mo_ta_chi_tiet=?,hinh=?,ngay_tao=?  Where ma_san_pham=?";
        $this->setQuery($sql);
        return $this->execute(array($ten_san_pham, $ma_loai,  $mo_ta_tom_tat,$mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao, $ma_san_pham));
    }

    public function delete_product($ma_san_pham)
    {

        $sql = "delete from san_pham where ma_san_pham = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_san_pham));
    }
}
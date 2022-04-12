<?php
include_once("database.php");

class m_category_product extends database
{
    public function insert_category($ma_loai, $ten_loai, $mo_ta)
    {
        $sql = "insert into loai_san_pham values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai, $ten_loai, $mo_ta));
    }

    public function read_category()
    {
        $sql = "SELECT *FROM loai_san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_category_by_id_category($ma_loai)
    {
        {
            $sql = "select * from loai_san_pham where ma_loai = ? ";
            $this->setQuery($sql);
            return $this->loadRow(array($ma_loai,));
        }
    }

    public function edit_category($ma_loai, $ten_loai, $mo_ta)
    {
        $sql = "update loai_san_pham set ten_loai = ?,mo_ta = ?  where ma_loai = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai, $mo_ta,  $ma_loai));
    }

    public function delete_category($ma_loai){

        $sql = "delete from loai_san_pham where ma_loai = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai));
    }
}
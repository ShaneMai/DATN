<?php
include_once("database.php");

class m_customer extends database
{
    public function insert_m_customer($ma_khach_hang, $ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu)
    {
        $sql = "insert into khach_hang values (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_khach_hang, $ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu));
    }

    public function read_customer()
    {
        $sql = "SELECT *FROM khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_customer_by_id_customer($ma_khach_hang)
    {
        {
            $sql = "select * from khach_hang where ma_khach_hang = ? ";
            $this->setQuery($sql);
            return $this->loadRow(array($ma_khach_hang));
        }
    }

    public function edit_customer($ma_khach_hang, $ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu)
    {
        $sql = "update khach_hang set ten_khach_hang = ?,gioi_tinh = ?, ngay_sinh = ?, dia_chi = ?, dien_thoai = ?, email = ?, ghi_chu = ? where ma_khach_hang = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu,$ma_khach_hang));
    }

    public function delete_customer($ma_khach_hang)
    {

        $sql = "delete from khach_hang where ma_khach_hang = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_khach_hang));
    }
}
<?php
include_once("database.php");

class m_user extends database
{
    public function read_user_by_id_pass($username, $password)
    {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($username, md5($password)));
    }

    public function read_user()
    {
        $sql = "select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function insert_user($ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $trang_thai)
    {
        $sql = "insert into nguoi_dung values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $trang_thai));
    }

    public function read_user_by_id_user($ma_nguoi_dung)
    {
        {
            $sql = "select * from nguoi_dung where ma_nguoi_dung = ? ";
            $this->setQuery($sql);
            return $this->loadRow(array($ma_nguoi_dung));
        }
    }

    public function edit_user($ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $trang_thai)
    {
        $sql = "update nguoi_dung set ma_loai_nguoi_dung = ?, ho_ten = ?, ten_dang_nhap = ?, mat_khau = ?, email = ?, trang_thai = ? where ma_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $trang_thai, $ma_nguoi_dung));
    }

    public function delete_user($ma_nguoi_dung)
    {

        $sql = "delete from nguoi_dung where ma_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_nguoi_dung));
    }
}

class m_user_type extends database
{
    public function insert_user_type($ma_loai_nguoi_dung, $ten_loai_nguoi_dung)
    {
        $sql = "insert into loai_nguoi_dung values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai_nguoi_dung, $ten_loai_nguoi_dung));
    }

    public function read_user_type()
    {
        $sql = "SELECT *FROM loai_nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_user_type_by_id_user_type($ma_loai_nguoi_dung)
    {
        {
            $sql = "select * from loai_nguoi_dung where ma_loai_nguoi_dung = ? ";
            $this->setQuery($sql);
            return $this->loadRow(array($ma_loai_nguoi_dung));
        }
    }

    public function edit_user_type($ma_loai_nguoi_dung, $ten_loai_nguoi_dung)
    {
        $sql = "update loai_nguoi_dung set ten_loai_nguoi_dung = ? where ma_loai_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai_nguoi_dung, $ma_loai_nguoi_dung));
    }

    public function delete_user_type($ma_loai_nguoi_dung)
    {

        $sql = "delete from loai_nguoi_dung where ma_loai_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai_nguoi_dung));
    }
}

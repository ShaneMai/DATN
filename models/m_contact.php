<?php
require_once ("database.php");
class m_contact extends database{
    public function add_contact($name,$email,$content)
    {
        $sql = "insert into lien_he VALUE (?,?,?,?,?,?)";
        $this->setQuery($sql);
        $param = array(NULL,$name, $email,$content,date("Y-m-d"),0);
        return $this->execute($param);
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
    class conNguoi{
        public $name;
        public $diachi;
        public $email;
        public $sdt;

        function __construct($name,$diachi,$email,$sdt)
        {
            $this-> name=$name;
            $this-> diachi=$diachi;
            $this-> email=$email;
            $this-> sdt=$sdt;

        }
        function get_name()
        {
            return $this-> name;
        }
        function get_diachi()
        {
            return $this-> diachi;
        }
        function get_emai()
        {
            return $this-> email;
        }
        function get_sdt()
        {
            return $this-> sdt;
        }

    }
?>


</body>
</html>

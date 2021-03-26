<?php require "nhap.php";
class nhanVien extends conNguoi
    {
        private $bangcap;

        function __construct($name,$diachi,$email,$sdt,$bangcap)
        {
            $this-> name=$name;
            $this-> diachi=$diachi;
            $this-> email=$email;
            $this-> sdt=$sdt;
            $this-> bangcap= $bangcap;
        }
        function get_bangcap()
        {
            return $this->bangcap;
        }
        
    }
    ?>

<div id="container">
<form method="post">
    <h3>THÊM NHAN VIEN</h3>
    Ten:<input type="text" name="ten" placeholder="--" value='<?php if(isset($_POST['ten'])) echo $_POST['ten'] ?>'><br>
    Que:<input type="text" name="que" placeholder="--" value='<?php if(isset($_POST['que'])) echo $_POST['que'] ?>'><br>
    Email:<input type="text" name="email" placeholder="--" value='<?php if(isset($_POST['email'])) echo $_POST['email'] ?>'><br>
    sdt:<input type="text" name="sdt" placeholder="Nhap sdt" value='<?php if(isset($_POST['sdt'])) echo $_POST['sdt'] ?>'><br>
    Bang:<input type="text" name="bang" placeholder="--" value='<?php if(isset($_POST['bang'])) echo $_POST['bang'] ?>'><br>
    <input type="submit" class="btn"name="btn" value="Thêm Tai Khoản"/><br>


</form>
<style>

#container{
    background-color: lightyellow;
    font-family: verdana;
    font-size: 20px;
    width:50%;
    text-align: center;
    border: 3px solid #73AD21;
    position: absolute;
    left: 25%;
    
}
input,dselect, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>


<?php
if(isset($_POST['btn'])){
    $ten=$_POST['ten'];
    $que=$_POST['que'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $bang=$_POST['bang'];


    $manh = new nhanVien("$ten","$que","$email","$sdt","$bang");

}

    
    echo "Ten nhan vien :".$manh->get_name();
    echo "<br>";
    echo "Que nhan vien:".$manh->get_diachi();
    echo "<br>";
    echo "Email nhan vien :".$manh->get_emai();
    echo "<br>";
    echo "Sdt nhan vien :".$manh->get_sdt();
    echo "<br>";
    echo "Bang nhan vien :".$manh->get_bangcap();
    echo "<br>";
?>

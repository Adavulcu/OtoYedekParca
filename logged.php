<?php
include "connection.php";

if (isset($_POST['signBtn']))
{
    $request = mysqli_query($conn,"select * from tbl_giris WHERE Eposta='".htmlspecialchars($_POST['inputEmail'])."' and  sifre='".htmlspecialchars($_POST['inputPassword'])."' ");
    $response = mysqli_fetch_assoc($request);

    if (mysqli_num_rows($request)==0){
        echo "<script type='text/javascript'>alert('Kullanici adi veya parola yanlis');window.location='login.php'</script>";
    }
    else {
        $_SESSION["kullanici_id"] = $response['IDKullanici'];
        $_SESSION["eposta"] = $response['Eposta'];
        $request = mysqli_query($conn, "SELECT IDSt FROM tbl_kullanici WHERE IDKullanici='" . $_SESSION["kullanici_id"] .    "' ");
        $response = mysqli_fetch_assoc($request);
        //echo mysqli_num_rows($request);
        //echo $response['IDSt'];
        if ($response['IDSt'] == 1) //Statusu admin ise admin.php yönlendir.
        {
            header("location:admin.php");
        }
        else {
            header("location:index.php");
        }

        //header("location:index.php");
    }

}
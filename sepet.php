<?php
    
session_start();

$host="localhost";
$kullanici="root";
$password="";
$vt="shopping";


$baglanti = mysqli_connect($host, $kullanici, $password, $vt);


?>





<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="arkaplan">
    <div class="ust kapsayici">
        <div class="menu">
            <ul>
                <li>

                <a href="Loggedin.php">Ana Sayfa</a>
                <a href="logout.php">Çıkış</a> 
            </li>


            </ul>
        </div>
    </div>
</div>


<!-- sayfa üstü-->
<div class="arkaplan alt-kenar-10">
    <div class="ortaust kapsayici">
        <div class="logo">
            <h1>Alışveriş</h1>
        </div>
        
    </div>
</div>

<!-- sayfa ortası-->
<div class="orta kapsayici">
    <div class="bolum1">
        
       <?php
        $user_id = $_SESSION['user_id'];
         
            
        
            $yazdir = "SELECT * FROM `urun`,`user_urun` WHERE `urun`.`urun_id` = `user_urun`.`urun_id` AND `user_urun_id` = '$user_id' "; 
            
            $hepsiniyazdir = mysqli_query($baglanti,$yazdir);

            if(!$hepsiniyazdir){
                
                echo "ben boşum bişey al";
                die(mysqli_error($baglanti));
                
                
            }

              $sayi = mysqli_num_rows($hepsiniyazdir);
              

            while ($sayi>= 1) {
                

                $rowData = mysqli_fetch_assoc($hepsiniyazdir);
                
                
                $foto=$rowData["urun_foto"];    
                    
                    ?>
                    <div class="bolum4">
                    <img src="<?php echo $foto ;  ?>"alt="Kapak resmi"  height="350">
                    <h1>
                
                    
                    <?php
                

                    echo 'Ürün numaranız: '.$rowData["urun_id"]. '<br>';
                    echo 'Ürün adı: '.$rowData["urun_name"]. '<br>';
                    echo 'Ürün ücreti: '.$rowData["urun_fiyat"] ;
           
                    ?></h1>       </div>    <?php
             
                    $sayi -=1;
            }   
             
        
        
            ?>
                    

            



    </div>
</div>





<!-- sayfa altı-->
<div class="arkaplan">
    <div class="alt kapsayici" style="height: 141px;">
        <div class="baglanti">
            <ul>
                
            </ul>
        </div>
        <div class="baglanti">
            <ul>
                

            </ul>
        </div>
    </div>
</div>


</body>
</html>
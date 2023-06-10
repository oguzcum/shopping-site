 <?php
    session_start();
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


                <li><a href="sepet.php">Sepetim</a>
                <a href="logout.php">Çıkış</a> </li>
                


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
        <div class="menu">
            <ul>

            <h1>Hoşgeldiniz, <?php

            echo $_SESSION['user_name']; 
           
            ?></h1>
            </ul>
        </div>
        
    </div>
</div>

<!-- sayfa ortası-->
<div class="orta kapsayici">
    <div class="bolum1">
        <img src="\web proje\jpg\indirim.jpg" alt="Kapak resmi"  height="350">
    </div>
</div>


<div class="orta kapsayici">
    <div class="bolum3">

    <div class="urunkarti">
        <a href="urun1.php"> <img src="\web proje\jpg\gomlek1.jpg" alt="urun" >  </a>
            
        </div>
        <div class="urunkarti">
            <a href="urun2.php"> <img src="\web proje\jpg\gomlek2.jpg" alt="urun"  > </a>
            
        </div>
        <div class="urunkarti">
            <a href="urun3.php"> <img src="\web proje\jpg\gomlek3.jpg" alt="urun"  > </a>
        </div>
        <div class="urunkarti">
        <a href="urun1.php"> <img src="\web proje\jpg\gomlek1.jpg" alt="urun" >  </a>
            
        </div>

        <div class="urunkarti">
            <a href="urun2.php"> <img src="\web proje\jpg\gomlek2.jpg" alt="urun"  > </a>
            
        </div>
        <div class="urunkarti">
            <a href="urun3.php"> <img src="\web proje\jpg\gomlek3.jpg" alt="urun"  > </a>
        </div>
        <div class="urunkarti">
        <a href="urun1.php"> <img src="\web proje\jpg\gomlek1.jpg" alt="urun" >  </a>
            
        </div>
        
    </form>
        
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
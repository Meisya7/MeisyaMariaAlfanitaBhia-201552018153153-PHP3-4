<html>
  <head>
    <title> Belajar PHP</title>
  </head>
  <body>
    <?php 
      // belajar php
      /*
        berapa baris
        komentar  
        terserah teman2
      */

      // variabel pada php
      // tipe data -string-
      $nana  = "Sekolah koding";
      $nana2 = "Bermain koding";

      echo "selamat datang di $nana <br>";

      //tipe data angka/number
      // 1. Integer 2. Float

      $angka  = 1000;
      $angka2 = 3;
      $angka3 = 2.64;

      //------------ Operator Aritmatik ----------
      // + - + / %

      //nama = nilai
      //$angka = $angka + $angka2;
      //$angka *+ $angka2;

      //------------ Math method -------------
      //round rand(min, max) max min
      //echo "Angka hari ini adalah ". min($angka3, $angka, $angka2);

      //----------- string method ------------
      //strlen && str_word_count
      //str_replace(find,replace,string)
      //str_repeat(text, times);  str_shuffle(text)

      $text = "Hai semuanya di sini";
      echo str_repeat( str_replace("Hai", "Halo" ,$text), 10 );

    ?>
  </body>
</html>
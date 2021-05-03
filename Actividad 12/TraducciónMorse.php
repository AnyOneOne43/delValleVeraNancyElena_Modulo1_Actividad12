<?php 
      $texto=$_POST["Desc"];
      $traducir= $_POST["Elegir"];
      if($traducir=="2"){
            echo "<h1>Usted a Elegido de Español a Morse</h1>";
            echo "<h3>Su texto a traducir es:</h3>";
            echo $texto;
            echo "<h3>Su traducción es:</h3>";
            $longitud=strlen($texto);
            for($i=0;$i<$longitud;$i++){
                  $morse=[
                              "A"=>".-",
                              "B"=>"-...",
                              "C"=>"-.-.",
                              "D"=>"-..",
                              "E"=>".",
                              "F"=>"..-.",
                              "G"=>"--.",
                              "H"=>"....",
                              "I"=>"..",
                              "J"=>".---",
                              "K"=>"-.-",
                              "L"=>".-..",
                              "M"=>"--",
                              "N"=>"-.",
                              "O"=>"---",
                              "P"=>".--.",
                              "Q"=>"--.-",
                              "R"=>".-.",
                              "S"=>"...",
                              "T"=>"-",
                              "U"=>"..-",
                              "V"=>"...-",
                              "W"=>".--",
                              "X"=>"-..-",
                              "Y"=>"-.--",
                              "Z"=>"--..",
                              "."=>".-.-.-",
                              "?"=>"..--..",
                              ","=>"-.-.--",
                              "'"=>".-..-.",
                              "!"=>"--..--",
                              "1"=>".----",
                              "2"=>"..---",
                              "3"=>"...--",
                              "4"=>"....-",
                              "5"=>".....",
                              "6"=>"-....",
                              "7"=>"--...",
                              "8"=>"---..",
                              "9"=>"----.",
                              "0"=>"-----",
                              " "=>"/" ];   
                  $T=strtoupper($texto);
                  $cadena=substr($T,-$longitud+$i,1);
                  if (array_key_exists($cadena,$morse)){
                        echo $morse[$cadena];
                        echo " ";
                  }

            }
      }
      else{
            echo "<h1>Usted a Elegido de Morse a Español</h1>";
            echo "<h3>Su texto a traducir es:</h3>";
            echo $texto;
            echo "<h3>Su traducción es:</h3>";
            $arreglo=explode(' ',$texto);
            for($i=0;$i<count($arreglo);$i++){
                  $español=[
                              ".-"=>"A",
                              "-..."=>"B",
                              "-.-."=>"C",
                              "-.."=>"D",
                              "."=>"E",
                              "..-."=>"F",
                              "--."=>"G",
                              "...."=>"H",
                              ".."=>"I",
                              ".---"=>"J",
                              "-.-"=>"K",
                              ".-.."=>"L",
                              "--"=>"M",
                              "-."=>"N",
                              "---"=>"O",
                              ".--."=>"P",
                              "--.-"=>"Q",
                              ".-."=>"R",
                              "..."=>"S",
                              "-"=>"T",
                              "..-"=>"U",
                              "...-"=>"V",
                              ".--"=>"W",
                              "-..-"=>"X",
                              "-.--"=>"Y",
                              "--.."=>"Z",
                              ".-.-.-"=>".",
                              "..--.."=>"?",
                              "-.-.--"=>",",
                              ".-..-."=>"'",
                              "--..--"=>"!",
                              ".----"=>"1",
                              "..---"=>"2",
                              "...--"=>"3",
                              "....-"=>"4",
                              "....."=>"5",
                              "-...."=>"6",
                              "--..."=>"7",
                              "---.."=>"8",
                              "----."=>"9",
                              "-----"=>"0",
                              "/"=>" / "];   
                  
                  $arreglo[$i]=str_replace(' ', '', $arreglo[$i]);
                  
                  if (array_key_exists($arreglo[$i],$español)){
                        echo $español[$arreglo[$i]];
                        echo " ";
                  }                       
            }
      }
      echo "<br>";
      echo "<form action='Inicial.html' method='post'>";
            echo "<a href='Inicial.html'><button type='button'>VOLVER</button></a>";
      echo "</form>";
?> 
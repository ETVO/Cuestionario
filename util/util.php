<?php
    function integerToRoman($integer)
    {
        // Convert the integer into an integer (just to make sure)
        $integer = intval($integer);
        $result = '';
        
        // Create a lookup array that contains all of the Roman numerals.
        $lookup = array('M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1);
        
        foreach($lookup as $roman => $value){
            // Determine the number of matches
            $matches = intval($integer/$value);
            
            // Add the same number of characters to the string
            $result .= str_repeat($roman,$matches);
            
            // Set the integer to be the remainder of the integer and the value
            $integer = $integer % $value;
        }
        
        // The Roman numeral should be built, return it
        return $result;
    }

    function toAlpha($data){
        $alphabet =   array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        $alpha_flip = array_flip($alphabet);
        if($data <= 26){
          return $alphabet[$data];
        }
        elseif($data > 26){
          $dividend = ($data + 1);
          $alpha = '';
          $modulo;
          while ($dividend > 0){
            $modulo = ($dividend - 1) % 26;
            $alpha = $alphabet[$modulo] . $alpha;
            $dividend = floor((($dividend - $modulo) / 26));
          } 
          return $alpha;
        }
    }

    function getSenha($md5 = true){
      $senha = "admMRolimTesis";
      
      if($md5) $senha = md5($senha);
      
      return $senha;
    }

    function getCn() {
      return 7;
    }
?>
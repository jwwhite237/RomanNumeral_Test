<?php
    
    namespace App;
    
    use App\IntegerConversionInterface;
    
    class IntegerConversion impliments IntegerConversionInterface
    {
        public function toRomanNumerals($integer)
        {
            // define useable numerals
            $one = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];
            $ten = ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];
            $hundred = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC",
            "CM"];
            $thousand = ["", "M", "MM", "MMM"];
            // determine number of digits in integer for conversion
            $digits = strlen($integer);
            // initialise array to store separate digits of integer
            $y = [0, 0, 0, 0];
            
            // define for loop parameters
            for ($x = 1; $x <= $digits; $x++)
            {
                // store currently analysed digit in temporary variable z
                $z = $integer % (10 ** $x);
                // store digit z in relevant location in array y
                $y[$x - 1] = $z / (10 ** ($x - 1));
                // remove stored digit from number
                $integer = $integer - $z;
            }
            
            // convert digits stored in array y to roman numerals
            $roman_numeral = ["$thousand[$y[3]]", "$hundred[$y[2]]",
            "$ten[$y[1]]", "$one[$y[0]]"];
            
            // return roman numeral string
            return $roman_numeral;
        }
    }

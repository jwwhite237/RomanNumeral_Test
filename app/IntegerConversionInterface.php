<?php
    
    namespace App;
    
    use server;
    use League\Fractal;
    use App\IntegerConversion;
    
    // generate interface for numeral conversion
    interface IntegerConversionInterface
    {
        public function toRomanNumerals($integer);
    }
    
    // define transformation for integer and numeral data
    class NumeralTransformer extends Fractal\TransformerAbstract
    {
        public function transform(Store $store)
        {
            return [
            'integer' => $store->$integer,
            'numeral' => $store->$numeral
            ];
        }
    }

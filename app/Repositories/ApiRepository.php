<?php

namespace App\Repositories;
use Auth;
use Response;

class ApiRepository extends BaseRepository {

    public static function verifyInAppPurchase($receipt_hash)
    {
        if ($receipt_hash != null || $receipt_hash != '') {
            $last_digit = $this->getLastChracter($receipt_hash);
            if($this->getEvenOdd($last_digit)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getLastChracter($string_hash)
    {
        $last = substr(trim($string_hash), – 1);
        return $last;
    }

    public function getEvenOdd($number)
    {
        switch ($number%2)
         {
         case 0:
            $result = true;
         break;
         default:
            $result = false;
         }
         return $result;
    }

}

<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use libphonenumber\PhoneNumberUtil;

class ValidPhoneNumber implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        $util = PhoneNumberUtil::getInstance();
        try {
          foreach ($util->getSupportedRegions() as $region ) {
            $phone_num_is_valid = $util->parse($value,$region);
            if ($util->isValidNumber($phone_num_is_valid)) {
              return true;
            }
          }

          return fasle;
        } catch (\libphonenumber\NumberFormatException $e) {
          return false;
        }

    }

    public function message()
    {
      return 'The :attribute is not a valid phone number.';
    }
}

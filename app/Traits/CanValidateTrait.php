<?php

namespace Atlas\Traits;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

trait CanValidateTrait
{

    /**
     * Update an attribute label
     * Useful when the same field can have slightly different descriptions on different forms
     * @param string $attribute
     * @param string $label
     */
    public function setAttributeLabel($attribute, $label)
    {
        $this->attributeLabels[$attribute] = $label;
    }

    /**
     * @param $attribute
     * @return string
     */
    public function getAttributeLabel($attribute)
    {
        // If the field is not set or empty, because we haven't defined a label
        if (!isset($this->attributeLabels[$attribute]) || empty($this->attributeLabels[$attribute])) {

            // We will take the field name and mutate it to a human readable form and use that.
            $this->attributeLabels[$attribute] = ucwords(str_replace('_', ' ', $attribute));

        }

        // If we have a label set, return it.
        if(array_key_exists($attribute, $this->attributeLabels)) {
            return $this->attributeLabels[$attribute];
        }

        // Otherwise just return the attribute name.
        return $attribute;
    }

    /**
     * @param $attribute
     * @return bool
     */
    public function getAttributeRequired($attribute)
    {
        if (isset($this->rules[$attribute])) {
            if (stristr($this->rules[$attribute], 'required')!==false) {
                return true;
            }
        }
        return false;
    }



    /**
     * Returns a validator for all the changes to the model so far
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function getValidator()
    {
        $validator = Validator::make(
            $this->attributes,
            $this->rules,
            $this->messages
        );

        return $validator;
    }
}
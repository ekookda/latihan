<?php

class Validation
{
    private $_passed = false;
    private $_error = array();

    /**
     * @param array $items
     */
    public function check($items = array())
    {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {
                switch ($rule) {
                    case 'required':
                        if (trim(Input::get($item)) == false && $rule_value = true) {
                            $this->addError("$item wajib diisi");
                        }
                        break;
                    default:
                        break;
                } // endswitch
            } // endforeach
        } // endforeach

        if (empty($this->_errors)) {
            $thjs->_passed = true;
        }

        return $this;

    }

    private function addError($error)
    {
        $this->_error[] = $error;
    }

    public function errors()
    {
        return $this->errors();
    }

    public function passed()
    {
        return $this->_passed;
    }

    public function ()
    {
        
    }
    
}
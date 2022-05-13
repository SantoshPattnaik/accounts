<?php

/**
 * The DomHandler class generates the entire HTML script of this application
 */
class DomHandler extends DOMDocument
{
    private $para = array();
    private $div = array();
    private $a = array();
    private $input = array();
    private $span = array();
    private $form = array();
    private $b = array();
    private $i = array();
    private $table = array();
    private $thead = array();
    private $tbody = array();
    private $tfoot = array();
    private $thCount;

    function create_br_tag()
    {
        $br = DOMDocument::createElement('br');
        return substr(DOMDocument::saveHTML($br), 0, 4);
    }
    function create_a_tag($value = null, $attribute = null, $attributeValue = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->a, DOMDocument::createElement('a', $value));
        } else {
            array_push($this->a, DOMDocument::createElement('a'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->a)->setAttribute($attribute, $attributeValue);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->a));
            echo '<br>';
        } else {
            return end($this->a);
        }
    }
    function create_p_tag($value = null, $attribute = null, $attributeValue = null, $child_tag = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->para, DOMDocument::createElement('p', $value));
        } else {
            array_push($this->para, DOMDocument::createElement('p'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->para)->setAttribute($attribute, $attributeValue);
        }
        if (isset($child_tag)) {
            end($this->para)->appendChild($child_tag);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->para));
            echo '<br>';
        } else {
            return end($this->para);
        }
    }
    function create_div_tag($value = null, $attribute = null, $attributeValue = null, $child_tag = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->div, DOMDocument::createElement('div', $value));
        } else {
            array_push($this->div, DOMDocument::createElement('div'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->div)->setAttribute($attribute, $attributeValue);
        }
        if (isset($child_tag)) {
            end($this->div)->appendChild($child_tag);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->div));
            // echo '<br>';
        } else {
            return end($this->div);
        }
    }
    function create_input_tag($value = null, $attribute = null, $attributeValue = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->input, DOMDocument::createElement('input', $value));
        } else {
            array_push($this->input, DOMDocument::createElement('input'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->input)->setAttribute($attribute, $attributeValue);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->input));
            echo '<br>';
        } else {
            return end($this->input);
        }
    }
    function create_span_tag($value = null, $attribute = null, $attributeValue = null, $child_tag = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->span, DOMDocument::createElement('span', $value));
        } else {
            array_push($this->span, DOMDocument::createElement('span'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->span)->setAttribute($attribute, $attributeValue);
        }
        if (isset($child_tag)) {
            end($this->span)->appendChild($child_tag);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->span));
            echo '<br>';
        } else {
            return end($this->span);
        }
    }
    function create_form_tag($value = null, $attribute = null, $attributeValue = null, $child_tag = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->form, DOMDocument::createElement('form', $value));
        } else {
            array_push($this->form, DOMDocument::createElement('form'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->form)->setAttribute($attribute, $attributeValue);
        }
        if (isset($child_tag)) {
            end($this->form)->appendChild($child_tag);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->form));
            echo '<br>';
        } else {
            return end($this->form);
        }
    }
    function create_b_tag($value = null, $attribute = null, $attributeValue = null, $domChild = 0)
    {
        if ($value != null) {
            array_push($this->b, DOMDocument::createElement('b', $value));
        } else {
            array_push($this->b, DOMDocument::createElement('b'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->b)->setAttribute($attribute, $attributeValue);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->b));
            echo '<br>';
        } else {
            return end($this->b);
        }
    }
    function create_i_tag($value = null, $attribute = null, $attributeValue = null, $domChild = null)
    {
        if ($value != null) {
            array_push($this->i, DOMDocument::createElement('i', $value));
        } else {
            array_push($this->i, DOMDocument::createElement('i'));
        }

        if ($attribute != null && $attributeValue != null) {
            end($this->i)->setAttribute($attribute, $attributeValue);
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->i));
            echo '<br>';
        } else {
            return end($this->i);
        }
    }
    function create_table($table_attribute = null, $table_attributeValue = null, $thead = null, $thead_attribute = null, $thead_attributeValue = null, $tbody = null, $tbody_attribute = null, $tbody_attributeValue = null, $th = null, $tr = null, $td = null, $domChild = null)
    {
        if ($thead != null || $tbody != null) {
            array_push($this->table, DOMDocument::createElement('table'));
            if ($table_attribute != null && $table_attributeValue != null) {
                end($this->table)->setAttribute($table_attribute, $table_attributeValue);
            }
            if ($thead) {
                array_push($this->thead, DOMDocument::createElement('thead'));
                if ($thead_attribute) {
                    end($this->thead)->setAttribute($thead_attribute, $thead_attributeValue);
                }
                array_push($this->tr_head, DOMDocument::createElement('tr'));
                array_push($this->th, DOMDocument::createElement('th', $th));
            }
            if ($tbody) {
                array_push($this->tbody, DOMDocument::createElement('tbody'));
                if ($tbody_attribute) {
                    end($this->tbody)->setAttribute($tbody_attribute, $tbody_attributeValue);
                }
                array_push($this->tr_body, DOMDocument::createElement('tr'));
                if ($td) {
                    array_push($this->td, DOMDocument::createElement('td', $td));
                }
            }
            for ($i = 0; $i < count($this->tr_head); $i++) {
                for ($j = count($this->th); $j > 0; $j--) {
                    $this->tr_head[$i]->appendChild($this->th[$j]);
                }
            }
            for ($i = 0; $i < count($this->tr_body); $i++) {
                for ($j = count($this->td); $j > 0; $j--) {
                    $this->tr_body[$i]->appendChild($this->td[$j]);
                }
            }
            for ($i = 0; $i < count($this->thead); $i++) {
                for ($j = count($this->tr_head); $j > 0; $j--) {
                    $this->thead[$i]->appendChild($this->tr_head[$j]);
                }
            }
            for ($i = 0; $i < count($this->table); $i++) {
                for ($j = count($this->table); $j > 0; $j++) {
                    $this->table[$i]->appendChild($this->thead[$j]);
                }
                for ($j = count($this->table); $j > 0; $j--) {
                    $this->table[$i]->appendChild($this->tbody[$j]);
                }
            }
        }
        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->table));
            echo '<br>';
        } else {
            return end($this->table);
        }
    }

    function set_thead($attribute = null, $attributeValue = null, $thValue = array())
    {
        $this->thCount = count($thValue);
        $tr = '';
        $th = array();
        array_push($this->thead, DOMDocument::createElement('thead'));
        if (isset($attribute) && isset($attributeValue)) {
            end($this->thead)->setAttribute($attribute, $attributeValue);
        }
        if (isset($thValue)) {
            $tr = DOMDocument::createElement('tr');
            for ($i = 0; $i < count($thValue); $i++) {
                array_push($th, DOMDocument::createElement('th', $thValue[$i]));
                $tr->appendChild(end($th));
            }
            end($this->thead)->appendChild($tr);
        }
        return end($this->thead);
    }
    function set_tbody($attribute = null, $attributeValue = null, ?int $trCount, $tdValue = array())
    {
        $tr = array();
        $td = array();
        array_push($this->tbody, DOMDocument::createElement('tbody'));
        if (isset($attribute) && isset($attributeValue)) {
            end($this->tbody)->setAttribute($attribute, $attributeValue);
        }
        if (isset($tdValue)) {
            // $tdValue_count = count($tdValue);
            // $new_arr = array();
            // for ($i = 0; $i < count($tdValue); $i++) {
            //     for ($j = 0; $j < count($tdValue[$i]); $j++) {
            //         array_push($new_arr[$i], $tdValue[$i][$j]);
            //     }
            // }
            for ($i = 0; $i < $trCount; $i++) {
                // for ($j = 0; $j < $this->thCount; $j++) {
                for ($k = 0; $k < count($tdValue); $k++) {
                    array_push($td, DOMDocument::createElement('td', $tdValue[$k][$i]));
                }
                // }
            }
            for ($i = 0; $i < $trCount; $i++) {
                array_push($tr, DOMDocument::createElement('tr'));
            }
            $j = 0;
            for ($i = 1; $i <= count($tr); $i++) {
                for (; $j < count($td); $j++) {
                    // for ($k = 0; $k < $this->thCount; $k++) {
                    $tr[$i - 1]->appendChild($td[$j]);
                    if ($j == $this->thCount * $i) {
                        break;
                    }
                    // }
                }
            }
            // for ($i = 0; $i < count($tr); $i++) {
            //     end($this->tbody)->appendChild($tr[$i]);
            // }
            for ($i = count($tr); $i > 0; $i--) {
                end($this->tbody)->appendChild($tr[$i - 1]);
            }
        }
        return end($this->tbody);
    }

    function create_table1($table_attribute = null, $table_attributeValue = null, $thead_attribute = null, $thead_attributeValue = null, $thValue = array(), $tbody_attribute = null, $tbody_attributeValue = null, ?int $trCount = 1, $tdValue = array(), $domChild = null)
    {
        array_push($this->table, DOMDocument::createElement('table'));
        if (isset($table_attribute) && isset($table_attributeValue)) {
            end($this->table)->setAttribute($table_attribute, $table_attributeValue);
        }
        $thead = $this->set_thead($thead_attribute, $thead_attributeValue, $thValue);
        $tbody = $this->set_tbody($tbody_attribute, $tbody_attributeValue, $trCount, $tdValue);
        end($this->table)->appendChild($thead);
        end($this->table)->appendChild($tbody);

        if ($domChild) {
            echo DOMDocument::saveHTML(end($this->table));
            echo '<br>';
        } else {
            return end($this->table);
        }
    }
}
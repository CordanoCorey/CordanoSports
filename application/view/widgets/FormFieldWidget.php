<?php
namespace application\view\widgets;
use application\view\protocol\Renderable as Renderable;
use application\view\widgets\protocol\Renderable as Editable;

/**
 * Class to display fields within a form.
 *
 * @package widgets
 * @author coreygelbaugh
 * @version 1.0
 */
class FormFieldWidget extends CDView implements Renderable,Editable{
    
    private $fieldType;
    private $fieldLabel;
    /*
     * @param application\library\data\EventHandler
     */
    private $onChangeAction;
    /*
     * @param application\library\data\EventHandler
     */
    private $onBlurAction;
    
    private $html;
    
    public function __construct($displayText){
        $htmlString = "<p> $this->displayText </p>";
        $this->setHtml($videoUrl);
    }
    
    public function setHtml($htmlString){
        $this->html[] = $htmlString;
    }
    
    /** 
 * @name: set_attribute 
 * Create attributes for DOM element from array. The html5 data-attributes and native attributes are hadnled separately 
 * @param $attributes 
 * @param null $data_attributes 
 * @return string 
 */ 
    function set_attributes($attributes, $data_attributes = null){ 
        $html = ' '; 
        foreach($attributes as $k => $v){ 
            if(!is_array($v)){ 
                $html.=$k.'="'.$v.'" '; 
            } 
        } 
        if($data_attributes && $data_attributes !== null && is_array($data_attributes)){ 
            foreach($data_attributes as $k => $v){ 
                if(!is_array($v)){ 
                    $html.='data-'.$k.'="'.$v.'" '; 
                } 
            } 
        } 
        return $html; 
    }
    
    /** 
     * @name build_selector 
     * Creates a html select element with options, optgroups. It marks the selected element or if 
     * selected element is not presented, the first element. 
     * @param array $options Source for options and optgroups 
     * Format: 
     * <b>options:</b> 
     *  - value => option 
     * <b>groups:</b> 
     *  - group => array( 'groupname', array( //options ) 
     * @param null $attributes Source for attributes 
     * @param null $selected Value of the selected option 
     * @throws Exception 
     */ 
    function build_selector($options = array(),$attributes = null,$selected = null){ 

        $options = (!empty($options) && is_array($options)) ? $options : false; 
        $selected = ($selected !== null && !empty($selected) && !is_array($selected)) ? $selected : false; 
        $attributes = (!empty($attributes) && is_array($attributes)) ? $attributes : false; 
        $data_attributes = (array_key_exists('data-',$attributes) && (!empty($attributes['data-']))) ? $attributes['data-'] : false; 

        $html_wrapper = '<select'; 
        $html_inside = ''; 
        if(!$options){ throw new Exception('options argument must be an array!'); exit(1);} 

        function create_options($options,$selected, $i = null){ 
            $i = ($i !== null) ? $i : 0; 
            foreach($options as $k => $v){ 
                $hasChild = ( $k !== null && strtolower($k) == 'group' && is_array($v)) ? true : false; 
                if(!$hasChild){ 
                    if($v && !empty($v)) 
                        echo '<option value="'.$k.'"'.(($selected && $selected == $k)||(!$selected && $i == 0)).'>'.$v.'</option>'; 
                    else 
                        echo '<option value="'.$k.'"'.(($selected && $selected == $k)||(!$selected && $i == 0)).'>'.$k.'</option>'; 
                    $i++; 
                }else{ 
                    echo '<optgroup label="'.$v[0].'">'; 
                    call_user_func('create_options',$v[1], $i); 
                    echo '</optgroup>'; 
                } 
            } 
        }; 

        try{ 
            var_dump($data_attributes); 
            $attributes_html = set_attributes($attributes,$data_attributes); 
            echo '<select'.$attributes_html.'>'; 
            create_options($options,$selected); 
            echo '</select>'; 
        } catch (Exception $e){ 
            echo "build_selector error: ".$e->getMessage(); 
            die(1); 
        } 



    }
}

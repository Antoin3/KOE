<?php

App::uses('Helper', 'View/Helper');

class XmlHelper extends AppHelper {

public $helpers = array('Form');

/**
 * @param DOMDocument $dom
 * @param String $inputval
 * @param Integer $hval
 */

	public function inputXML($dom,$inputval = null, $hval = 1) {
		$hval += 1;
	    foreach ($dom->childNodes as $node)
	    {
	    	$nodeattributes = '';
	    	if ($node->hasAttributes()) {
	    		foreach ($node->attributes as $attr) {
				    $name = $attr->nodeName;
				    $value = $attr->nodeValue;
				    $nodeattributes .= $name.'='.$value;
				 }
			}
	        if($node->hasChildNodes()) {
	        	echo '<a href="javascript:;" data-toggle="collapse" data-target="#'.$node->nodeName.'"><p><button type="button" class="btn btn-xs btn-default"><h'.$hval.'>'.$node->nodeName.' '.$nodeattributes.'</h'.$hval.'></button></p>';
	        	echo '<ul id="'.$node->nodeName.'" class="collapse"><li>';
	            $this->inputXML($node,$inputval.$node->nodeName.'.',$hval);
	            echo '</li></ul>';
	        }
	        else {
		        substr($inputval,0,-1);
	        	if ($node->nodeValue != '') {
	        		echo $this->Form->input($inputval, array('class' => 'form-control','value' => $node->nodeValue));
	        	}
	       	}
	    }
	}
}


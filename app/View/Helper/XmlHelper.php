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
		$nbsibling = 1;
	    foreach ($dom->childNodes as $node)
	    {
	        if($node->hasChildNodes()) {
	        	$nodeattributes = '';
	        	$datatargetattr = '';
		    	if ($node->hasAttributes()) {
		    		$nodeattributes = '(';
		    		foreach ($node->attributes as $attr) {
					    $name = $attr->nodeName;
					    $value = $attr->nodeValue;
					    $nodeattributes .= $name.'='.$value.' ';
					    $datatargetattr .= $name.$value;
					 }
					 $nodeattributes .= ')';
				}
	        	$datatarget = is_null($inputval) ? $node->nodeName : str_replace('.','-',$inputval).$node->nodeName.'-'.str_replace('.','-',$datatargetattr);
	        	echo '<a href="javascript:;" data-toggle="collapse" data-target="#'.$datatarget.$nbsibling.'"><p><button type="button" class="btn btn-xxs btn-default"><h'.$hval.'>'.$node->nodeName.' '.$nodeattributes.'<i class="fa fa-fw fa-caret-down"></i></h'.$hval.'></button></p>';
	        	echo '<ul id="'.$datatarget.$nbsibling.'" class="collapse">';
	            $this->inputXML($node,$inputval.$node->nodeName.'.',$hval);
	            echo '</ul>';
	        }
	        else {
		        substr($inputval,0,-1);
	        	if ($node->nodeValue != '') {
	        		echo '</a><div class="form-group">'.$this->Form->input($inputval, array('class' => 'form-control','value' => $node->nodeValue)).'</div>';
	        	}
	       	}
	       	$nbsibling ++;
	    }
	}
}


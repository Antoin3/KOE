<?php
/**
 * Extends the DOMDocument to implement personal (utility) methods.
 *
 * @author Toni Van de Voorde
 */
class XmlDOM extends DomDocument {

	/**
	 * Constructs elements and texts from an array or string.
	 * The array can contain an element's name in the index part
	 * and an element's text in the value part.
	 * 
	 * It can also creates an xml with the same element tagName on the same 
	 * level.
	 * 
	 * ex:
	 * <nodes>
	 *   <node>text</node>
	 *   <node>
	 *     <field>hello</field>
	 *     <field>world</field>
	 *   </node>
	 * </nodes>
	 * 
	 * Array should then look like:
	 * 
	 * Array (
	 *   "nodes" => Array (
	 *     "node" => Array (
	 *       0 => "text"
	 *       1 => Array (
	 *         "field" => Array (
	 *           0 => "hello"
	 *           1 => "world"
	 *         )
	 *       )
	 *     )
	 *   )
	 * )
	 *
	 * @param mixed $data An array or string.
	 * 
	 * @param DOMElement[optional] $dom Then element
	 * from where the array will be construct to.
	 * 
	 */

		public function chargeXML($dom,$data) {
			//Dans le cas de la récursivité, soit on prend l'objet appelant ($this) soit l'élément suivant de l'array
			$dom = is_null($dom) ? $this : $dom;
	 
	        if (is_array($data)) {
	            foreach( $data as $index => $dataElement ) {
	 
	                if ( is_int($index) ) {
	                    if ( $index == 0 ) {
	                        $node = $dom;
	                    } else {
	                        $node = $this->createElement($dom->tagName);
	                        $dom->parentNode->appendChild($node);
	                    }
	                } 
	                 
	                else {
	                    $node = $this->createElement($index);
	                    $dom->appendChild($node);
	                }
	                 
	                $this->changeXML($dataElement, $node);
	                 
	            }
	        } else {
	            $dom->appendChild($this->createTextNode($data));
	        }
		}
		}

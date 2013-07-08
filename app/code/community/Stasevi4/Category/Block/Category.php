<?php
class Stasevi4_Category_Block_Category extends Mage_Core_Block_Template
{
	public function getChildrenHtml($categoryId){
		$html = '';

		$childrens = Mage::getModel('catalog/category')->load($categoryId)->getChildrenCategories();			

		if(count($childrens)>0){
			$html .= '<ul>';
				$i=0;
				foreach($childrens  as $child){
					if($i>4){continue;}
					$subCategory = Mage::getModel('catalog/category')->load($child->getId());
					$html .= '<li>';
					$html .= '<a href="'. $subCategory->getUrlPath() .'">' . $subCategory->getName() . '</a>';
					$html .= '</li>';
					$i++;				
					}				
				$html .= '</ul>';
		}
		return $html;
	}

}

?>
<?php
namespace GoetasWebservices\XML\XSDReader\Schema\Type;

use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Extension;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Restriction;
use GoetasWebservices\XML\XSDReader\Schema\Attribute\AttributeItem;
use GoetasWebservices\XML\XSDReader\Schema\Attribute\AttributeContainer;

abstract class BaseComplexType extends Type implements AttributeContainer
{
    /**
    * @var AttributeItem[]
    */
    protected $attributes = array();

    public function addAttribute(AttributeItem $attribute)
    {
        $this->attributes[] = $attribute;
    }

    /**
    * @return AttributeItem[]
    */
    public function getAttributes()
    {
        return $this->attributes;
    }
}

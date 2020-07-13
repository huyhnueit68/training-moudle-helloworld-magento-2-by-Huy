<?php

namespace Lof\HelloWorld\Block;
use Magento\Framework\View\Element\Template;
use Lof\HelloWorld\Helper\Data;

class Config extends Template
{
    /**
     * @var string $_template
     */
    protected $helpData;
    protected $_template = "templates/index.phtml";

    public function __construct(Template\Context $context, array $data = [],Data $helpData)
    {
        $this->helpData = $helpData;
        parent::__construct($context, $data);
    }

    public function getDatatoWeb(){
        return $this->helpData->getGeneralConfig('display_text');
    }

    public function checkgetDatatoWeb(){
        return $this->helpData->getGeneralConfig('enable');
    }
}
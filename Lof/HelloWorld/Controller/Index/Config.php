<?php
namespace Lof\HelloWorld\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
        $this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
        // TODO: Implement execute() method.
        return $this->_pageFactory->create();
    }
}
<?php
namespace CmsModule\Cms\Block;

use \Magento\Framework\View\Element\Template;

class Sample extends Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    public function getArticles()
    {
        return 'Cms block content ';
    }
}
?>

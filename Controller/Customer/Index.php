<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Controller\Customer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Customer\Model\Session;
use Magento\Framework\Controller\ResultFactory;


/**
 *
 */
class Index implements HttpGetActionInterface
{
    /**
     * @param PageFactory $pageFactory
     * @param Session $customerSession
     * @param EventManager $eventManager
     * @param RequestInterface $request
     * @param ResultFactory $resultFactory
     */
    public function __construct(private readonly PageFactory      $pageFactory,
                                private readonly Session          $customerSession,
                                private readonly EventManager     $eventManager,
                                private readonly RequestInterface $request,
                                private readonly resultFactory    $resultFactory

    )
    {
    }

    /**
     * @return ResultInterface|Page
     */
    public function execute(): Page|ResultInterface
    {
        $this->eventManager->dispatch('lotsofpixels_pricelist_page_view', ['
        request' => $this->request,]);

        if ($this->customerSession->isLoggedIn()) {
            return $this->pageFactory->create();
        } else {
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setPath('customer/account');
            return $resultRedirect;
        }
    }
}
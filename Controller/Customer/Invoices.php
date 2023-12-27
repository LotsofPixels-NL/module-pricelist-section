<?php

declare(strict_types=1);

namespace Lotsofpixels\PricelistSection\Controller\Customer;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Customer\Model\Session;
use Magento\Framework\Controller\Result\RedirectFactory;

/**
 *
 */
class Invoices implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var
     */

    /**
     * @var ResultFactory
     */
    protected $resultRedirect;
    /**
     * @var Session
     */
    protected $customerSession;
    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     */


    protected $resultRedirectFactory;

    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     * @param Session $customerSession
     * @param ResultFactory $result
     * @param RedirectFactory $resultRedirectFactory
     */
    public function __construct(PageFactory      $pageFactory,
                                Session          $customerSession,
                                ResultFactory    $result,
                                RedirectFactory  $resultRedirectFactory
    )
    {
        $this->pageFactory = $pageFactory;
        $this->resultRedirect = $result;
        $this->customerSession = $customerSession;
        $this->resultRedirectFactory = $resultRedirectFactory;

    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
if ($this->customerSession->isLoggedIn()) {
        return $this->pageFactory->create();
        } else
        {return $this->resultRedirectFactory->create()->setPath('customer/account/login/', ['_current' => true]);}
    }
}

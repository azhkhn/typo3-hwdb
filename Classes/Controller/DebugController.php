<?php

namespace Homeinfo\hwdb\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

use TYPO3\CMS\Core\Database\ConnectionPool;
use Homeinfo\hwdb\Domain\Repository\DeploymentRepository;

class DebugController extends ActionController
{
    public function indexAction()
    {
        
        $repository = GeneralUtility::makeInstance(ObjectManager::class)
            ->get(DeploymentRepository::class);
        $deployments = $repository->list();
        //DebuggerUtility::var_dump($deployments, "Deployments: ");
        $this->view->assign('deployments', $deployments);
    }
}

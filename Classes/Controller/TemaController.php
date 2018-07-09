<?php
namespace UNAL\GestionestadisticaUnal\Controller;

/***
 *
 * This file is part of the "Gestión Estadística UN" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Alex Ortiz <eaortiz@unal.edu.co>, UNAL
 *
 ***/

/**
 * TemaController
 */
class TemaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * temaRepository
     *
     * @var \UNAL\GestionestadisticaUnal\Domain\Repository\TemaRepository
     * @inject
     */
    protected $temaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $temas = $this->temaRepository->findAll();
        $this->view->assign('temas', $temas);
    }

    /**
     * action show
     *
     * @param \UNAL\GestionestadisticaUnal\Domain\Model\Tema $tema
     * @return void
     */
    public function showAction(\UNAL\GestionestadisticaUnal\Domain\Model\Tema $tema)
    {
        $this->view->assign('tema', $tema);
    }
}

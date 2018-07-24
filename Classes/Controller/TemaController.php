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
        $temas = $this->temaRepository->findAll();
        $this->view->assignMultiple([
            'tema' => $tema, 
            'temas' => $temas 
        ]);
    }
    /**
     * action preview
     *
     * @param \UNAL\GestionestadisticaUnal\Domain\Model\Tema $tema
     * @return void
     */
    public function previewAction()
    {
        $uri_link = $this->settings['link'];
        $titulo_link = $this->settings['titulo_link'];
        $texto_link = $this->settings['texto_link'];
        $uids_temas_a_mostrar = explode(',', $this->settings['temas_a_mostrar']);

        $temas_a_mostrar = [];
        foreach ($uids_temas_a_mostrar as $uid) {
            $temas_a_mostrar[] = $this->temaRepository->findByUid($uid);
        }  

        $this->view->assignMultiple([
            'uri_link' => $uri_link, 
            'titulo_link' => $titulo_link, 
            'texto_link' => $texto_link, 
            'temas' => $temas_a_mostrar
        ]);

    }
}

<?php
namespace UNAL\GestionestadisticaUnal\Domain\Model;

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
 * Tema
 */
class Tema extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     *
     * @var string
     */
    protected $nombre = '';

    /**
     * nombreDisplay
     *
     * @var string
     */
    protected $nombreDisplay = '';

    /**
     * descripcion
     *
     * @var string
     */
    protected $descripcion = '';

    /**
     * contenido
     *
     * @var string
     */
    protected $contenido = '';

    /**
     * recursos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\GestionestadisticaUnal\Domain\Model\Recurso>
     */
    protected $recursos = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->recursos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the nombre
     *
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the nombre
     *
     * @param string $nombre
     * @return void
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Returns the nombreDisplay
     *
     * @return string $nombreDisplay
     */
    public function getNombreDisplay()
    {
        return $this->nombreDisplay;
    }

    /**
     * Sets the nombreDisplay
     *
     * @param string $nombreDisplay
     * @return void
     */
    public function setNombreDisplay($nombreDisplay)
    {
        $this->nombreDisplay = $nombreDisplay;
    }

    /**
     * Returns the descripcion
     *
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Sets the descripcion
     *
     * @param string $descripcion
     * @return void
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Returns the contenido
     *
     * @return string $contenido
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Sets the contenido
     *
     * @param string $contenido
     * @return void
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * Adds a Recurso
     *
     * @param \UNAL\GestionestadisticaUnal\Domain\Model\Recurso $recurso
     * @return void
     */
    public function addRecurso(\UNAL\GestionestadisticaUnal\Domain\Model\Recurso $recurso)
    {
        $this->recursos->attach($recurso);
    }

    /**
     * Removes a Recurso
     *
     * @param \UNAL\GestionestadisticaUnal\Domain\Model\Recurso $recursoToRemove The Recurso to be removed
     * @return void
     */
    public function removeRecurso(\UNAL\GestionestadisticaUnal\Domain\Model\Recurso $recursoToRemove)
    {
        $this->recursos->detach($recursoToRemove);
    }

    /**
     * Returns the recursos
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\GestionestadisticaUnal\Domain\Model\Recurso> $recursos
     */
    public function getRecursos()
    {
        return $this->recursos;
    }

    /**
     * Sets the recursos
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\GestionestadisticaUnal\Domain\Model\Recurso> $recursos
     * @return void
     */
    public function setRecursos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $recursos)
    {
        $this->recursos = $recursos;
    }
}

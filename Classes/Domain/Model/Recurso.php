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
 * Recurso
 */
class Recurso extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * link
     *
     * @var string
     */
    protected $link = '';

    /**
     * archivo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $archivo = null;

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
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Returns the archivo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $archivo
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Sets the archivo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $archivo
     * @return void
     */
    public function setArchivo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $archivo)
    {
        $this->archivo = $archivo;
    }
}

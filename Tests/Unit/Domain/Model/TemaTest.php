<?php
namespace UNAL\GestionestadisticaUnal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alex Ortiz <eaortiz@unal.edu.co>
 */
class TemaTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\GestionestadisticaUnal\Domain\Model\Tema
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\GestionestadisticaUnal\Domain\Model\Tema();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNombreReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombre()
        );
    }

    /**
     * @test
     */
    public function setNombreForStringSetsNombre()
    {
        $this->subject->setNombre('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombre',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNombreDisplayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombreDisplay()
        );
    }

    /**
     * @test
     */
    public function setNombreDisplayForStringSetsNombreDisplay()
    {
        $this->subject->setNombreDisplay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombreDisplay',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescripcionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescripcion()
        );
    }

    /**
     * @test
     */
    public function setDescripcionForStringSetsDescripcion()
    {
        $this->subject->setDescripcion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'descripcion',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContenidoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContenido()
        );
    }

    /**
     * @test
     */
    public function setContenidoForStringSetsContenido()
    {
        $this->subject->setContenido('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contenido',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRecursosReturnsInitialValueForRecurso()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRecursos()
        );
    }

    /**
     * @test
     */
    public function setRecursosForObjectStorageContainingRecursoSetsRecursos()
    {
        $recurso = new \UNAL\GestionestadisticaUnal\Domain\Model\Recurso();
        $objectStorageHoldingExactlyOneRecursos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRecursos->attach($recurso);
        $this->subject->setRecursos($objectStorageHoldingExactlyOneRecursos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRecursos,
            'recursos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addRecursoToObjectStorageHoldingRecursos()
    {
        $recurso = new \UNAL\GestionestadisticaUnal\Domain\Model\Recurso();
        $recursosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $recursosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($recurso));
        $this->inject($this->subject, 'recursos', $recursosObjectStorageMock);

        $this->subject->addRecurso($recurso);
    }

    /**
     * @test
     */
    public function removeRecursoFromObjectStorageHoldingRecursos()
    {
        $recurso = new \UNAL\GestionestadisticaUnal\Domain\Model\Recurso();
        $recursosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $recursosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($recurso));
        $this->inject($this->subject, 'recursos', $recursosObjectStorageMock);

        $this->subject->removeRecurso($recurso);
    }
}

<?php
namespace UNAL\GestionestadisticaUnal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alex Ortiz <eaortiz@unal.edu.co>
 */
class TemaControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\GestionestadisticaUnal\Controller\TemaController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\GestionestadisticaUnal\Controller\TemaController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllTemasFromRepositoryAndAssignsThemToView()
    {

        $allTemas = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $temaRepository = $this->getMockBuilder(\UNAL\GestionestadisticaUnal\Domain\Repository\TemaRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $temaRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTemas));
        $this->inject($this->subject, 'temaRepository', $temaRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('temas', $allTemas);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTemaToView()
    {
        $tema = new \UNAL\GestionestadisticaUnal\Domain\Model\Tema();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('tema', $tema);

        $this->subject->showAction($tema);
    }
}

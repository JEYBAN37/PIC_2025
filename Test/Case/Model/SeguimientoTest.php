<?php
App::uses('Seguimiento', 'Model');

/**
 * Seguimiento Test Case
 *
 */
class SeguimientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seguimiento',
		'app.producto',
		'app.responsable',
		'app.referente',
		'app.acta',
		'app.ubicacion',
		'app.acta_view_test',
		'app.actividad',
		'app.canalizacion',
		'app.aseguradora',
		'app.persona',
		'app.estudio',
		'app.poblacion',
		'app.organizacion',
		'app.proyecto',
		'app.entidad',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.sociedad',
		'app.sector',
		'app.personas_actividad',
		'app.institucion',
		'app.participantesacta',
		'app.participantesevento',
		'app.infoevento',
		'app.participantesproceso',
		'app.procesoregistro',
		'app.proactividad',
		'app.plsesion',
		'app.plsmomento',
		'app.participantesprocesos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seguimiento = ClassRegistry::init('Seguimiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seguimiento);

		parent::tearDown();
	}

}

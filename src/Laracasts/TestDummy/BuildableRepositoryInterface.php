<?php namespace Laracasts\TestDummy;

interface BuildableRepositoryInterface {

	/**
	 * Build the entity with attributes.
	 *
	 * @param string $type
	 * @param array  $attributes
	 * @throws TestDummyException
	 * @return mixed
	 */
	public function build($type, array $attributes);

	/**
	 * Persist the entity.
	 *
	 * @param $entity
	 * @return mixed
	 */
	public function save($entity);

	/**
	 * Get all attributes for the model.
	 *
	 * @param  object $entity
	 * @return array
	 */
	public function getAttributes($entity);

}

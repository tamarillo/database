<?php namespace Tamarillo\Database\Query;

class Builder {

	/**
	 * The connection class.
	 *
	 * @var \Tamarillo\Database\Connection $DbConnection
	 */
	protected $DbConnection;
	
	/**
	 * Where constraints.
	 *
	 * @var array $whereCons
	 */
	public $whereCons;

	/**
	 * Creates a new instance from self.
	 *
	 * @return \Tamarillo\Database\Query\Builder $builder
	 */
	public function createQuery()
	{
		return new static($this->connection);
	}
	
	/**
	*
	*
	* @return \Tamarillo\Database\Query\Builder $this
	*/
	public function where($column, $operator = null, $value = null)
	{
	  if (func_num_args() == 2)
		{
			list($value, $operator) = [$operator, '='];
		}
	  $this->whereCons[] = compact($column, $operator, $value);
	}

}

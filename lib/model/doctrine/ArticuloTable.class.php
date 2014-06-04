<?php

/**
 * ArticuloTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ArticuloTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ArticuloTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Articulo');
    }//end getInstance

    public function getActivosBase(){

	return $this->createQuery('Articulo')->where('Articulo.esta_activo=True');
}
public function getActivos(){

	return $this->getActivosBase()->execute();
}

public function getFiltradosPorCategoria($categoria){

	return $this->getActivosBase()
	->andWhere('Articulo.categoria_id='.$categoria->id)
	->execute();
}//filtrados por categoria
  
}
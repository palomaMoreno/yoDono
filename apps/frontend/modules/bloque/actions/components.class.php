<?php

class bloqueComponents extends sfComponents 
{
    public function executeBloqueHeader()
    {
        $this->categorias=Doctrine::getTable('Categoria')->getActivas();
    }
    
    public function executeBloqueFooter()
    {
         
    }         


 
}

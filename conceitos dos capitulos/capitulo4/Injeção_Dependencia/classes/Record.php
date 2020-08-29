<?php
/* essa é uma classe conceitual, as funcoes de banco de dados
 não retornam valor ou geram ações, somente textos para ilustrar.*/

 class Record
 {
   protected $data;

   public function __set($prop, $value)
   {
     /* transforma $data em um array onde o param $prop se torna a chave
        e $value o valor */
     $this->data[$prop] = $value;
   }
   public function __get($prop)
   {
     return $this->data[$prop];
   }
   public function save()
   {
     print 'INSERT INTO '.$this::TABLENAME. '('.
     implode("','", array_keys($this->data)). ') VALUES '.
     "('". implode("','", array_values($this->data)). "')";
   }
   public function delete($id)
   {
     print "DELETE FROM ". $this::TABLENAME. ' WHERE id='.$id;
   }
   public function load($id)
   {
     print "SELECT * FROM ". $this::TABLENAME. 'WHERE id='. $id;
   }
 }

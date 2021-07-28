<?php


namespace Covalent;


class Logger
{
    protected array $logClass;

    /**
     * Logger constructor.
     */
    public function __construct()
    {
        $this->logClass = [];
        $this->setLogClass(get_called_class());
    }

    /**
     */
    public function getLogClass(int $index = null)
    {
        if(is_null($index)){
            return $this->logClass;
        }
        else{
            if($index < 0){
                return $this->logClass[count($this->logClass)+$index];
            }else{
                return $this->logClass[$index];
            }
        }
    }

    /**
     * @param string $logClass
     */
    public function setLogClass(string $logClass): void
    {
        array_push($this->logClass,$logClass);
    }
    
    public function getLogger()
    {
        return $this;
    }

}
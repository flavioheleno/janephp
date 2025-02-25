<?php

namespace CreditSafe\API\Model;

class CompliancePreDefinedSearches extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $totalSize;
    /**
     * 
     *
     * @var CompliancePreDefinedSearchesPredefinedSearchesItem[]
     */
    protected $predefinedSearches;
    /**
     * 
     *
     * @return int
     */
    public function getTotalSize() : int
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize) : self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return CompliancePreDefinedSearchesPredefinedSearchesItem[]
     */
    public function getPredefinedSearches() : array
    {
        return $this->predefinedSearches;
    }
    /**
     * 
     *
     * @param CompliancePreDefinedSearchesPredefinedSearchesItem[] $predefinedSearches
     *
     * @return self
     */
    public function setPredefinedSearches(array $predefinedSearches) : self
    {
        $this->initialized['predefinedSearches'] = true;
        $this->predefinedSearches = $predefinedSearches;
        return $this;
    }
}
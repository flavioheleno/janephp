<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaUpdateCommand extends MetadataValuesChangeCommandBase
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
     * An object containing the metadata values to add / update.
     *
     * @var mixed[]
     */
    protected $value;
    /**
     * An object containing the metadata values to add / update.
     *
     * @return mixed[]
     */
    public function getValue() : iterable
    {
        return $this->value;
    }
    /**
     * An object containing the metadata values to add / update.
     *
     * @param mixed[] $value
     *
     * @return self
     */
    public function setValue(iterable $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}
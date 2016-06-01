<?php
namespace DarkSide666\AstroTools;

class AbstractObject
{
    // Object metadata
    protected $meta = [];

    /**
     * Get object property.
     *
     * @param string $property
     * @return mixed
     * @throws \Exception\InvalidArgumentException
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return($this->$property);
        } elseif (array_key_exists($property, $this->meta)) {
            return $this->meta[$property];
        } else {
            throw new \Exception\InvalidArgumentException("Property '$property' does not exist.");
        }
    }

    /**
     * Set object property.
     *
     * @param string $property
     * @param mixed $value
     * @throws \Exception\InvalidArgumentException
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            $this->meta[$property] = $value;
        }
    }

    /**
     * Return array of all metadata
     *
     * @return array
     */
    public function getMeta()
    {
        return $this->meta;
    }
}

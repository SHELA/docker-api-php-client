<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class DeviceRequest
{
    /**
     * @var string
     */
    protected $driver;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var string[]
     */
    protected $deviceIDs;
    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * @var string[][]
     */
    protected $capabilities;
    /**
     * Driver-specific options, specified as a key/value pairs. These options.
     *
     * @var string[]
     */
    protected $options;

    /**
     * @return string
     */
    public function getDriver(): ?string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(?string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeviceIDs(): ?array
    {
        return $this->deviceIDs;
    }

    /**
     * @param string[] $deviceIDs
     */
    public function setDeviceIDs(?array $deviceIDs): self
    {
        $this->deviceIDs = $deviceIDs;

        return $this;
    }

    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * @return string[][]
     */
    public function getCapabilities(): ?array
    {
        return $this->capabilities;
    }

    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * @param string[][] $capabilities
     */
    public function setCapabilities(?array $capabilities): self
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    /**
     * Driver-specific options, specified as a key/value pairs. These options.
     *
     * @return string[]
     */
    public function getOptions(): ?\ArrayObject
    {
        return $this->options;
    }

    /**
     * Driver-specific options, specified as a key/value pairs. These options.
     *
     * @param string[] $options
     */
    public function setOptions(?\ArrayObject $options): self
    {
        $this->options = $options;

        return $this;
    }
}
<?php

namespace Ernest\DummyContent\Api;

/**
 * Interface ConfigProviderInterface
 */
interface ConfigProviderInterface
{
    /**
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @return string|null
     */
    public function getImagePath(): ?string;
}

<?php
declare(strict_types=1);

namespace Ernest\DummyContent\Model;

use Ernest\DummyContent\Api\ConfigProviderInterface;
use  Magento\Framework\App\Config\ScopeConfigInterface;

class ConfigProvider implements ConfigProviderInterface
{

    public const CONFIG_PATH = 'content/about/';

    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {}

    /**
     * @inheritDoc
     */
    public function getTitle(): ?string
    {
        return $this->getConfig('title');
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): ?string
    {
        return $this->getConfig('description');
    }

    /**
     * @inheritDoc
     */
    public function getImagePath(): ?string
    {
        return $this->getConfig('image_path');
    }

    /**
     * @param string $path
     * @return string|null
     */
    private function getConfig(string $path): ?string
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH . $path);
    }
}

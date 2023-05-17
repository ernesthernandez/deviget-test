<?php
declare(strict_types=1);

namespace Ernest\AboutMe\ViewModel;

use Ernest\DummyContent\Api\ConfigProviderInterface;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class AboutMeDetails
 */
class AboutMeDetails implements ArgumentInterface
{
    public function __construct(
        private readonly ConfigProviderInterface $configProvider,
        private readonly UrlInterface $url
    ) {}

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->configProvider->getTitle();
    }

    /**
     * @return array
     */
    public function getParagraphs(): array
    {
        return explode('. ', $this->configProvider->getDescription());
    }

    /**
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->url->getUrl($this->configProvider->getImagePath());
    }
}

<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Livewire;

use Illuminate\Contracts\View\View;
use Yu\PageSpeed\Services\PageSpeedAnalyzer;
use Yu\WebToolsCore\Livewire\ToolComponent;
use Yu\WebToolsCore\Locale\LocaleResolver;

/**
 * The page speed check: the form, the loading log, the scores of both runs, the issues and the checklist report.
 */
class PageSpeedComponent extends ToolComponent
{
    protected function name(): string
    {
        return 'page-speed';
    }

    protected function locales(): LocaleResolver
    {
        return new LocaleResolver(dirname(__DIR__, 2).'/resources/lang');
    }

    /**
     * Google allows no requests without an API key, so without one the form says the service is unavailable.
     */
    protected function isAvailable(): bool
    {
        return parent::isAvailable() && filled(config('page-speed.api_key'));
    }

    protected function run(string $url, string $locale): array
    {
        // Two Lighthouse runs take up to a minute; PHP's default limit of 30 s would cut them off
        set_time_limit((int) config('page-speed.timeout') + 30);

        return app(PageSpeedAnalyzer::class)->analyze($url, $locale);
    }

    public function render(): View
    {
        return view('page-speed::page-speed');
    }
}

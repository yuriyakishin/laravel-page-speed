@php($t = fn (string $key, array $replace = []) => __('page-speed::messages.'.$key, $replace, $locale))

<div class="wt" lang="{{ $locale }}" x-data="{
        step: 0,
        timer: null,
        start() { this.step = 0; clearInterval(this.timer); this.timer = setInterval(() => this.step = Math.min(this.step + 1, 2), 9000) },
        again() { this.$refs.form.scrollIntoView({ behavior: 'smooth', block: 'center' }); this.$refs.url.focus({ preventScroll: true }); this.$refs.url.select() },
    }" @wt-again="again()">
    <form class="wt-tool" wire:submit="analyze" @submit="start()" x-ref="form" novalidate>
        <div class="wt-row">
            <div @class(['wt-field', 'wt-field-err' => $errors->has('url')])>
                <input id="wt-url" type="text" inputmode="url" autocomplete="url" placeholder=" "
                       wire:model="url" x-ref="url">
                <label for="wt-url">{{ $t('form.label') }}</label>
            </div>
            <button type="submit" class="wt-go" wire:loading.attr="disabled" wire:target="analyze">
                <span wire:loading.remove wire:target="analyze">{{ $t('form.button') }}</span>
                <span wire:loading wire:target="analyze" class="wt-spin" aria-hidden="true"></span>
            </button>
        </div>
        <p class="wt-hint">{{ $t('form.hint', ['count' => config('page-speed.rate_limit.per_hour')]) }}</p>
        @error('url')<p class="wt-error">{{ $message }}</p>@enderror
        @if ($error)
            <p class="wt-error" role="alert">{{ $error }}</p>
        @endif
    </form>

    {{-- Lines light up on a timer while one request runs; the server does not report its steps --}}
    <div class="wt-log" wire:loading.block wire:target="analyze" aria-hidden="true">
        @foreach (['mobile', 'desktop', 'checks'] as $i => $line)
            <p :class="{ 'wt-run': step === {{ $i }}, 'wt-done': step > {{ $i }} }">{{ $t('loading.'.$line) }}</p>
        @endforeach
    </div>

    @if ($report)
        {{-- A new block for every check (keyed by the count), so each report scrolls the tool up to its form --}}
        <div wire:key="wt-report-{{ $reportNumber }}" wire:loading.remove wire:target="analyze" aria-live="polite"
             x-init="$root.scrollIntoView({ behavior: 'smooth', block: 'start' })">
            {{-- Lighthouse scores of both runs: green from 90, amber from 50, red below, as in Lighthouse itself --}}
            @php($tone = fn (?int $score): string => $score === null ? 'skip' : ($score >= 90 ? 'pass' : ($score >= 50 ? 'warn' : 'fail')))
            <section class="ps-scores" aria-labelledby="ps-title">
                <h3 id="ps-title">{{ $t('scores.title') }}</h3>
                <div class="ps-runs">
                    @foreach (['mobile', 'desktop'] as $strategy)
                        <div class="ps-run">
                            <p class="ps-run-name">{{ $t('scores.'.$strategy) }}</p>
                            <ul>
                                @foreach ($report['speed'][$strategy]['scores'] as $category => $score)
                                    <li class="ps-score wt-{{ $tone($score) }}">
                                        <span class="ps-ring" style="--v: {{ $score ?? 0 }}%"><b>{{ $score ?? '—' }}</b></span>
                                        <span>{{ $t('categories.'.$category) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                <p class="ps-note">{{ $report['speed']['mobile']['fieldScope'] ? $t('scores.field_'.$report['speed']['mobile']['fieldScope']) : $t('scores.lab_only') }}</p>
            </section>

            @include('web-tools-core::checklist-report', ['report' => $report, 'tool' => 'page-speed', 'locale' => $locale])

            {{-- What slows the page most, in Lighthouse's own words and the visitor's language --}}
            @if ($report['speed']['mobile']['issues'])
                <section class="ps-issues" aria-labelledby="ps-issues-title">
                    <h3 id="ps-issues-title">{{ $t('issues.title') }}</h3>
                    <p class="ps-note">{{ $t('issues.note') }}</p>
                    <ol>
                        @foreach ($report['speed']['mobile']['issues'] as $issue)
                            <li>
                                <div class="ps-issue-head">
                                    <b>{{ $issue['title'] }}</b>
                                    <span class="ps-saving">
                                        @if ($issue['savingsMs'] > 0){{ $t('issues.saves_time', ['value' => number_format($issue['savingsMs'] / 1000, 1)]) }}@endif
                                        @if ($issue['savingsBytes'] > 0){{ $t('issues.saves_bytes', ['value' => number_format($issue['savingsBytes'] / 1024)]) }}@endif
                                    </span>
                                </div>
                                <p>{{ $issue['description'] }}</p>
                            </li>
                        @endforeach
                    </ol>
                </section>
            @endif
        </div>
    @endif
</div>

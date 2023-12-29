@php
    $strategyInfo = [
        'item1' => [
            'name' => 'Contingency',
            'percentage' => 40,
        ],
        'item2' => [
            'name' => 'Partner/Investor',
            'percentage' => 20,
        ],
        'item3' => [
            'name' => 'legal & Regulation',
            'percentage' => 15,
        ],
        'item4' => [
            'name' => 'Operational',
            'percentage' => 15,
        ],
        'item5' => [
            'name' => 'Product Development',
            'percentage' => 10,
        ],
        'item6' => [
            'name' => 'Marketing',
            'percentage' => 5,
        ],
    ];
@endphp

<x-base>
    <x-menu />

    <x-roadmap />

    <x-strategy :strategyInfo="$strategyInfo" />

    <x-footer />
</x-base>

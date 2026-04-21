<x-filament-widgets::widget>
    <x-filament::section>
        <div class="h-[500px]">
            <div id="map" style="width: 100%; height: 100%;"></div>
        </div>

        <div class="mt-4">
            <div class="flex items-center justify-between">
                <div class="text-sm font-medium">Data Tahun:</div>
                <div class="flex gap-4">
                    @foreach(['2019', '2020', '2021', '2022', '2023', '2024'] as $tahun)
                        <label class="flex items-center">
                            <input type="checkbox"
                                   wire:model="tahunAktif"
                                   value="{{ $tahun }}"
                                   class="rounded border-gray-300">
                            <span class="ml-2">{{ $tahun }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
    </x-filament::section>

    @push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        document.addEventListener('livewire:load', function() {
            // Tunggu sampai DOM selesai dimuat
            setTimeout(() => {
                const map = L.map('map').setView([-2.5, 118], 5);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                // Invalidate size setelah map dimuat
                map.invalidateSize();
            }, 100);
        });
    </script>
    @endpush
</x-filament-widgets::widget>

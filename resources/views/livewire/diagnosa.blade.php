<div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Mulai Diagnosa Tanaman
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            {{-- @foreach ($inputs as $key => $value) --}}
            <div class="row push">
                <div class="col-lg-12 col-xl-12">
                    <div class="mb-1">
                        <label class="form-label">Jenis Tanaman {{ $jnsTanaman }}</label>
                        <div class="row space-y-2">
                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Mangga"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default1">Mangga</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Alpukat"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default2">Alpukat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Rambutan"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Rambutan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Nangka"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Nangka</label>
                                </div>


                            </div>
                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Durian"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Durian</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Anggur"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Anggur</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Kelengkeng"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Kelengkeng</label>
                                </div>
                            </div>
                            <div class="col space-y-2">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Jambu Biji"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Jambu Biji</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Jeruk"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Jeruk</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Sawo"
                                        wire:model="jnsTanaman" wire:click="showBagian()">
                                    <label class="form-check-label" for="example-radios-default3">Sawo</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($showBGN == 'true')
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-1">
                            <label class="form-label">Bagian Tanaman {{ $bgnTanaman }}</label>
                            <div class=" row space-y-2">
                                <div class="col space-y-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Buah"
                                            wire:model="bgnTanaman" wire:click="showGejala()">
                                        <label class="form-check-label" for="example-radios-default11">Buah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Batang"
                                            wire:model="bgnTanaman" wire:click="showGejala()">
                                        <label class="form-check-label" for="example-radios-default12">Batang</label>
                                    </div>
                                </div>
                                <div class="col space-y-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Akar"
                                            wire:model="bgnTanaman" wire:click="showGejala()">
                                        <label class="form-check-label" for="example-radios-default13">Akar</label>
                                    </div>
                                </div>
                                <div class="col space-y-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Daun"
                                            wire:model="bgnTanaman" wire:click="showGejala()">
                                        <label class="form-check-label" for="example-radios-default3">Daun</label>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-lg-12 col-xl-12">
                <div class="mb-4">
                    <label class="form-label">Jamur Tanaman Buah</label>
                    <div class="space-y-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="example-checkbox-default1" name="example-checkbox-default1">
                            <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                        </div>
                    </div>
                </div>
            </div>
            @if ($showGJL == 'true')

                <div class="col-lg-12 col-xl-12">
                    <div class="mb-5">
                        <label class="form-label">Pilih Gejala @json($gjlTanaman)</label>
                        <div class="space-y-2">
                            @foreach ($gejala as $key)
                                <div class="form-check">
                                    <input class="form-check-input" name="option{{ $key->id }}" type="checkbox"
                                        id="option{{ $key->id }}" value="{{ $key->id }}"
                                        wire:model="gjlTanaman">
                                    <label class="form-check-label"
                                        for="option{{ $key->id }}">{{ $key->DetailPenyakitToGejala->namaGejala }}</label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif
            {{-- @endforeach --}}

            <div class="flex d-flex justify-between justify-content-between">
                <button type="button" wire:click.prevent="add({{ $i }})"
                    class="btn rounded-pill btn-alt-success me-1 mb-3">
                    <i class="fa fa-fw fa-plus me-1"></i> Tambah Tanaman
                </button>
                <button type="button" class="btn rounded-pill  btn-alt-success me-1 mb-3">
                    <i class="fa fa-fw fa-rotate me-1"></i> Mulai Diagnosa
                </button>

            </div>

        </div>

    </div>

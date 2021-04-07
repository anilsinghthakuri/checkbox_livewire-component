<div>
  <div class="container">
            <div class="row">
                <div class="col-lg-6">
                        <div class="form-check form-check-inline">
                            @if ($state == 1)
                            <label class="form-check-label">
                                <input class="form-check-input" wire:model = 'state'  type="checkbox" name="data" id="data" value="0"  checked > data
                            </label>
                            @else
                            <label class="form-check-label">
                                <input class="form-check-input"  wire:model = 'state' type="checkbox" name="data" id="data" value="1"  > data
                            </label>
                            @endif

                        </div>

                </div>
            </div>
        </div>
</div>

<x-admin-layout>
    <div class="col">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">Shipment Form</h2>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST"
                    action="{{ route('shipment.history.update', [$shipment->uuid, $log->uuid]) }}">
                    @csrf
                    @method("PUT")
                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="current_location">Current
                            Location</label>
                        <div class="col-lg-6">
                            <select class="form-control" id="current_location" name="current_location">
                                <option value="{{ $log->location_id }}">{{ $log->location->name }} (current)</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}" @selected(old('current_location') == $location->id)>
                                        {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error("current_location")
                                <small class="fs-sm text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="status">Status</label>
                        <div class="col-lg-6">
                            <select class="form-control" id="status" name="status">
                                <option value="{{ $log->status }}">{{ $log->status }} (current)</option>
                                @foreach($status as $value => $label)
                                    <option value="{{ $value }}" @selected(old('status') == $value)>{{ $label }}</option>
                                @endforeach
                            </select>
                            @error("status")
                                <small class="fs-sm text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row pb-4">
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="remark">Remark</label>
                        <div class="col-lg-6">
                            <textarea class="form-control" id="remark" name="remark">{{ old('remark', $log->remarks) }}</textarea>
                            @error("remark")
                                <small class="fs-sm text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-4 text-center">
                        <div class="col-lg-6 offset-lg-3">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</x-admin-layout>

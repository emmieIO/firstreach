<x-admin-layout>
<div class="col">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Shipment Creation Form</h2>
            {{-- go back to list --}}
            <a href="{{ route('shipments.index') }}" class="btn btn-sm btn-secondary float-end">Back to List</a>
        </header>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="POST" action="{{ route('shipments.store') }}">
                @csrf

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="sender_name">Sender Name</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="sender_name" name="sender_name"
                            value="{{ old('sender_name') }}">
                        @error("sender_name")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="sender_phone">Sender Phone</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="sender_phone" name="sender_phone"
                            value="{{ old('sender_phone') }}">
                        @error("sender_phone")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="sender_email">Sender Email</label>
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="sender_email" name="sender_email"
                            value="{{ old('sender_email') }}">
                        @error("sender_email")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="sender_address">Sender Address</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="sender_address" name="sender_address"
                            value="{{ old('sender_address') }}">
                        @error("sender_address")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="receiver_name">Receiver Name</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="receiver_name" name="receiver_name"
                            value="{{ old('receiver_name') }}">
                        @error("receiver_name")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="receiver_address">Receiver
                        Address</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="receiver_address" name="receiver_address"
                            value="{{ old('receiver_address') }}">
                        @error("receiver_address")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="receiver_phone">Receiver Phone</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="receiver_phone" name="receiver_phone"
                            value="{{ old('receiver_phone') }}">
                        @error("receiver_phone")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="receiver_email">Receiver Email</label>
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="receiver_email" name="receiver_email"
                            value="{{ old('receiver_email') }}">
                        @error("receiver_email")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="origin_id">Origin Location</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="origin_id" name="origin_id">
                            <option value="">Select Origin</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" @selected(old('origin_id') == $location->id)>
                                    {{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error("origin_id")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="destination_id">Destination
                        Location</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="destination_id" name="destination_id">
                            <option value="">Select Destination</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" @selected(old('destination_id') == $location->id)>
                                    {{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error("destination_id")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="category_id">Category</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="category" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error("category_id")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="status">Status</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="status" name="status">
                            <option value="">Select Status</option>
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
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="amount">Amount</label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount') }}">
                        @error("amount")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="description">Description</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" id="description"
                            name="description">{{ old('description') }}</textarea>
                        @error("description")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="shipment_date">Shipment Date</label>
                    <div class="col-lg-6">
                        <input type="datetime-local" class="form-control" id="shipment_date" name="shipment_date"
                            value="{{ old('shipment_date') }}">
                        @error("shipment_date")
                            <small class="fs-sm text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="expected_delivery_date">Expected
                        Delivery Date</label>
                    <div class="col-lg-6">
                        <input type="datetime-local" class="form-control" id="expected_delivery_date"
                            name="expected_delivery_date" value="{{ old('expected_delivery_date') }}">
                        @error("expected_delivery_date")
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

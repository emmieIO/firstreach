<x-admin-layout>
<div class="col-lg-12">
    <div class="row mb-3">
        <div class="col-xl-6">
            <section class="card card-featured-left card-featured-primary mb-3">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-primary">
                                <i class="fas fa-truck-fast"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Shipments</h4>
                                <div class="info">
                                    <strong class="amount">{{ $shipments }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route("shipments.index") }}">view all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xl-6">
            <section class="card card-featured-left card-featured-secondary">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-secondary">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Users</h4>
                                <div class="info">
                                    <strong class="amount">{{ $users }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route("admin.users") }}">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <section class="card card-featured-left card-featured-quaternary">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-info">
                                <i class="fas fa-location-pin"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Locations</h4>
                                <div class="info">
                                    <strong class="amount">{{ $locations }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route("locations.index") }}">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xl-6">
            <section class="card card-featured-left card-featured-quaternary">
                <div class="card-body">
                    <div class="widget-summary">
                        <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-primary">
                                <i class="fas fa-filter"></i>
                            </div>
                        </div>
                        <div class="widget-summary-col">
                            <div class="summary">
                                <h4 class="title">Categories</h4>
                                <div class="info">
                                    <strong class="amount">{{ $categories }}</strong>
                                </div>
                            </div>
                            <div class="summary-footer">
                                <a class="text-muted text-uppercase" href="{{ route("categories.index") }}">View ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</x-admin-layout>

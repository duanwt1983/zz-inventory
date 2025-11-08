<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Shipment;

class LogisticsTrackerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $shipmentId;

    public function __construct($shipmentId)
    {
        $this->shipmentId = $shipmentId;
    }

    public function handle()
    {
        $shipment = Shipment::find($this->shipmentId);
        if (! $shipment) return;

        // TODO: call logistics provider API or third-party aggregator to fetch tracking updates
        // Update shipment->last_status, last_update, persist tracking history
    }
}

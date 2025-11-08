<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Branch;
use App\Models\Product;
use App\Models\Supplier;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $hq = Branch::create(['name' => '总部', 'address' => '总部地址', 'procurement_mode' => 'CENTRALIZED']);
        $store1 = Branch::create(['name' => '分店A', 'address' => '分店A地址', 'procurement_mode' => 'HYBRID']);

        User::create(['name' => 'Admin','email' => 'admin@example.com','password' => Hash::make('Password123!'),'branch_id' => $hq->id]);

        $supplier = Supplier::create(['name' => '示例供应商','contact_person' => '供应商联系人','phone' => '13800000000']);

        Product::create(['sku' => 'SKU-001','name' => '一次性毛巾','unit' => '包','default_supplier_id' => $supplier->id]);
    }
}

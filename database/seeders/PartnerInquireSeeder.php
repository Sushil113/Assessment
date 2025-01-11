<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartnerInquire;

class PartnerInquireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'invoice_number' => '#qc59243071',
            'company_name' => 'Toyota Motor Corp',
            'contact_name' => 'Takehiko Hachi Rui',
            'phone_number' => '+81 9876543210',
        ];

        for ($i = 0; $i < 5; $i++) {
            PartnerInquire::create($data);
        }
    }
}

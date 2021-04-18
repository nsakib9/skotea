<?php

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('site_settings')->delete();

		DB::table('site_settings')->insert([
			['name' => 'site_name', 'value' => 'Gofer'],
			['name' => 'payment_currency', 'value' => 'USD'],
			['name' => 'version', 'value' => '2.2.1'],
			['name' => 'driver_km', 'value' => '5'],
			['name' => 'head_code', 'value' => ''],
			['name' => 'admin_contact', 'value' => '1234567890'],
			['name' => 'admin_country_code', 'value' => '91'],
			['name' => 'site_url', 'value' => ''],
			['name' => 'heat_map', 'value' => 'On'],
			['name' => 'heat_map_hours', 'value' => '3'],
			['name' => 'update_loc_interval', 'value' => '10'],
			['name' => 'offline_hours', 'value' => '1'],
			['name' => 'pickup_km', 'value' => '3'],
			['name' => 'drop_km', 'value' => '1'],
			['name' => 'max_waiting_time', 'value' => '2'],
            ['name' => 'update_cancellation_interval', 'value' => '2'],
		]);
	}
}

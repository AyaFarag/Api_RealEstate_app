<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SpecializationSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CompanyMetaDataSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(WorkDaySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
    }
}

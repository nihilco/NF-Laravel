<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call([
            UsersTableSeeder::class,
            CountriesTableSeeder::class,
            ProvincesTableSeeder::class,
            TypesTableSeeder::class,
            AccountsTableSeeder::class,
            CustomersTableSeeder::class,
            ServersTableSeeder::class,
            DomainsTableSeeder::class,
            WebsitesTableSeeder::class,
            AliasesTableSeeder::class,
            PrioritiesTableSeeder::class,
            StatusesTableSeeder::class,
            ResolutionsTableSeeder::class,
            InvoicesTableSeeder::class,
            PagesTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            TutorialsTableSeeder::class,
            ChannelsTableSeeder::class,
            TopicsTableSeeder::class,
            ThreadsTableSeeder::class,
            AuthorsTableSeeder::class,
            SeriesTableSeeder::class,
            BooksTableSeeder::class,
            ClientsTableSeeder::class,
            CasesTableSeeder::class,
            CaseNotesTableSeeder::class,
            CaseTypesTableSeeder::class,
        ]);
    }
}

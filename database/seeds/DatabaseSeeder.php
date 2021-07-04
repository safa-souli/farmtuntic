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
    // making tables empty
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table('client')->truncate();
    DB::table('agriculteur')->truncate();
    DB::table('livreur')->truncate();
    DB::table('livraison')->truncate();
    DB::table('transport')->truncate();
    DB::table('forum')->truncate();
    DB::table('forum_commentaire')->truncate();
    DB::table('forum_commentaire_reponde')->truncate();
    DB::table('categorie')->truncate();
    DB::table('ferme')->truncate();
    DB::table('ferme_avis')->truncate();
    DB::table('produit_note')->truncate();
    DB::table('produit_panier')->truncate();
    DB::table('produit')->truncate();
    DB::table('commande')->truncate();
    //DB::table('contact')->truncate();
    DB::table('panier')->truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    //seeding tables
    $this->call(UsersTableSeeder::class);
    $this->call(forumTableSeeder::class);
    $this->call(categorieTableSeeder::class);
    $this->call(fermeTableSeeder::class);
    $this->call(produitTableSeeder::class);
    $this->call(produitNoteTableSeeder::class);
    $this->call(transportTableSeeder::class);
    $this->call(livraisonTableSeeder::class);
    $this->call(commandeTableSeeder::class);
    $this->call(panierTableSeeder::class);
    //$this->call(contactTableSeeder::class);
  }
}

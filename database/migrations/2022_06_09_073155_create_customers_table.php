<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->dateTime('last_update')->nullable();

            // Customer
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();

            // Society
            $table->string('society_name')->nullable();
            $table->string('siret')->nullable();
            $table->string('tva')->nullable();
            $table->string('society_tel')->nullable();
            $table->string('society_email')->nullable();
            $table->string('adresse')->nullable();
            $table->string('adresse2')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();

            // Social networks
            $table->text('reseaux_sociaux')->nullable();
            $table->text('sites_webs')->nullable();

            // Hosting
            $table->boolean('hosting')->default(false);
            $table->string('wished_domain')->nullable();

            // Budget
            $table->string('budget')->nullable();
            $table->text('wished_prestations')->nullable();

            // Additionnal informations
            $table->text('additionnal_informations')->nullable();

            // Other reasons
            $table->text('other_reasons')->nullable();

            // How did you know MCTS
            $table->text('how_mcts')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};

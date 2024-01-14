<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        /**Navigation Audit */
        Schema::create('navbymast', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('navbyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('navrecbymast', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('done');
            $table->string('no_recommendation');
            $table->string('recommendation');
            $table->timestamp('updated_at');
        });

        Schema::create('navrecbyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('done');
            $table->string('no_recommendation');
            $table->string('recommendation');
            $table->timestamp('updated_at');
        });

        /**Cargo Operation */
        Schema::create('cargobymast', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('cargobyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('cargorecbymast', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('done');
            $table->string('no_recommendation');
            $table->string('recommendation');
            $table->timestamp('updated_at');
        });

        Schema::create('cargorecbyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('done');
            $table->string('no_recommendation');
            $table->string('recommendation');
            $table->timestamp('updated_at');
        });

        /**Mooring Operation */
        Schema::create('mooringbymast', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('mooringbyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('mooringrecbymast', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('done');
            $table->string('no_recommendation');
            $table->string('recommendation');
            $table->timestamp('updated_at');
        });

        Schema::create('mooringrecbyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('done');
            $table->string('no_recommendation');
            $table->string('recommendation');
            $table->timestamp('updated_at');
        });

        /**Engineering Audit */
        Schema::create('engineeringaudit', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        /**Superintendent Visit */
        Schema::create('supervisitbyts', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        Schema::create('supervisitbyms', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_vessels');
            $table->string('target');
            $table->string('done');
            $table->string('not_yet');
            $table->string('average');
            $table->string('persentage');
            $table->timestamp('updated_at');
        });

        /**Circular */
        Schema::create('totalcircular', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('total_circular');
            $table->timestamp('updated_at');
        });

        Schema::create('categorycircular', function (Blueprint $table) {
            $table->id();
            $table->string('circular_type');
            $table->string('category_circular');
            $table->timestamp('updated_at');
        });

        /**MWT */
        Schema::create('mwt', function (Blueprint $table) {
            $table->id();
            $table->string('fungsi');
            $table->string('jumlah');
            $table->timestamp('updated_at');
        });

        /**Negative Feedback */
        Schema::create('feedbackstatus', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('sum');
            $table->timestamp('updated_at');
        });

        Schema::create('feedbackcategory', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('sum');
            $table->timestamp('updated_at');
        });

        Schema::create('feedbackperfleet', function (Blueprint $table) {
            $table->id();
            $table->string('fleet_distribution');
            $table->string('open');
            $table->string('closed');
            $table->string('total');
            $table->timestamp('updated_at');
        });

        Schema::create('feedbacksub', function (Blueprint $table) {
            $table->id();
            $table->string('sub_category');
            $table->string('jumlah');
            $table->timestamp('updated_at');
        });
    }


    public function down(): void
    {
        /**Navigation Audit */
        Schema::dropIfExists('navbymast');
        Schema::dropIfExists('navbyms');
        Schema::dropIfExists('navrecbymast');
        Schema::dropIfExists('navrecbyms');

        /**Cargo Operation */
        Schema::dropIfExists('cargobymast');
        Schema::dropIfExists('cargobyms');
        Schema::dropIfExists('cargorecbymast');
        Schema::dropIfExists('cargorecbyms');

        /**Mooring Operation */
        Schema::dropIfExists('mooringbymast');
        Schema::dropIfExists('mooringbyms');
        Schema::dropIfExists('mooringrecbymast');
        Schema::dropIfExists('mooringrecbyms');

        /**Engineering Audit */
        Schema::dropIfExists('engineeringaudit');

        /**Superintendent Visit */
        Schema::dropIfExists('supervisitbyts');
        Schema::dropIfExists('supervisitbyms');

        /**Circular */
        Schema::dropIfExists('totalcircular');
        Schema::dropIfExists('categorycircular');

        /**MWT */
        Schema::dropIfExists('mwt');

        /**Negative Feedback */
        Schema::dropIfExists('feedbackstatus');
        Schema::dropIfExists('feedbackcategory');
        Schema::dropIfExists('feedbackperfleet');
        Schema::dropIfExists('feedbacksub');
    }
};

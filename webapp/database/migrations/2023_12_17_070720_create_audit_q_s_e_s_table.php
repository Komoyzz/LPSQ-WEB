<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        /**Incident Record */
        Schema::create('incidentperfleet', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('case');
            $table->timestamps();
        });

        Schema::create('incidenttype', function (Blueprint $table) {
            $table->id();
            $table->string('personnel_injury_type')->nullable();
            $table->string('jumlah_injury')->nullable();
            $table->string('asset_loss')->nullable();
            $table->string('jumlah_asset')->nullable();
            $table->string('environment')->nullable();
            $table->string('jumlah_env')->nullable();
            $table->string('security_breach')->nullable();
            $table->string('jumlah_security')->nullable();
            $table->timestamps();
        });

        Schema::create('incidentreport', function (Blueprint $table) {
            $table->id();
            $table->string('fungsi');
            $table->string('jumlah');
            $table->timestamps();
        });

        /**Investigation Record */
        Schema::create('investigation', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('jumlah_insiden_accident');
            $table->string('done');
            $table->string('not_done');
            $table->string('investigation_no');
            $table->timestamps();
        });

        Schema::create('investigationtype', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('jumlah_insiden_accident');
            $table->string('grounding');
            $table->string('collision');
            $table->string('allision');
            $table->string('injury');
            $table->string('asset_loss');
            $table->string('engine_breakdown');
            $table->string('oil_spill');
            $table->timestamps();
        });

        /**BJST */
        Schema::create('bjst', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('total_peserta_hadir');
            $table->string('deck');
            $table->string('engine');
            $table->string('rating')->nullable();
            $table->timestamps();
        });

        /**CDI */
        Schema::create('cdiaverage', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('total_cdi');
            $table->string('total_obs');
            $table->string('average');
            $table->timestamps();
        });

        Schema::create('cdisection', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('total_obs');
            $table->timestamps();
        });

        /**PSC */
        Schema::create('pscinspection', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('psc_inspection');
            $table->timestamps();
        });

        Schema::create('totaldeficiency', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('total_deficiency');
            $table->timestamps();
        });

        Schema::create('averagedeficiency', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('average_deficiency');
            $table->timestamps();
        });

        /**Sire */
        Schema::create('sireallinspection', function (Blueprint $table) {
            $table->id();
            $table->string('total_inspection_sire');
            $table->string('total_obs');
            $table->string('average');
            $table->string('total_vessel');
            $table->timestamps();
        });

        Schema::create('sirefleet', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('sire')->nullable();
            $table->string('obs')->nullable();
            $table->string('average')->nullable();
            $table->string('total_vessel')->nullable();
            $table->timestamps();
        });

        Schema::create('latestsire', function (Blueprint $table) {
            $table->id();
            $table->string('no')->nullable();
            $table->string('sire_chapter');
            $table->string('percentage');
            $table->string('jumlah_nc');
            $table->string('fleet_1');
            $table->string('fleet_2');
            $table->string('fleet_3');
            $table->string('fleet_4');
            $table->string('fleet_5');
            $table->timestamps();
        });

        Schema::create('totalsire', function (Blueprint $table) {
            $table->id();
            $table->string('vessel');
            $table->string('nc');
            $table->timestamps();
        });

        Schema::create('jumlahkapal', function (Blueprint $table) {
            $table->id();
            $table->string('kapal_milik_pis');
            $table->string('jumlah_kapal_milik');
            $table->string('kapal_in_house_mgmt_pis');
            $table->string('jumlah_kapal_in_house');
            $table->string('kapal_sire');
            $table->string('jumlah_kapal_sire');
            $table->timestamps();
        });

        /**Internal Audit */
        Schema::create('internalperfleet', function (Blueprint $table) {
            $table->id();
            $table->string('kapal');
            $table->string('jumlah_audit');
            $table->timestamps();
        });

        Schema::create('ismfleet', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('ism_element');
            $table->string('jumlah_nc');
            $table->timestamps();
        });

        Schema::create('ispsfleet', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('isps_element');
            $table->string('jumlah_nc');
            $table->timestamps();
        });

        Schema::create('noncomformity', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('audit');
            $table->string('ism');
            $table->string('isps');
            $table->string('env');
            $table->timestamps();
        });

        Schema::create('ismoverdue', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('overdue');
            $table->string('mendekati_overdue');
            $table->string('closed');
            $table->timestamps();
        });

        Schema::create('ispsoverdue', function (Blueprint $table) {
            $table->id();
            $table->string('isps');
            $table->string('overdue');
            $table->string('mendekati_overdue');
            $table->string('closed');
            $table->timestamps();
        });

        Schema::create('envoverdue', function (Blueprint $table) {
            $table->id();
            $table->string('env');
            $table->string('overdue');
            $table->string('mendekati_overdue');
            $table->string('closed');
            $table->timestamps();
        });

        /**UAUC */
        Schema::create('uaucpermonth', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('aktual');
            $table->string('target');
            $table->string('average');
            $table->string('persentage');
            $table->timestamps();
        });

        Schema::create('uaucperfleet', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('jumlah_kapal');
            $table->string('target');
            $table->string('january')->nullable();
            $table->string('february')->nullable();
            $table->string('march')->nullable();
            $table->string('april')->nullable();
            $table->string('may')->nullable();
            $table->string('june')->nullable();
            $table->string('july')->nullable();
            $table->string('august')->nullable();
            $table->string('september')->nullable();
            $table->string('october')->nullable();
            $table->string('november')->nullable();
            $table->string('december')->nullable();
            $table->timestamps();
        });

        Schema::create('rootcause', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('january')->nullable();
            $table->string('february')->nullable();
            $table->string('march')->nullable();
            $table->string('april')->nullable();
            $table->string('may')->nullable();
            $table->string('june')->nullable();
            $table->string('july')->nullable();
            $table->string('august')->nullable();
            $table->string('september')->nullable();
            $table->string('october')->nullable();
            $table->string('november')->nullable();
            $table->string('december')->nullable();
            $table->timestamps();
        });

        Schema::create('nearmiss', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('januari')->nullable();
            $table->string('februari')->nullable();
            $table->string('maret')->nullable();
            $table->string('april')->nullable();
            $table->string('mei')->nullable();
            $table->string('juni')->nullable();
            $table->string('juli')->nullable();
            $table->string('agustus')->nullable();
            $table->string('september')->nullable();
            $table->string('oktober')->nullable();
            $table->string('november')->nullable();
            $table->string('desember')->nullable();
            $table->timestamps();
        });

        /**OHSI - Safety Meeting */
        Schema::create('safetymeet', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('jumlah_kapal');
            $table->string('jumlah_laporan');
            $table->string('aktual');
            $table->string('average');
            $table->string('percentage');
            $table->timestamps();
        });

        Schema::create('safetymeetpermonth', function (Blueprint $table) {
            $table->id();
            $table->string('month')->nullable();
            $table->string('fleet_1')->nullable();
            $table->string('fleet_2')->nullable();
            $table->string('fleet_3')->nullable();
            $table->string('fleet_4')->nullable();
            $table->string('fleet_5')->nullable();
            $table->string('total')->nullable();
            $table->timestamps();
        });

        Schema::create('ohsi', function (Blueprint $table) {
            $table->id();
            $table->string('fleet');
            $table->string('jumlah_kapal');
            $table->string('jumlah_laporan');
            $table->string('aktual');
            $table->string('average');
            $table->string('percentage');
            $table->timestamps();
        });

        Schema::create('ohsipermonth', function (Blueprint $table) {
            $table->id();
            $table->string('month')->nullable();
            $table->string('fleet_1')->nullable();
            $table->string('fleet_2')->nullable();
            $table->string('fleet_3')->nullable();
            $table->string('fleet_4')->nullable();
            $table->string('fleet_5')->nullable();
            $table->string('total')->nullable();
            $table->timestamps();
        });

        /**COC */
        Schema::create('coc', function (Blueprint $table) {
            $table->id();
            $table->string('ship_with_recommendation');
            $table->string('total_number_of_recommendation');
            $table->string('bki');
            $table->string('dnv');
            $table->string('nk');
            $table->string('abs');
            $table->string('bv');
            $table->string('kr');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        /**Incident Record */
        Schema::dropIfExists('incidentperfleet');
        Schema::dropIfExists('incidenttype');
        Schema::dropIfExists('incidentrecord');

        /**Investigation Record */
        Schema::dropIfExists('investigation');
        Schema::dropIfExists('investigationtype');

        /**BJST */
        Schema::dropIfExists('bjst');

        /**CDI */
        Schema::dropIfExists('cdiaverage');
        Schema::dropIfExists('cdisection');

        /**PSC */
        Schema::dropIfExists('pscinspection');
        Schema::dropIfExists('totaldeficiency');
        Schema::dropIfExists('averagedeficiency');

        /**Sire */
        Schema::dropIfExists('sireallinspection');
        Schema::dropIfExists('sirefleet');
        Schema::dropIfExists('latestsire');
        Schema::dropIfExists('totalsire');

        /**Internal Audit */
        Schema::dropIfExists('internalperfleet');
        Schema::dropIfExists('ismfleet');
        Schema::dropIfExists('ispsfleet');
        Schema::dropIfExists('noncomformity');

        /**UAUC */
        Schema::dropIfExists('uaucpermonth');
        Schema::dropIfExists('uaucperfleet');
        Schema::dropIfExists('rootcause');
        Schema::dropIfExists('nearmiss');

        /**OHSI - Safety Meeting */
        Schema::dropIfExists('safetymeet');
        Schema::dropIfExists('safetymeetpermonth');
        Schema::dropIfExists('ohsi');
        Schema::dropIfExists('ohsipermonth');

        /**COC */
        Schema::dropIfExists('coc');
    }
};

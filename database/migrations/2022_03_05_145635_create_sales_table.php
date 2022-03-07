<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name')->nullable();
            $table->string('plan_key')->nullable();
            $table->integer('plan_amount')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_key')->nullable();
            $table->integer('product_type')->nullable();
            $table->dateTime('trans_createdate')->nullable();
            $table->dateTime('trans_updatedate')->nullable();
            $table->string('trans_key')->nullable();
            $table->string('trans_status')->nullable();
            $table->integer('trans_status_code')->nullable();
            $table->decimal('trans_value')->nullable();
            $table->decimal('trans_total_value')->nullable();
            $table->decimal('trans_discount_value')->nullable();
            $table->decimal('trans_freight')->nullable();
            $table->string('trans_freight_type')->nullable();
            $table->integer('trans_payment')->nullable();
            $table->string('trans_payment_line')->nullable();
            $table->string('trans_payment_bar_code')->nullable();
            $table->string('trans_payment_url')->nullable();
            $table->dateTime('trans_payment_date')->nullable();
            $table->integer('trans_installments')->nullable();
            $table->string('trans_qrcode_pix')->nullable();
            $table->string('trans_url_pix')->nullable();
            $table->string('parent_sale')->nullable();
            $table->integer('is_upsell')->nullable();
            $table->string('have_order_bump')->nullable();
            $table->string('subs_key')->nullable();
            $table->string('tracking_code')->nullable();
            $table->string('shipping_company')->nullable();
            $table->string('postback_type')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_cel')->nullable();
            $table->string('client_documment')->nullable();
            $table->string('client_address')->nullable();
            $table->string('client_address_city')->nullable();
            $table->string('client_address_comp')->nullable();
            $table->string('client_address_district')->nullable();
            $table->string('client_address_number')->nullable();
            $table->string('client_address_state')->nullable();
            $table->string('client_address_country')->nullable();
            $table->string('client_zip_code')->nullable();
            $table->string('producer_company_name')->nullable();
            $table->string('producer_trade_name')->nullable();
            $table->string('producer_document')->nullable();
            $table->string('producer_state_tax_number')->nullable();
            $table->string('producer_address')->nullable();
            $table->string('producer_address_city')->nullable();
            $table->string('producer_address_comp')->nullable();
            $table->string('producer_address_district')->nullable();
            $table->string('producer_address_number')->nullable();
            $table->string('producer_address_state')->nullable();
            $table->string('producer_zip_code')->nullable();
            $table->string('producer_tel')->nullable();
            $table->string('commissions_release_date')->nullable();
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
        Schema::dropIfExists('sales');
    }
}

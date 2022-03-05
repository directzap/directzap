<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'plan_key',
        'plan_amount',
        'product_name',
        'product_key',
        'product_type',
        'trans_createdate',
        'trans_updatedate',
        'trans_key',
        'trans_status',
        'trans_status_code',
        'trans_value',
        'trans_total_value',
        'trans_discount_value',
        'trans_freight',
        'trans_freight_type',
        'trans_payment',
        'trans_payment_line',
        'trans_payment_bar_code',
        'trans_payment_url',
        'trans_payment_date',
        'trans_installments',
        'trans_qrcode_pix',
        'trans_url_pix',
        'parent_sale',
        'is_upsell',
        'have_order_bump',
        'subs_key',
        'tracking_code',
        'shipping_company',
        'postback_type',
        'client_name',
        'client_email',
        'client_cel',
        'client_documment',
        'client_address',
        'client_address_city',
        'client_address_comp',
        'client_address_district',
        'client_address_number',
        'client_address_state',
        'client_address_country',
        'client_zip_code',
        'producer_company_name',
        'producer_trade_name',
        'producer_document',
        'producer_state_tax_number',
        'producer_address',
        'producer_address_city',
        'producer_address_comp',
        'producer_address_district',
        'producer_address_number',
        'producer_address_state',
        'producer_zip_code',
        'producer_tel',
        'commissions_release_date',
    ];
}

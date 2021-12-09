<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@directzap.com',
            'password'  => bcrypt('102030'),
            'type'      => 'admin',
            'token_braip' => "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImViY2Y5MDU2Y2VhYzljNDc3MTVkMjAxODE3NzY2Y2E2ZGMwMWE0Y2Q1OWJhNzBiNGZmYzQ5ZDNiODI0MzkyMDA2N2Q1OTlhYTlhOTRlM2JjIn0.eyJhdWQiOiI0NjQ3MyIsImp0aSI6ImViY2Y5MDU2Y2VhYzljNDc3MTVkMjAxODE3NzY2Y2E2ZGMwMWE0Y2Q1OWJhNzBiNGZmYzQ5ZDNiODI0MzkyMDA2N2Q1OTlhYTlhOTRlM2JjIiwiaWF0IjoxNjM1MzY0Mjg1LCJuYmYiOjE2MzUzNjQyODUsImV4cCI6MTY2NjkwMDI4NSwic3ViIjoiNzA3NTE0Iiwic2NvcGVzIjpbXX0.EdTMVcpHWvL4jubr_CE3uDNePs9yZJ0p3ktaSmtVNvc2cbqYj0P2OxQP5XMEelmNDiNMhtbfG2cellOPfoDC4fJ0WC7xVBdqS6vWdnZ0NDSxm_mfJOPoukaB9xpCNQkmN70_mIPZDyUQ-xfpg4tGfGTBHdtk2xtKl_w7dmxRJuIBJPijm8paKU21bQ0pRI52QuzcfusR7xpeotG6OJYg2slebAA6kL4fPEMe9pAB_abGcg-LubHkU5-y2xoROp9gTm5uof4VI_j1YN9qY7onvNYjetzFvGMX7Syqo_SK8w2Qqrko3Y5rX5LXjmNDAdI7DqnIYyztwWl2-ySrNvu409MMSZvfMfv9dPrn4y0Pai2v_3NzqB_dujsimcfqW2otqvl97rOCAtnsM7H__eMhqPiLYrzdMyllzoub1dXt1i20JfkCtELF5oeg88VSZWMD-D0OQciiN8HmjlwqSMvfy_qI8z-P-X2_fhMX_meXA_HNZ9Il7WbxstIi58Lu5DE9H7wWhyuTt8Dn1WsTEkU2tvgyTWaPPZRWgNTdmuOJH4z934n13Mqa0eyMnA4eIGe8YbsccOdhFNU9W2heBz5xKSR0NTM6HUWpfuICGilVAUQG-vdYHlMPsgGT3h-p9mDO6qXHz0QFU8Gz867mXRJIVai8-s8W_NwrQde4SVGvzkY"
        ]);
        User::create([
            'name'      => 'user',
            'email'     => 'user@directzap.com',
            'password'  => bcrypt('102030'),
            'type'      => 'user',
        ]);
    }
}

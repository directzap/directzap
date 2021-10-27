@extends('layout.app')

@section('content')
    <form action="https://ev.braip.com/api/vendas" method="get">
        <div class="row">
            <div class="col-md-5">
                <label>Token</label>
                <input type="text" name="token" id="" class="form-control"
                    value="df351daaec0b5f2dc849f240f8fdbda3f608dcce">
            </div>
        </div>
        <input type="button" onclick="braip()" value="braip">
    </form>
@endsection
@section('js')
    <script>
        function destroy(id) {
            $.ajax({
                type: "DELETE",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                url: 'colaboradores/' + id,
                success: function(response) {
                    location.reload();
                }
            });
        }


        function braip() {
            var token =
                "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImViY2Y5MDU2Y2VhYzljNDc3MTVkMjAxODE3NzY2Y2E2ZGMwMWE0Y2Q1OWJhNzBiNGZmYzQ5ZDNiODI0MzkyMDA2N2Q1OTlhYTlhOTRlM2JjIn0.eyJhdWQiOiI0NjQ3MyIsImp0aSI6ImViY2Y5MDU2Y2VhYzljNDc3MTVkMjAxODE3NzY2Y2E2ZGMwMWE0Y2Q1OWJhNzBiNGZmYzQ5ZDNiODI0MzkyMDA2N2Q1OTlhYTlhOTRlM2JjIiwiaWF0IjoxNjM1MzY0Mjg1LCJuYmYiOjE2MzUzNjQyODUsImV4cCI6MTY2NjkwMDI4NSwic3ViIjoiNzA3NTE0Iiwic2NvcGVzIjpbXX0.EdTMVcpHWvL4jubr_CE3uDNePs9yZJ0p3ktaSmtVNvc2cbqYj0P2OxQP5XMEelmNDiNMhtbfG2cellOPfoDC4fJ0WC7xVBdqS6vWdnZ0NDSxm_mfJOPoukaB9xpCNQkmN70_mIPZDyUQ-xfpg4tGfGTBHdtk2xtKl_w7dmxRJuIBJPijm8paKU21bQ0pRI52QuzcfusR7xpeotG6OJYg2slebAA6kL4fPEMe9pAB_abGcg-LubHkU5-y2xoROp9gTm5uof4VI_j1YN9qY7onvNYjetzFvGMX7Syqo_SK8w2Qqrko3Y5rX5LXjmNDAdI7DqnIYyztwWl2-ySrNvu409MMSZvfMfv9dPrn4y0Pai2v_3NzqB_dujsimcfqW2otqvl97rOCAtnsM7H__eMhqPiLYrzdMyllzoub1dXt1i20JfkCtELF5oeg88VSZWMD-D0OQciiN8HmjlwqSMvfy_qI8z-P-X2_fhMX_meXA_HNZ9Il7WbxstIi58Lu5DE9H7wWhyuTt8Dn1WsTEkU2tvgyTWaPPZRWgNTdmuOJH4z934n13Mqa0eyMnA4eIGe8YbsccOdhFNU9W2heBz5xKSR0NTM6HUWpfuICGilVAUQG-vdYHlMPsgGT3h-p9mDO6qXHz0QFU8Gz867mXRJIVai8-s8W_NwrQde4SVGvzkY";
            $.ajax({
                type: "GET",
                dataType: "json",
                // crossDomain: true,
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Authorization': token,
                },
                url: 'https://ev.braip.com/api/vendas',
                data: {
                    'date_min': '2021-10-10 10:00:00',
                    'date_max': '2021-10-20 10:00:00'
                },
                success: function(response) {
                    console.log(response);;
                },

            });
        }
    </script>
@endsection

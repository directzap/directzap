@extends('layout.app')

@section('content')
    <form action="https://ev.braip.com/api/vendas" method="get">
        <div class="row">
            <div class="col-md-5">
                <label>Token</label>
                <input type="text" name="token" id="" class="form-control" value="df351daaec0b5f2dc849f240f8fdbda3f608dcce">
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
            var token ="Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjE1YmM4NjdjZWMwYjQzMmI0YzA1ZDNmNjBiZDk2NGFmZmQ1YzA3YjBlNDE1N2ZkMjIzYmE3MTBmNDM3YzcxMGYwYjFmZDE0NjRmNDFmYzljIn0.eyJhdWQiOiI0NjI3MyIsImp0aSI6IjE1YmM4NjdjZWMwYjQzMmI0YzA1ZDNmNjBiZDk2NGFmZmQ1YzA3YjBlNDE1N2ZkMjIzYmE3MTBmNDM3YzcxMGYwYjFmZDE0NjRmNDFmYzljIiwiaWF0IjoxNjM1MjcyNTg3LCJuYmYiOjE2MzUyNzI1ODcsImV4cCI6MTY2NjgwODU4Nywic3ViIjoiMzM4OTQ0MiIsInNjb3BlcyI6W119.SMVyxbINeWtV9-AWvCloGGn74sBS4z-HmtpTa2k_Sqf9epyZ2u6qkTWjWhCIyF1ZS4ia-RpuEinpmFs9J3uRgp1C-HmuvH_JWTiFjIHNupWCKaJtq35Z8JWjE-4Q2rGtuXnxArdzG4f80r2Dnuadp-rFQbxVMfVgVWuay2uXBtse0WGsaPK8zrj855i8VP1kAN30NNgm1Bl9AHIUfNDjWibCD28oSqr1HxV9JKSrPFdNMEg5XXOvoH9H1B51urA93A-slSkCMC9vYU1PMTIQ8LqQxsVLWa9eI7iBNHvmZCBVPH7Xg_qRv3s-3E5ABz9H4u5LUOGxo3-M-lWYeFZOEv6Rq7vHTbmITBW8KI4oAoG2Rb2SEim-32sVmJ8kEQCyakAc35qG9jurqQXBG9f3p2vdd9Bceuz0jfJF-KGiSnROkWxNFbmB1YZU-fPtyiuA8JY2W6pbGj6xB4YDBwYs4f-QQgnIe5ECoHBgJuTkJxmuCWwWq2FM8JfQ3RQManDM41Lv1yoEBsqn6z9kWpC7Tvs1k5l3GHA40F6pCVoTMB26E9g4sY9nLx6ggIGh042EgUw2EOOc9SnZ_epeoKtpxKCfP5mp-jz7YcUoeqYc31GvjBxsf32gkJJr89iY8nldvZNbf_4acxuJU6Hz3NYJzCYEXvXNqgCW90IbOEM1xv4";
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'Authorization': token,
                },
                url: 'https://ev.braip.com/api/v1/producers/products',
                success: function(response) {
                    console.log(response);;
                }
            });
        }
    </script>
@endsection

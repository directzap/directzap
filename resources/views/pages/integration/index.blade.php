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
            var token = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5YjhlNGQ5MTU4MWM3YWNiYTM4Y2JlZGQ2ZDU5YTk3ZmE1MGU4ZDBmMjllOTM0Mzg4YmRhZjA3NzE4OWIxZDFlMGMxYWIwODdkZDVmNTA4In0.eyJhdWQiOiI0MjU4NSIsImp0aSI6Ijc5YjhlNGQ5MTU4MWM3YWNiYTM4Y2JlZGQ2ZDU5YTk3ZmE1MGU4ZDBmMjllOTM0Mzg4YmRhZjA3NzE4OWIxZDFlMGMxYWIwODdkZDVmNTA4IiwiaWF0IjoxNjI4ODExMDQwLCJuYmYiOjE2Mjg4MTEwNDAsImV4cCI6MTY2MDM0NzA0MCwic3ViIjoiMzM4OTQ0MiIsInNjb3BlcyI6W119.muNthMtepg5rfRKg2J9XGbcUErqPRf6Qwg3DLoJcjbzWFgj7Cmke6LvQgfm1FEUTZQ7n6u9mZBPN7JqojcN7lURyTg0lPiFCTrkqL5MOI5AFiGt4NIMA4cpUCN6fbV6UL6ZAyHZSXxBlJHPkuMNTzINxK6RVGhGLmB8qvIv9gSzY7WgLz_2eddyrCIxQwPYOPQhAuBWTHRBwV570pMkujvtnBmwmm9r7a-FmQATSdoQqxK4ZUjJpX7AVZzNdn41WcWv9sddDCF5JtzJRLhUPNNQE8JbxgDT-ccRPLDfXRNG8772wbFzkokxn4s08SUaVBUnwJ9x2F4xJSRP9hBF3dWJZ1Hg30isCHctDSvBpahzAvXl7bMgJUND6fJU3_hrjBImVH11fXQHzGMO8f9tdlpK2reAx_7JcbVM01N5jpuQj2MgIKo3UNE1jJLZ8114efx9OS2lV_oJuHVMnRSimC_D5vUJL6HCBVnwn5vFTC42caR08Cq615rseTmpSleXIYToszGHMdUzC6FLg6W_O3Lt_SNuxaIScWQEJvEg_3_qE-ADszWH_KEKLCLJPG4m8Uczwpl0XC2rU12lpaG84BeA_wnwNFlWAbTtfu60JiV5ZJ3IBQ18PKFAL2PYIOVk2mnJlCtN968C874yywER0dFg9LG7xfUUdSeekdQS7aBg";
            $.ajax({
                type: "GET",
                dataType: "json",
                data: {
                    "authorization": token,
                },
                url: 'https://ev.braip.com/api/vendas',
                success: function(response) {
                    console.log(response);;
                }
            });
        }
    </script>
@endsection

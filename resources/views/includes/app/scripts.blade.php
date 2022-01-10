<!--- Chamada do modais do sidebar --->
<script>
    function showDistriCod() {
        $('#distriCod').modal('show');
    }

    function showGerarCod() {
        $('#gerarCod').modal('show');
    }

    function showAddPixel() {
        $('#pixelModal').modal('show');
    }
</script>

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', 'PIXELAQUI');
    fbq('track', 'PageView');
</script>

<noscript>
    <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=PIXELAQUI&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

<!--- Script Gerar Código aleatório  -->
<script>
    function makeCod() {
        let chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*_-?/"
        let idLength = 25;
        let codigo = "";

        for (let i = 0; i < idLength; i++) {
            let randomNumber = Math.floor(Math.random() * idLength);
            codigo += chars.substring(randomNumber, randomNumber + 1);
        }
        document.getElementById("code").value = codigo;
    }
</script>

<!--- Script Copiar Links  -->
<script>
    function copyCodFace() {
        let copyCodText = document.querySelector('#link-face-ads');
        copyCodText.select();
        copyCodText.setSelectionRange(0, 9999);
        document.execCommand("copy");
    }

    function copyCodParceria() {
        let copyCodText = document.querySelector('#link-parceria');
        copyCodText.select();
        copyCodText.setSelectionRange(0, 9999);
        document.execCommand("copy");
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!--- Script Talk Api --->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6028aaec9c4f165d47c311fc/1eufdnb4p';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<!--- Script datatable --->
<script>
    $(document).ready(function() {
        $.noConflict();
        $('#colabs-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
            }
        }).fnDestroy();
        $('#admin_table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
            }
        });
        $('#table_products').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
            }
        });
        $('table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>

<script>
    /* const check = document.querySelector('.btn-sidebar')
            $('.btn-sidebar').on('click', function() {
                $(this).addClass('active');
                console.log('Ativou');
            });

        const btnsPage = document.querySelectorAll('.btn-page')
            */
</script>

<!-- Icones Feather -->
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 18,
                height: 18
            });
        }
    })
</script>
<script>
    /*
        $( "#com_precell" ).prop( "checked", false );

        if( $( "#com_precell" ).prop( "checked", true) ){
            $(".dominios-select").css("display", "block");
            $( "#sem_precell" ).prop( "checked", false );
        } else if($( "#com_precell" ).prop( "checked", false)){
            $(".dominios-select").css("display", "none");
            $( "#com_precell" ).prop( "checked", false );
        }
*/
    const precell = document.querySelector('#com_precell');
    const dominios = document.querySelector('.dominios-select');
    $('#sem_precell').prop('checked') == true;
    $('#com_precell').on('click', function() {
        if ($("#com_precell").prop('checked') == true) {
            $('.dominios-select').addClass('on');
            $('#sem_precell').prop('checked') == false;
            console.log('Ativou Precell');
        }
    });
    $('#sem_precell').on('click', function() {
        if ($("#sem_precell").prop('checked') == true) {
            $('#com_precell').prop('checked') == false;
            $('.dominios-select').removeClass('on');
            console.log('Removeu Precell');
        }
    });
</script>



<!-- Script Para copiar texto ( botão do menu) -->
<script>
    'use strict';

    var userText = $('#copy-to-clipboard-input');
    var btnCopy = $('#btn-copy'),
        isRtl = $('html').attr('data-textdirection') === 'rtl';

    // copy text on click
    btnCopy.on('click', function() {
        userText.select();
        document.execCommand('copy');
        toastr['success']('', 'Copied to clipboard!', {
            rtl: isRtl
        });
    });
</script>

<script>

    $( "#dropdown-notification" ).click(function() {
        $("#dropdown-notification").addClass( "show" );
        console.log("Clicou na notificação");
    });

</script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>

<!-- BEGIN Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
<!-- End Bootstrap -->

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('assets/vendors/js/charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/scripts/charts/chart-apex.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{--
<script src="{{ asset('assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
 <script src="{{asset('assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
<script src="{{ asset('assets/js/scripts/extensions/ext-component-toastr.min.js') }}"></script>--}}
<!-- END: Page JS-->

<script src="{{ asset('assets/kai/assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/kai/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/kai/assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('assets/kai/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('assets/kai/assets/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('assets/kai/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('assets/kai/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/kai/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('assets/kai/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('assets/kai/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/kai/assets/js/plugin/jsvectormap/world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('assets/kai/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Kaiadmin JS -->
<script src="{{ asset('assets/kai/assets/js/kaiadmin.min.js') }}"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/kai/assets/js/setting-demo.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@include('sweetalert::alert')

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.btn-add').addEventListener('click', function() {
            const tbody = document.querySelector('table tbody');
            const tr = document.createElement('tr');

            tr.innerHTML = `
                <td>
                    <select name='id_barang[]' class='form-control select-barang'>
                        <option value='' hidden>Select Barang</option>
                        @foreach ($barang as $item)
                            <option value='{{ $item->id }}'>{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </td>
                <td><input type="number" class="form-control jumlah" name="jumlah[]" oninput="calculateTotal()"></td>
                <td><input type="number" class="form-control harga" name="harga[]" oninput="calculateTotal()"></td>
                <td><input type="text" class="form-control total-harga" name="total_harga[]" readonly></td>
                <td><button type="button" class="btn btn-danger btn-sm btn-remove"><i class="fas fa-trash-alt"> Remove</i></button></td>
            `;

            tbody.appendChild(tr);

            tr.querySelector('.btn-remove').addEventListener('click', function() {
                tr.remove();
                calculateTotal();
            });
        });
    });

    function calculateTotal() {
        const rows = document.querySelectorAll('table tbody tr');
        let total = 0;

        rows.forEach(row => {
            const jumlah = row.querySelector('.jumlah').value;
            const harga = row.querySelector('.harga').value;
            const totalHarga = row.querySelector('.total-harga');

            const subtotal = jumlah * harga;
            totalHarga.value = subtotal;
            total += subtotal;
        });

        document.getElementById('total').value = total;
        calculateChange();
    }

    function calculateChange() {
        const total = parseFloat(document.getElementById('total').value);
        const bayar = parseFloat(document.getElementById('bayar').value);
        const kembalian = bayar - total;

        document.getElementById('kembalian').value = kembalian;
    }

    function setHiddenValues() {
        document.getElementById('hidden_nominal_bayar').value = document.getElementById('bayar').value;
        document.getElementById('hidden_kembalian').value = document.getElementById('kembalian').value;
    }
</script>

<script>
    $(document).ready(function() {
        $('.show_confirm').click(function(event) {
            event.preventDefault(); // Prevent the default form submission

            let form = $(this).closest("form");
            let name = $(this).data("name");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "No, cancel!",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if user confirms
                }
            });
        });
    });
</script>














{{-- <script src="{{ asset('assets/kai/assets/js/demo.js') }}"></script>
<script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
</script> --}}

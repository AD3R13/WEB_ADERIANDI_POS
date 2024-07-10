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
    $('.btn-add').click(function() {
        let tbody = $('tbody');
        let newTr = "<tr>";
        newTr += "<td>";
        newTr += "<select name='id_barang[]' class='form-control' required>";
        newTr += "<option value='' selected hidden>Select barang</option>";
        @foreach ($barang as $item)
            newTr += "<option value='{{ $item->id }}'>{{ $item->nama_barang }}</option>";
        @endforeach
        newTr += "</select>";
        newTr += "</td>";
        newTr += "<td><input type='number' name='qty[]' class='form-control'></td>";
        newTr += "<td><input type='number' name='harga[]' class='form-control' readonly></td>";
        newTr += "<td><input type='number' name='total_harga[]' class='form-control' readonly></td>";
        newTr +=
            "<td><button type='button' class='btn btn-danger remove-row btn-round'><i class='fas fa-trash-alt'></i> Delete</button></td>";
        newTr += "</tr>";
        tbody.append(newTr);
    tbody.appendChild(newTr);
    });

    document.querySelector('tbody').addEventListener('change', function(event) {
      if (event.target.classList.contains('select-barang')) {
        let selectedBarang = barangData.find(item => item.id == event.target.value);
        let tr = event.target.closest('tr');
        tr.querySelector('.harga-input').value = selectedBarang.harga;
        tr.querySelector('.qty-input').value = 1;
        tr.querySelector('.total-harga-input').value = selectedBarang.harga;
        calculateTotalHarga();
      } else if (event.target.classList.contains('qty-input')) {
        let tr = event.target.closest('tr');
        let harga = tr.querySelector('.harga-input').value;
        let qty = event.target.value;
        tr.querySelector('.total-harga-input').value = harga * qty;
        calculateTotalHarga();
      }
    });

    document.querySelector('tbody').addEventListener('click', function(event) {
      if (event.target.classList.contains('remove-row')) {
        event.target.closest('tr').remove();
        calculateTotalHarga();
      }
    });

    document.querySelector('#hitung-kembalian').addEventListener('click', function() {
      let totalHarga = parseInt(document.querySelector('#total-harga').innerText);
      let nominalBayar = parseInt(document.querySelector('#nominal_bayar').value);
      let kembalian = nominalBayar - totalHarga;
      document.querySelector('#kembalian').innerText = kembalian;
      document.querySelector('#hidden_kembalian').value = kembalian;

    });

    function calculateTotalHarga() {
      let totalHarga = 0;
      document.querySelectorAll('.total-harga-input').forEach(input => {
        totalHarga += parseInt(input.value);
      });
      document.querySelector('#total-harga').innerText = totalHarga;
      // document.querySelector('#total-harga').value = totalHarga;
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

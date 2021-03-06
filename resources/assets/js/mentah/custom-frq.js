Vue.component('box-parkir', require('./../components/LahanParkir.vue'));
Vue.component('bar-statistik', require('./../components/BarStatistik.vue'));

var vm = new Vue({
  el: '#app',
});

$(document).ready(function() {
  $('#table_id').DataTable();
});
$('#table_id').DataTable({
  responsive: true,
  language: {
    processing: "Sedang memproses...",
    search: "Cari Data&nbsp&nbsp;:&nbsp",
    lengthMenu: "Tampilkan _MENU_ data",
    info: "(&nbsp Menampilkan _START_ sampai _END_, dari _TOTAL_ data &nbsp)",
    infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
    infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
    infoPostFix: "",
    zeroRecords: "Tidak ditemukan data yang sesuai",
    paginate: {
      previous: "Sebelumnya&nbsp",
      next: "&nbspSelanjutnya",
    }
  }
});

import Chart from 'chart.js';

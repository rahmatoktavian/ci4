<div id="chart"></div>


<!-- online -->
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->

<!-- offline -->
<script src="<?=base_url('asset/js/jquery-3.6.1.min.js')?>"></script>
<script src="<?=base_url('asset/js/apexcharts.js')?>"></script>

<script>
  var options = {
    //series: [44, 55, 41, 17, 15],
    series: [<?php foreach ($list as $row):?><?= $row['stok']?>,<?php endforeach ?>],
    chart: {
      type: 'donut',
      width: '50%',
    },
    //labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],    
    labels: [<?php foreach ($list as $row):?>"<?= $row['judul']?>",<?php endforeach ?>],
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>
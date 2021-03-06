<section>
	<div class="container">        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<div id="myfirstchart" style="height: 250px;"></div>
        </div>
  	</div>
</section>
<script src="<?php echo base_url('assets/js/plugins/morris/raphael.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js') ?>"></script>
<script>
//Morris
new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    <?php foreach ($penjualan->result() as $row): ?>
    {
      tgl: '<?= $row->id ?>',
      value: '<?= $row->total_harga ?>'
    },
    <?php endforeach ?>
/*   { year: '2014', value: 20 },
    { year: '2015', value: 25 },
    { year: '2016', value: 15 },
    { year: '2017', value: 25 },
    { year: '2018', value: 30 } */
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'tgl',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Total Jual'],
});
</script>
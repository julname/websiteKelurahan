			<footer class="main-footer">
				<div class="pull-right hidden-xs">
			  	<b>Versi</b> <?= AmbilVersi()?>
				</div>
				<strong>Aplikasi <a href="https://github.com/OpenSID/OpenSID" target="_blank"> OpenSID</a>, dikembangkan oleh <a href="https://www.facebook.com/groups/OpenSID/" target="_blank">Komunitas OpenSID</a>.</strong>
			</footer>
		</div>

		<!-- jQuery 3 -->
		<script src="<?= base_url()?>assets/bootstrap/js/jquery.min.js"></script>
		<!-- Jquery UI -->
		<script src="<?= base_url()?>assets/bootstrap/js/jquery-ui.min.js"></script>
		<script src="<?= base_url()?>assets/bootstrap/js/jquery.ui.autocomplete.scroll.min.js"></script>

		<script src="<?= base_url()?>assets/bootstrap/js/moment.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- Select2 -->
		<script src="<?= base_url()?>assets/bootstrap/js/select2.full.min.js"></script>
		<!-- DataTables -->
		<script src="<?= base_url()?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>assets/bootstrap/js/dataTables.bootstrap.min.js"></script>
		<!-- bootstrap color picker -->
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap-colorpicker.min.js"></script>
		<!-- bootstrap Date time picker -->
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?= base_url()?>assets/bootstrap/js/id.js"></script>
		<!-- bootstrap Date picker -->
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap-datepicker.min.js"></script>
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap-datepicker.id.min.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="<?= base_url()?>assets/bootstrap/js/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- Slimscroll -->
		<script src="<?= base_url()?>assets/bootstrap/js/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="<?= base_url()?>assets/bootstrap/js/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url()?>assets/js/adminlte.min.js"></script>
		<script src="<?= base_url()?>assets/js/validasi.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
		<script src="<?= base_url()?>assets/js/localization/messages_id.js"></script>
		<!-- Numeral js -->
		<script src="<?= base_url()?>assets/js/numeral.min.js"></script>
		<!-- Script-->
		<script src="<?= base_url()?>assets/js/script.js"></script>

		<!-- NOTIFICATION-->
		<script type="text/javascript">

			$('document').ready(function()
			{

				setTimeout(function()
				{
					if ( $("#b_permohonan_surat").length )
					{
						$("#b_permohonan_surat").load("<?= site_url()?>notif/permohonan_surat");
						var refreshPermohonan = setInterval(function()
						{
							$("#b_permohonan_surat").load("<?= site_url()?>notif/permohonan_surat");
						}, 10000);
					}
					if ( $("#b_komentar").length )
					{
						$("#b_komentar").load("<?= site_url()?>notif/komentar");
						var refreshKomentar = setInterval(function()
						{
							$("#b_komentar").load("<?= site_url()?>notif/komentar");
						}, 10000);
					}
					if ( $("#b_inbox").length )
					{
						$("#b_inbox").load("<?= site_url()?>notif/inbox");
						var refreshInbox = setInterval(function()
						{
							$("#b_inbox").load("<?= site_url()?>notif/inbox");
						}, 10000);
					}
				}, 500);
				if ($('#success-code').val() == 1)
				{
					notify = 'success';
					notify_msg = 'Data berhasil disimpan';
				}
				else if ($('#success-code').val() == -1)
				{
					notify = 'error';
					notify_msg = 'Data gagal disimpan <?= $_SESSION["error_msg"]?>';
				}
				else if ($('#success-code').val() == -2)
				{
					notify = 'error';
					notify_msg = 'Data gagal disimpan, nama id sudah ada!';
				}
				else if ($('#success-code').val() == -3)
				{
					notify = 'error';
					notify_msg = 'Data gagal disimpan, nama id sudah ada!';
				}
				else if ($('#success-code').val() == 4)
				{
					notify = 'success';
					notify_msg = 'Data berhasil dihapus';
				}
				else if ($('#success-code').val() == -4)
				{
					notify = 'error';
					notify_msg = 'Data gagal dihapus';
				}
				else
				{
					notify = '';
					notify_msg = '';
				}
				notification(notify, notify_msg);
				$('#success-code').val('');
			});
		</script>
		<?php $_SESSION['success']=0; ?>

		<!-- Notifikasi PIN Warga -->
		<script type="text/javascript">
			<?php if ($_SESSION['pin']): ?>
				$(window).on('load', function()
				{
					$('#pinBox').modal('show');
				});
				<?php unset($_SESSION['pin']) ?>
			<?php endif ?>
		</script>
	</body>
</html>

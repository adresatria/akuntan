<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="PHP Simple Login with CodeIgniter Framework">
	<meta name="author" content="">

	<title>Hospital Report - <?= ($page['title'] ?? 'Undefined'); ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= site_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= site_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url(); ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-code"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Akuntan</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Main Navigation
			</div>

			<!-- Nav Item - Homepages -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url(); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Homepages</span>
				</a>
			</li>

			<!-- Nav Item - Report -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url($uri = 'report'); ?>">
					<i class="fa fa-file"></i>
					<span>Report Hospital</span>
				</a>
			</li>

			<!-- Nav Item - Report -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url($uri = 'report_p'); ?>">
					<i class="fa fa-file"></i>
					<span>Report Pharmacy</span>
				</a>
			</li>

			<!-- Nav Item - Report -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url(); ?>">
					<i class="fa fa-file"></i>
					<span>Report Lab</span>
				</a>
			</li>

			<!-- Nav Item - Logout -->
			<li class="nav-item">
				<a class="nav-link pb-0" href="<?= site_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-fw fa-sign-out-alt"></i>
					<span>Logout</span>
				</a>
			</li>

			<br>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ($user['username'] ?? 'Guest'); ?></span>
								<img class="img-profile rounded-circle" src="<?= site_url('public/img/avatar.jpg'); ?>">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= site_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800"><?= ($page['title'] ?? 'Undefined'); ?></h1>

					<?php if ($this->session->flashdata('success_message')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('success_message'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php elseif ($this->session->flashdata('error_message')) : ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error_message'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif; ?>

					<div>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/show_tree" target="_blank">Chart Of Account</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/debit_voucher" target="_blank">Debit Voucher</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/credit_voucher" target="_blank">Credit Voucher</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/contra_voucher" target="_blank">Contra Voucher</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/journal_voucher" target="_blank">Journal Voucher</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/aprove_v" target="_blank">Voucher Approval</a>
						<br></br>
						<h3>Account Report</h3>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/voucher_report" target="_blank">Voucher Report</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/cash_book" target="_blank">Cash Book</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/bank_book" target="_blank">Bank Book</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/general_ledger" target="_blank">General Ledger</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/trial_balance" target="_blank">Trial Balance</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/profit_loss_report" target="_blank">Profit Loss</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/cash_flow_report" target="_blank">Cash Flow</a>
						<br></br>
						<a href="<?php echo base_url(); ?>../Hospital_Automanager_v1.5/accounts/accounts/coa_print" target="_blank">Chart Of Account Print</a>
						<br></br>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Testing</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= site_url('logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>
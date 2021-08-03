<!doctype html>
<html lang="en">

<head>
	<title><?= $title ?? "Tools by Akang Programmer"; ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

	<link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1421454258856095749/JAwwl-9e_400x400.jpg" type="image/x-icon">
</head>

<body class="mx-5">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?=base_url();?>">Joki's Tools</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('dm-button');?>">Twitter DM Button</a>
				</li>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="https://twitter.com/AkangProgrammer" target="_blank">Creator</a>
						<a class="dropdown-item" href="https://s.id/DuQZG" target="_blank">Source Code</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<?php $this->load->view($content ?? 'template/blank'); ?>

	<?php $this->load->view('template/footer'); ?>


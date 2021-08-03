<h1>Twitter DM Button</h1>

<!-- <p>Get your Twitter ID <a href="https://tweeterid.com/" target="_blank">there</a></p> -->

<div class="card">
	<div class="card-header">
		Settings
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<form method="POST" action="">
					<fieldset>
						<div class="form-group">
							<label for="twitter_id">Twitter ID</label>
							<input type="number" class="form-control" id="twitter_id" name="twitter_id" placeholder="Your Tweeter ID" aria-describedby="idHelp" required>
							<small id="idHelp" class="form-text text-muted">Don't know your ID? Get your Twitter ID <a href="https://tweeterid.com/" target="_blank">here</a>.</small>
						</div>
						<div class="form-group">
							<label for="opening_text">Opening Text</label>
							<input type="text" class="form-control" id="opening_text" name="opening_text" aria-describedby="textHelp" placeholder="Your welcome text" required>
							<small id="textHelp" class="form-text text-muted">Please make it brief and crystal clear.</small>
						</div>
						<button type="submit" class="btn btn-success">Generate</button>
					</fieldset>
				</form>
			</div>
			<div class="col-md-6 mt-5 mt-sm-0">
				<fieldset>
					<div class="form-group">
						<label for="exampleInputPassword1">Result</label>
						<textarea class="form-control" id="exampleTextarea" rows="5" readonly disabled placeholder="Generate first"><?= $this->session->flashdata('result'); ?></textarea>
						<small id="idHelp" class="form-text text-muted">Save it somewhere safe.</small>
					</div>
					<a href="<?= base_url('dm-button'); ?>" class="btn btn-primary">Reset</a>
				</fieldset>
			</div>
		</div>
	</div>
	<div class="card-footer text-muted">
		Akang Programmer &copy; August 2021
	</div>
</div>

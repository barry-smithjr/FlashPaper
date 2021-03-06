<?php #defined('_DIRECT_ACCESS_CHECK') or exit(); ?>
		<div id="form-div">
			<form class="form-horizontal" action="" method="POST">
				<fieldset>
					<div>
						<label style="font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 30px; font-weight: bold;"><?php echo $message_title; ?></label>
						<div style="font-style: italic">
							<label style="font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 15px; font-weight: bold;"><?php echo $message_subtitle; ?></label>
						</div>
						<div style="margin-top:10px">
							<textarea class="form-control" id="secret" name="secret" rows="8" maxlength="<?php echo constant('MAX_INPUT_LENGTH') ?>" style="resize: vertical;" placeholder="Secret text..."><?php echo $template_text ?></textarea>
						</div>
					</div>
					<div class="form-group row float-right" style='padding-top: 3%'>
						<div class="col">
							<select id="select" name="select" class="custom-select" onChange="window.location.href=this.value">
								<option value="" selected disabled hidden>-- Select Template</option>
								<option value="./">No Template</option>
								<?php
									$templates = glob('templates/*.txt');
									foreach ($templates as $t) {
										$filename = basename($t, '.txt');
										$url_filename = urlencode($filename);
										echo "<option value=\"?t={$url_filename}\">{$filename}</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group row float-left" style='padding-top: 3%'>
						<div class="col">
							<button name="submit" type="submit" class="btn btn-primary">Encrypt Message</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>

		<br>

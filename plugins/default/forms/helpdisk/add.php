<script>
    tinymce.init({
        toolbar: "bold italic underline alignleft aligncenter alignright bullist numlist image media link unlink emoticons autoresize fullscreen insertdatetime print spellchecker preview",
        selector: '.ossn-editor',
        plugins: "code image media link emoticons fullscreen insertdatetime print spellchecker preview",
        convert_urls: false,
        relative_urls: false,
        language: "<?php echo ossn_site_settings('language'); ?>",
    });
</script>
<div>
	<label><?php echo ossn_print('helpdisk:title');?></label>
    <input type='text'class='form-control' name="title" />
</div>
<div>
	<label><?php echo ossn_print('helpdisk:content');?></label>
	<textarea name='content'class="ossn-editor"></textarea>

</div>
<div class="maring-top-10">
	<input class="btn btn-primary" type="submit" value="<?php echo ossn_print('helpdisk:submit');?>" id='submit'/>
</div>
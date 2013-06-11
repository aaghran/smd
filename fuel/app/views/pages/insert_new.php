<style>
    td{width: 400px}
    #form_desc{width: 500px; height: 100px }
</style>
<h3>Insert A New Organization</h3>
<hr />
<?php echo Form::open(); ?>
<table>
    <tr><td>
            <?php echo Form::label('Organization', 'name'); ?>
            <?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : '')); ?>
        </td>
        <td>
            <?php echo Form::label('Official Link', 'link'); ?>
            <?php echo Form::input('link', Input::post('link', isset($post) ? $post->link : '')); ?>
        </td>
    </tr>

    <tr><td style="width: 300px">
            <?php echo Form::label('Description', 'desc'); ?>
            <?php echo Form::textarea('desc', Input::post('desc', isset($post) ? $post->desc : '')); ?>
        </td>        
    </tr>
    <tr>
        <td>
            <?php echo Form::label('Facebook Link', 'fb_link'); ?>
            <?php echo Form::input('fb_link', Input::post('fb_link', isset($post) ? $post->fb_link : '')); ?>
        </td>
        <td>    
            <?php echo Form::label('Twitter Link', 'twitter_link'); ?>
            <?php echo Form::input('twitter_link', Input::post('twitter_link', isset($post) ? $post->twitter_link : '')); ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo Form::label('Google Plus Link', 'google_link'); ?>
            <?php echo Form::input('google_link', Input::post('google_link', isset($post) ? $post->google_link : '')); ?>
        </td>
        <td>
            <?php echo Form::label('LinkedIn Link', 'linkedin_link'); ?>
            <?php echo Form::input('linkedin_link', Input::post('linkedin_link', isset($post) ? $post->linkedin_link : '')); ?>
        </td>
    </tr>

    <tr>
        <td>
            <div class="actions">
                <?php echo Form::submit(); ?>
            </div>
        </td>
    </tr>
    <?php echo Form::close(); ?>
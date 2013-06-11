<style>
    th{text-align: left; border-bottom: 1px solid black}


</style>
<div class="span10 well">
    <h2 style="float: left"> Organization Details</h2>
    <h4 style="float: right"><a href="insert/0"> + ADD </a></h4>

    <br /><br /><hr />
    <table>
        <tr>
            <th>Name</th>
            <th>Official Link</th>
            <th>Facebook Link</th>
            <th>Twitter Link</th>
            <th>G+ Link</th>
            <th>LinkedIn Link</th>
        </tr>
        <?php
        foreach ($view as $data) :
            ?>

            <tr>    
                <td width="200px"><h4><?php echo $data['name']; ?></h4></td>
                <td width="200px"><h5><a href="<?php echo $data['link']; ?>">Official Link</a></h5></td>
                <td width="200px"><h5><?php
                        if (!$data['fb_url'] == 0) {
                            echo "<a href=" . $data['fb_url'] . ">Facebook</a>";
                        } else {
                            echo "<a href='insert/'" . $data['id'] . ">ADD</a>";
                        }
                        ?></h5></td>
                <td width="200px"><h5><?php
                        if (!$data['twitter_url'] == 0) {
                            echo "<a href=" . $data['twitter_url'] . ">Twitter</a>";
                        } else {
                            echo "<a href=\"insert/" . $data['id'] . "\" >ADD</a>";
                        }
                        ?> </h5></td>
                <td width="200px"><h5><?php
                        if (!$data['google_url'] == 0) {
                            echo "<a href=" . $data['google_url'] . ">Google Plus</a>";
                        } else {
                            echo "<a href=\"insert/" . $data['id'] . "\" >ADD</a>";
                        }
                        ?></h5></td>
                <td width="200px"><h5><?php
                        if (!$data['linkedin_url'] == 0) {
                            echo "<a href=" . $data['linkedin_url'] . ">Linkedin</a>";
                        } else {
                            echo "<a href=\"insert/" . $data['id'] . "\" >ADD</a>";
                        }
                        ?></h5></td>
            </tr>
        <?php endforeach;
        ?>
    </table>    
    <h4 style="float: right"><a href="insert/0"> + ADD </a></h4>
</div>
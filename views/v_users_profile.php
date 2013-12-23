

<div id="mainContent">
   <div id="controls">
      <?php if(!$user): ?>
      <?php Router::redirect("/users/login"); ?>
      <?php else: ?>
      <h2>This is <?=$user->first_name?>'s profile...</h2>
      <?php endif; ?>
      <?php if($user) echo $user->first_name;?>
      <?php echo ' '; ?>
      <?php if($user) echo $user->last_name; ?>
      <?php echo '<br/>'; ?>
      <?php if($user) echo 'email: '.$user->email; ?>
      <?php echo '<br/>'; ?>
      <?php if($user) echo 'About me: '.$user->bio; ?>
      <?php echo '<br/>'; ?>
      <?php if($user)
         $convert_time = $user->created;
         echo 'Member since: ';
         echo date('M d Y', $convert_time);
         ?>
      <h3>
         <a href='/users/editProfile' >Edit my profile</a>
      </h3>
      <hr/>
      <br/>
      <?php foreach($posts as $post): ?>
      <article>
         <p><?=$post['content']?></p>
         <h3>This post was created on:
            <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
            <?=Time::display($post['created'])?>
            </time>
            <a href='/posts/edit/<?=$post['post_id']; ?>' >Edit this post</a>
            <a href='/posts/delete/<?=$post['post_id']; ?>' >Delete this post</a>
         </h3>
      </article>
      <br/>
      <?php endforeach; ?>
      <br/>
      <h2>
         Why not follow someone? <a href='/posts/users'>Other Posters</a>
      </h2>
   </div>
   <div id="preview">
      <?php foreach($bibs as $bib): ?>
      <article>
         <table cellpadding="0" cellspacing="0" id="certificate">
            <tr>
               <td colspan="10" align="center">Congratulations on your Personal Records!</td>
            </tr>
            <tr>
               <td width="60">5k: </td>
               <td>
                  <?=$bib['5kPRH']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['5kPRM']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['5kPRS']?>
               </td>
               <td>
                  <?=$bib['5kRaceDetails']?>
               </td>
            </tr>
            <tr>
               <td width="60">10k: </td>
               <td>
                  <?=$bib['10kPRH']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['10kPRM']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['10kPRS']?>
               </td>
               <td>
                  <?=$bib['10kRaceDetails']?>
               </td>
            </tr>
            <tr>
               <td width="60">Half Marathon: </td>
               <td>
                  <?=$bib['halfMarathonPRH']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['halfMarathonPRM']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['halfMarathonPRS']?>
               </td>
               <td>
                  <?=$bib['halfMarathonRaceDetails']?>
               </td>
            </tr>
            <tr>
               <td width="60">Marathon: </td>
               <td>
                  <?=$bib['marathonPRH']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['marathonPRM']?>
               </td>
               <td>:</td>
               <td>
                  <?=$bib['marathonPRS']?>
               </td>
               <td>
                  <?=$bib['marathonRaceDetails']?>
               </td>
            </tr>
         </table>
      </article>
      <?php endforeach; ?>
   </div>
</div>


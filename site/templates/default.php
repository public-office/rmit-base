<?php snippet('header') ?>

<?php if(!$page->isHomePage()): ?>
  <h2><?php echo $page->title() ?></h2>
<?php endif ?>

<article>
  <?php echo $page->text()->kirbytext() ?>

  <?php if($page->images()->count()): ?>
    <div class="images">
      <?php foreach($page->images() as $image): ?>
        <p>
          <figure>
            <?php echo $image ?>
            <figcaption><?php echo $image->caption() ?></figcaption>
          </figure>
        </p>
      <?php endforeach ?>
    </div>
  <?php endif ?>
</article>

<?php if($page->children()->visible()->count() > 0): ?>
  <div class="subnav">
    <?php foreach($page->children() as $nav): ?>
      <a href="<?php echo $nav->url() ?>"><?php echo $nav->title() ?></a>
    <?php endforeach ?>
  </div>
<?php endif ?>

<?php snippet('footer') ?>

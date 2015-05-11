<? include('header.php') ?>
<?
include('classSimpleImage.php');
$simple_image = new SimpleImage();
$images       = array(
    'img/Prusanky-Nechory.jpg',
    'img/nechory02.jpg',
    'img/full_2e3693_f_normalFile22-nechory3.jpg',
    'img/1325331-img-inzerce-vinarsky-fond.jpg',
    'img/Prusanky-Nechory.jpg',
    'img/nechory02.jpg',
    'img/full_2e3693_f_normalFile22-nechory3.jpg',
    'img/1325331-img-inzerce-vinarsky-fond.jpg',
    'img/Prusanky-Nechory.jpg',
    'img/nechory02.jpg',
    'img/full_2e3693_f_normalFile22-nechory3.jpg',
    'img/1325331-img-inzerce-vinarsky-fond.jpg'
);
?>
<div class="container content">
    <div class="row page-title">
        <h2>Gallery</h2>
    </div>
    <div class="row">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget arcu fringilla, ornare urna vitae,
            vulputate libero. Nam commodo sapien mi, non iaculis turpis consequat eget. Donec sit amet dolor nulla.
            Fusce a posuere felis, in malesuada tellus. Nam nec convallis lorem. Nam porttitor blandit condimentum.
            Vivamus rhoncus ipsum in quam pellentesque, a condimentum velit consequat. Sed nunc lectus, volutpat sit
            amet erat ut, sagittis consequat sapien. Cras placerat, est non tristique accumsan, lectus libero
            dignissim lorem, sit amet elementum velit libero non nunc. Duis sed lobortis eros, nec congue
            libero.</p>
    </div>
    <div class="row">
        <? foreach ($images as $image) {
            $simple_image->load($image);
            $simple_image->resize(203, 140);
            $image_name        = $simple_image->getImageNameWithoutType();
            $image_type        = $simple_image->getImageType();
            $resize_image_name = $image_name . '-203*140.' . $image_type;
            $simple_image->save($resize_image_name);
            ?>
            <div class="col-xs-6 col-md-3">
                <a href="<?= $image ?>?v=1"
                   class="thumbnail fancybox" rel="group">
                    <img alt=""
                         src="<?= $resize_image_name ?>?v=1" width="203" height="140">
                </a>
            </div>
        <? } ?>
    </div>
    <nav class="nav-pagination">
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
        </ul>
    </nav>
</div>
</div>
</body>
</html>
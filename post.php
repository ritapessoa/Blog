<!-- Inclusão do cabeçalho -->
<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
        <p id="post-description"><?php echo $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?php echo $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas totam minima voluptate dicta ipsum possimus. Totam, officia officiis. Aperiam maxime, magni at modi tempora neque animi delectus quos accusamus soluta!
            Sequi officiis natus eius enim animi nulla corrupti temporibus fugiat repellendus! Assumenda quae nesciunt delectus libero exercitationem quaerat in eos vitae, iste explicabo blanditiis architecto ex ullam veritatis vel accusamus.
            Eaque suscipit vel porro deserunt facilis incidunt consequatur placeat repellendus mollitia repudiandae voluptatum hic, aperiam vitae recusandae quia expedita libero. Ea aspernatur eveniet suscipit mollitia animi ratione dicta quod minus.
            At accusamus qui, recusandae laudantium eum, non corporis rerum magni, esse ut quas perferendis. Exercitationem minus tempore error consequatur sequi architecto possimus quis quasi nihil. Dolorem ullam id voluptates in?
            Sit nihil placeat nulla atque expedita rerum est eius necessitatibus! Nulla debitis neque itaque saepe. Soluta, sit quae doloribus ut earum commodi harum fugit itaque voluptatem id molestiae voluptatibus voluptatum.</p>
        <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas totam minima voluptate dicta ipsum possimus. Totam, officia officiis. Aperiam maxime, magni at modi tempora neque animi delectus quos accusamus soluta!
            Sequi officiis natus eius enim animi nulla corrupti temporibus fugiat repellendus! Assumenda quae nesciunt delectus libero exercitationem quaerat in eos vitae, iste explicabo blanditiis architecto ex ullam veritatis vel accusamus.
            Eaque suscipit vel porro deserunt facilis incidunt consequatur placeat repellendus mollitia repudiandae voluptatum hic, aperiam vitae recusandae quia expedita libero. Ea aspernatur eveniet suscipit mollitia animi ratione dicta quod minus.
            At accusamus qui, recusandae laudantium eum, non corporis rerum magni, esse ut quas perferendis. Exercitationem minus tempore error consequatur sequi architecto possimus quis quasi nihil. Dolorem ullam id voluptates in?
            Sit nihil placeat nulla atque expedita rerum est eius necessitatibus! Nulla debitis neque itaque saepe. Soluta, sit quae doloribus ut earum commodi harum fugit itaque voluptatem id molestiae voluptatibus voluptatum.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<h1><?php echo $currentPost['title'] ?></h1>
<!-- Inclusão do rodapé -->
<?php
include_once("templates/footer.php")
?>

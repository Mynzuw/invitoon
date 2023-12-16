
    <?php 
        include("header.php");
        include("koneksi.php");
        $chapter_id=0;
        if (isset($_GET["chapter_id"])) {
            $chapter_id = $_GET["chapter_id"];
            $chapter_id = mysqli_real_escape_string($conn, $chapter_id);
        }
        
 $sql = "SELECT * FROM content WHERE chapter_id=$chapter_id";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="grid grid-cols-1 lg:grid-cols-3 bg-gray-900">
        <div class="hidden lg:block">

        </div>
        <div>
     
         <img src="content/<?= $row["content"] ?>" alt="">
        </div>
      
    <div class="hidden lg:block">

    </div>
    
        
    </div>
      
<?php
 }
}
mysqli_close($conn);
?>
    

   <!--  <div class="grid grid-cols-3 bg-gray-900">
        <div>

        </div>
        <div>
         <img src="01.webp" alt="">
        </div>
        <div>
                        <button
                type="button"
                data-te-ripple-init
                data-te-ripple-color="light"
                class="!fixed bottom-5 right-5 hidden rounded-full bg-red-600 p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg"
                id="btn-back-to-top">
                <svg
                    aria-hidden="true"
                    focusable="false"
                    data-prefix="fas"
                    class="h-4 w-4"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                    fill="currentColor"
                    d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
                </svg>
                </button>

         
                <div
                class="container mx-auto mt-4 text-center text-neutral-800 dark:text-white"
                style="height: 2000px">
                <p class="mb-4">
                    Start scrolling the page and a strong
                    <strong>"Back to top" button </strong> will appear in the
                    <strong>bottom right corner</strong> of the screen.
                </p>
                <p>Click this button and you will be taken to the top of the page.</p>
                </div>
        </div>
    <div>

    </div>
    
        
    </div> -->

    
<?php
  
  include "koneksi.php";
  include "controllers/fungsiWaktu.php";
  $sql = "SELECT comments.id, users.user_id as user_id, users.username, comments.comment_text, comments.created_at
  FROM comments
  LEFT JOIN users ON comments.user_id = users.user_id
  WHERE comments.parent_comment_id IS NULL AND chapter_id = $chapter_id
  ORDER BY comments.created_at DESC";

$result = $conn->query($sql);
$jumlahKomen = mysqli_num_rows($result);
  

?>
<section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased" id="komen">
  <div class="max-w-2xl mx-auto px-4">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Ulasan (<?= $jumlahKomen?>)</h2>
    </div> <?php 
     if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) 
     {
        ?>
    <form class="mb-6" method="POST" action="controllers/proses_tambah_komen.php">
    <input name="chapter_id" value="<?php echo $chapter_id ?>"  hidden />
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" name="main_comment_text" rows="6"
                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                placeholder="Write a comment..." required onclick=></textarea>
        </div>
        <button type="submit"
            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Post comment
        </button>
    </form>
    <?php } else { ?>
        <div class="py-2 px-3" id="login-button">
                <button type="button" data-modal-target="login-modal" data-modal-toggle="login-modal" class="login-button bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-4 border border-blue-700 rounded">Masuk atau Daftar untuk menulis ulasan</button>
            </div>
    <?php
    }

   

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
        <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><?= $row['username']?></p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                        title="February 8th, 2022"><?= time_elapsed_string($row['created_at'])?></time></p>
            </div>
<?php
 if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    if ($_SESSION['username'] == $row['username']) { 
?>
            <button id="dropdownComment<?= $row['id']?>Button" data-dropdown-toggle="dropdownComment<?= $row['id']?>"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                </svg>
                <span class="sr-only">Comment settings</span>
            </button>
            <?php
    }
}
?>
            <!-- Dropdown menu -->
            <div id="dropdownComment<?= $row['id']?>"
                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="controllers/proses_hapus_komen.php?delete_comment_id=<?= $row['id']?>"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                    </li>
                </ul>
            </div>
        </footer>
   
        <p class="text-gray-500 dark:text-gray-400"><?= $row['comment_text']?></p>
        <div class="flex items-center mt-4 space-x-4">
    <button type="button" class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium reply-button">
        <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
        </svg>
        Reply
    </button>
</div>

<form class="mt-5 mb-6 hidden comment-form" method="POST" action="controllers/proses_reply.php">
    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <input name="chapter_id" value="<?php echo $chapter_id ?>"  hidden />
        <input type="hidden" name="parent_comment_id" value="<?=$row['id']?> ">
        <label for="comment" class="sr-only">Your comment</label>
        <textarea id="comment" name="reply_text" rows="3" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Write a comment..." required></textarea>
    </div>
    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
        Post comment
    </button>
</form>

    </article>
    <?php
    $parent_comment_id = $row['id'];
    $reply_sql = "SELECT users.username, replies.comment_text as reply_text, replies.created_at, users.user_id as user_id
    FROM comments as replies
    INNER JOIN users ON replies.user_id = users.user_id
    WHERE replies.parent_comment_id = $parent_comment_id
    ORDER BY replies.created_at DESC";

    $reply_result = $conn->query($reply_sql);

    if ($reply_result->num_rows > 0) {
        while ($reply_row = $reply_result->fetch_assoc()) {
            ?>
    <article class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><?=$reply_row['username']?></p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                        title="February 12th, 2022"><?=time_elapsed_string($reply_row['created_at'])?></time></p>
            </div>
            <?php
             if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    if ($_SESSION['username'] == $reply_row['username']) { 
?>
            <button id="dropdownComment2Button" data-dropdown-toggle="dropdownReply<?= $row['id']?>"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                </svg>
                <span class="sr-only">Comment settings</span>
            </button>

            <?php
    }
}
?>
    
            <!-- Dropdown menu -->
            <div id="dropdownReply<?= $row['id']?>"
                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                    </li>
                </ul>
            </div>
        </footer>
        
        <p class="text-gray-500 dark:text-gray-400"><?= $reply_row['reply_text']?></time></p>
    </article>
    <?php } } ?>
        <?php } }
        ?>
        </div>
        </section>

        <script>
           // script.js
document.addEventListener('DOMContentLoaded', function () {
    const replyButtons = document.querySelectorAll('.reply-button');
    const commentForms = document.querySelectorAll('.comment-form');

    replyButtons.forEach((button, index) => {
        button.addEventListener('click', function () {
            // Sembunyikan semua formulir komentar
            commentForms.forEach((form) => {
                form.classList.add('hidden');
            });

            // Toggle (munculkan atau sembunyikan) formulir komentar yang sesuai
            commentForms[index].classList.toggle('hidden');
        });
    });
});

        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
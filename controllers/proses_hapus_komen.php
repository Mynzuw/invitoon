<?php
include "../koneksi.php";
// Fungsi untuk menghapus komentar berdasarkan ID
function deleteComment($conn, $commentId) {
    // Hapus komentar anak terlebih dahulu
$checkRepliesSql = "SELECT id FROM comments WHERE parent_comment_id = $commentId";
$resultCheckReplies = $conn->query($checkRepliesSql);

if ($resultCheckReplies->num_rows > 0) {
    // Jika ada komentar anak, baru lakukan penghapusan
    $deleteRepliesSql = "DELETE FROM comments WHERE parent_comment_id = $commentId";
    $conn->query($deleteRepliesSql);
} else {
    echo "Tidak ada komentar anak yang perlu dihapus.";
}

// Hapus komentar utama
$deleteMainCommentSql = "DELETE FROM comments WHERE id = $commentId";
if ($conn->query($deleteMainCommentSql) === TRUE) {
    echo "Komentar berhasil dihapus.";
} else {
    echo "Error: " . $deleteMainCommentSql . "<br>" . $conn->error;
}

}

// Pemrosesan penghapusan komentar jika ada parameter 'delete_comment_id' yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_comment_id'])) {
    $deleteCommentId = $_GET['delete_comment_id'];
    deleteComment($conn, $deleteCommentId);
}

?>
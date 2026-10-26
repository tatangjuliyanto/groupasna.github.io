<?php
// Visitor reviews, shared by kedai-asna.php and toko-asna.php.
require_once __DIR__ . '/config.php';

const COMMENT_NAME_MAX = 100;
const COMMENT_TEXT_MAX = 1000;

// Save a review, then redirect (POST/redirect/GET) so a refresh never resubmits the form.
function handle_comment_post(?mysqli $conn, string $page): void
{
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
        return;
    }

    $name = trim((string) ($_POST['name'] ?? ''));
    $comment = trim((string) ($_POST['comment'] ?? ''));
    $saved = false;

    if (
        $conn !== null
        && $name !== '' && mb_strlen($name) <= COMMENT_NAME_MAX
        && $comment !== '' && mb_strlen($comment) <= COMMENT_TEXT_MAX
    ) {
        $stmt = $conn->prepare('INSERT INTO comments (name, comment) VALUES (?, ?)');
        if ($stmt !== false) {
            $stmt->bind_param('ss', $name, $comment);
            $saved = $stmt->execute();
            $stmt->close();
        }
    }

    header('Location: ' . page_url($page) . '?posted=' . ($saved ? '1' : '0'), true, 303);
    exit;
}

function fetch_comments(?mysqli $conn): array
{
    if ($conn === null) {
        return [];
    }

    $result = $conn->query('SELECT name, comment FROM comments');
    return $result === false ? [] : $result->fetch_all(MYSQLI_ASSOC);
}

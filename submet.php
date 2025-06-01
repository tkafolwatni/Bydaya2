<?ph
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        $_POST['name'] ?? '',
        $_POST['father'] ?? '',
        $_POST['mother'] ?? '',
        $_POST['phone'] ?? '',
        $_POST['birthplace'] ?? '',
        $_POST['birthdate'] ?? '',
        $_POST['governorate'] ?? '',
        $_POST['national_id'] ?? '',
        $_POST['notes'] ?? '',
        isset($_POST['agree']) ? 'تم التعهد' : 'لم يتم التعهد'
    ];

    $file = fopen("submissions.csv", "a");
    fputcsv($file, $data);
    fclose($file);

    echo "<h2>تم إرسال الطلب بنجاح.</h2>";
    echo '<a href="index.html">العودة إلى الصفحة الرئيسية</a>';
} else {
    header("Location: join.html");
    exit();
}
?>
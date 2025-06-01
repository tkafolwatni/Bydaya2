<?php
echo "<h2>الطلبات المقدّمة:</h2>";
if (($file = fopen("submissions.csv", "r")) !== false) {
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
    echo "<tr>
        <th>الاسم</th>
        <th>الأب</th>
        <th>الأم</th>
        <th>الهاتف</th>
        <th>مكان الولادة</th>
        <th>تاريخ الولادة</th>
        <th>المحافظة</th>
        <th>الرقم الوطني</th>
        <th>ملاحظات</th>
        <th>تعهد</th>
    </tr>";
    while (($row = fgetcsv($file)) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    fclose($file);
    echo "</table>";
} else {
    echo "لا توجد بيانات بعد.";
}
?>
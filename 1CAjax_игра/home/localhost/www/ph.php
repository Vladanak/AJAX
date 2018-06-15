<?$currentYear = date('Y');
$newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1);
$seconds = $newYear - time();
$days = 0; $hours = 0; $minutes = 0;
$oneMinute = 60;
$oneHour = 60 * $oneMinute;
$oneDay = $oneHour * 24;
if ($seconds / $oneDay > 0) {
    $days = (int)($seconds / $oneDay);
    $seconds -= $days * $oneDay;
}
if ($seconds / $oneHour > 0) {
    $hours = (int)($seconds / $oneHour);
    $seconds -= $hours * $oneHour;
}
if ($seconds / $oneMinute > 0) {
    $minutes = (int)($seconds / $oneMinute);
    $seconds -= $minutes * $oneMinute;
}
printf('Left time: %02d days %02d hours %02d minutes %02d seconds', $days, $hours, $minutes, $seconds);
?>